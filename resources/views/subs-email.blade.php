<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">--News Letter Subscriber--</div>
                  <div class="card-body">
                   @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                           {{ __('A fresh mail has been sent to your email address.') }}
                       </div>
                   @endif
                   <br>
				   Below is the email of a client subscriber, who wants to get News letter updates.
                   <br>
                   <br>
                   {!! $emailsubs !!}
               </div>
           </div>
       </div>
   </div>
</div>