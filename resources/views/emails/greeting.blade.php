@component('mail::message')
# Hello {{ $username }}

# Nice to have you with us !!

@component('mail::panel')
# ลุงตู่ได้เป็นนายก !!
@endcomponent

@component('mail::button', ['url' => 'https://simedicine.org'])
Simedcine.org
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
