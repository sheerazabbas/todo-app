@component('mail::message')

Welcome {{ $user->name }},

<p> Welcome to TODO list app. In order to use our services please confirm your mail please enter this code on your screen </p>
<h3>{{ $code }}</h3>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
