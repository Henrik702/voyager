@component('mail::message')
# {{ $email }}
# {{ $name }}
# {{ $message }}
@component('mail::button', ['url' => ''])
    Button Text
@endcomponent

{{ $subject }}
<br>
@endcomponent
