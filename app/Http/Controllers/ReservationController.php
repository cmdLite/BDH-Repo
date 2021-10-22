<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ReserveForm;
use App\Jobs\SendMailJob;

class ReservationController extends Controller
{
    public function create()
    {
        return view('reservation');
        
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'email' => 'required|email',
          'name' => 'required',
          'content' => 'required',
          'phone' => 'required|numeric',
        ]);

        $data = [
          'subject' =>'Bendix-Website-Inquiry',
          'name' => $request->name,
          'email' => $request->email,
          'content' => $request->content,
          'phone' =>$request->phone
        ];

          SendMailJob::dispatch($data)->delay(now()->addSeconds(5));

          return back()->with(['message' => 'Inquiry Sent, please wait for us to review.']);

      
        // Mail::send('email-template', $data, function($message) use ($data) {
        //   $message->from($data['email'])
        //   ->subject($data['subject'],);
        // });

       
    }
}

