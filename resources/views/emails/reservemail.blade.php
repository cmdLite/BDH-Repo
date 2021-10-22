@component('mail::layout')
{{-- Header --}}
@slot ('header')
@component('mail::header', ['url' => config('app.url')])
Website Inquiry Form
@endcomponent
@endslot

{{-- Content here --}}


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