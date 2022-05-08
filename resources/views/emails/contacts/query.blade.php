@component('mail::message')
# {{ $name }}

Email:- {{ $email }}

## Subject:- {{ $subject }}

Message:- {{ $message }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
