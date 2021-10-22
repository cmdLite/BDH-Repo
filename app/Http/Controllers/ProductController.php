<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function sendAnalytics(Request $request, RateLimiter $limiter)
    {
        $validated = $request->validate([
            'email' => 'required|email|exists:reportables',
        ]);
        
        // Let's create a key to identify the rate limiter for the user. We will use
        // the User ID along with a descriptive string so it does not collide with
        // other rate limiters in the application, or we would be in big trouble.
        $key = $request->user()->id . '|' . $validated['email'] . ':send_inquiry';

        // Check if the user has requested too many Podcast Analytics. If that's the
        // case, we will redirect the user back to where it was along with an error 
        // telling him he tried too many times, and needs to wait some minutes.
        if ($limiter->tooManyAttempts($key, 1)) {
            $availableAt = now()->addSeconds($limiter->availableIn($key))->ago();
            
            return back()->withErrors('analytics', 'Try again '. $availableAt);
        }
        

        // After the Job has been dispatched (to the queue), we hit the rate limiter
        // and hold the decay time for 1 hour. If the user tries again, it will not
        // pass another attempt since we already registered one for the next hour.
        $limiter->hit($key, 60 * 60);

        return back()->with([
            'alert' => 'Your Analytics are on the way!'
        ]);
    }
}
