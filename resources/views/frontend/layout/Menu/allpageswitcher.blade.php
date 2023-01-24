@php
$routeName = Route::currentRouteName();

  @endphp


@if(app()->getLocale()=='bn')
<a class="d-inline btn btn-sm btn-danger hddownbtn shadow-none " href="{{  route($routeName, [''], false, 'en')}}"> Eng</a>
@endif

@if(app()->getLocale()=='en')
<a  class=" d-inline btn btn-sm btn-danger hddownbtn shadow-none" href="{{  route($routeName, [''], true, 'bn')}}">বাংলা</a>
 @endif
