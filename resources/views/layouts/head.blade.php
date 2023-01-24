 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>EPS Admin Dashboard</title>
    <link rel="icon" type="image/x-icon" href="{{ URL::to('') }}/frontend/img/favicon.png">


    <!-- Favicon -->


   @include('layouts.partials.style')

   <style>
    .rounded-circle {
  border-radius: 50% !important;
  width: 40px !important;
  height: 40px !important;
}
   </style>
