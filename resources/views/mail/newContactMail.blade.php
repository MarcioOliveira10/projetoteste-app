@component("mail::message")

  Welcome {{$name}}, {{$lastName}}!!



  Thanks, <br>
  {{ config('app.name') }}

@endComponent