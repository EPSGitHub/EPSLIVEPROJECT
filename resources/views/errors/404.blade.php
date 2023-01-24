<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page not Found</title>
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css?ver=1.3') }}">


</head>
<body>

    <section class="page_404">
      <div class="container">
        <div class="row">
        <div class="col-sm-12 ">
        <div class="col-sm-10 col-sm-offset-1  text-center">
        <div class="four_zero_four_bg">
          <h1 class="text-center ">404 ERROR</h1>
            <img src="{{ URL::to('') }}/frontend/img/404.svg" alt="">

        </div>

        <div class="contant_box_404">
        <h3>
       Page not Found
        </h3>

        <p>the page you are looking for not avaiable!</p>

        <a href="{{ url('/') }}" class="btn btn-success shadow-none">Go to Home</a>
      </div>
        </div>
        </div>
        </div>
      </div>
    </section>




</body>
</html>
