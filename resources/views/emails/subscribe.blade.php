@component('mail::layout')
{{-- Header --}}
@slot ('header')
@component('mail::header', ['url' => config('app.url')])
<img src="{{ asset('bh-img/logo/Mail-logo-01.png') }}" width="175px">
@endcomponent
@endslot

{{-- Content here --}}
<h1>Hello from Bendix Hotel</h1> <br>
Thankyou for subscribing into our mailing list.<br>
Expect to receive news in our upcoming promos, discounts and events.

{{-- Subcopy --}}
@slot('subcopy')
@component('mail::subcopy')
<!-- subcopy -->
Best Regards,<br>{{ config('app.name') }}
@endcomponent
@endslot

{{-- Footer --}}
@slot ('footer')
@component('mail::footer')
<!-- footer -->
© 2021 Bendix Hotel. All rights reserved.
@endcomponent
@endslot
@endcomponent