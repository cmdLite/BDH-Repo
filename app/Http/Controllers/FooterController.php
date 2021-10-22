<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\SubscribeMail;

use Mail;

use App\Jobs\SendSubs;

use App\Models\SubsModel;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Query\Builder;

use Illuminate\Support\Facades\Storage;

class FooterController extends Controller
{

    public function create(){
        return view ('partial.footer');
    }

    public function store_send(Request $request)
    {
                 // Validate the inputs
                 $request->validate([
                    'emailsubs' => 'required|email','email:rfc,dns'
                ]);
                $data = [
                  'subject' => 'Bendix-Website-Subscription',
                  'emailsubs' => $request->emailsubs,
                ];
        
                // ensure the request has a file before we attempt anything else.
                if ($request->has('emailsubs')) {
                  // var_dump($request->emailsubs);
                  // $substb = DB::Table('subs_table')->where('email',$request->emailsubs)->get();
                  
                  // checks if object exists in DB.
                  if(DB::Table('subs_table')->where('email',$request->emailsubs)->exists()){
                    return redirect()->back()->with(['subsmsg' => 'This Email is already subscribed.']);
                  }
                  else{
                     try{

                                    // Mail::to($data['emailsubs'])->send(new SubscribeMail());
                                    SendSubs::dispatch($request->emailsubs)->delay(now()->addSeconds(5));

                                  return redirect()->back()->with(['subsmsg' => 'Subscribed Successfully']);
                                }
                                catch(Exception $e){
                                  return redirect()->back()->with(['subsmsg' => 'Failed to subscribe please try again.']);
                                }
                }

              }
                else{
                  return redirect()->back()->with(['subsfail' => 'Failed to subscribe please try again.']);
                }
                //   Mail::to($data['emailsubs'])->send(new SubscribeMail());

                //   // Mail::to($data['emailsubs'])->send(new SubscribeMail())->subject($data['subject']);
          
                // return back()->with(['subsmsg' => 'Subscribed Successfully']);
    }
}

// Mail::send('subs-email', $data, function ($m) use ($data) {
//   $m->from('example@gmail.com', config('app.name'));
//   $m->to('joshuacalebnavarro@gmail.com')->subject($data['subject']);
// });