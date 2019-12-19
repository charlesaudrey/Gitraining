@component('mail::message')
# Welcome

Please proceed by clicking the link below.

<a href="http://localhost:8000/admin/users/verify/{{ $token }}">
  Click Here
</a>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
