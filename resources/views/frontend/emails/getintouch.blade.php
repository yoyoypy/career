@component('mail::message')
Hi, {{ $data['name'] }}!

Thank you for contacting us, our representative will get back to you soon!

Thanks,<br>
{{ config('app.name') }}
@endcomponent
