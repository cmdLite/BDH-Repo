<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">---- Quick Contact Form ----</div>
                  <div class="card-body">
                   @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                           {{ __('A fresh mail has been sent to your email address.') }}
                       </div>
                   @endif
                   <br>
                   Message:
                   <br>
                   "{!! $content !!}"
                   <br>
                   <br>
                   <br>
                   ---- Inquirer's Info: ----
                   <br>
                   Name:&emsp;&emsp;{!! $name !!}
                   <br>
                    Email:&emsp;&emsp;{!! $email !!}
                   <br>
                   Number:&emsp;{!! $phone !!}
               </div>
           </div>
       </div>
   </div>
</div>