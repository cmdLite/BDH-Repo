<?php

namespace App\Jobs;

use Mail;
use App\Models\SubsModel;
use App\Mail\SubscribeMail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use App\Http\Controllers\FooterController;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendSubs implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $req;
    public function __construct($req)
    {
       $this->req=$req;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->req)->send(new SubscribeMail($this->req));
        $subs = new SubsModel;
        $subs->email = $this->req;
        $subs->save();
    }
}
