@php
$routeName = Route::currentRouteName();
$r = URL::current();
    $p = parse_url($r);
    $pt = explode('/', $p['path']);
    $y = end($pt);

  //   print_r($pt);

  //   echo $y;

  @endphp

@if(app()->getLocale()=='bn')
<a class="d-inline btn btn-sm btn-danger hddownbtn shadow-none" href="{{  route($routeName, [''], false, 'en')}}/{{ $y }}"> Eng</a>
@endif

@if(app()->getLocale()=='en')
  <a  class=" d-inline btn btn-sm btn-danger hddownbtn shadow-none" href="{{  route($routeName, [''], true, 'bn')}}/{{ $y }}">বাংলা</a>
  @endif


