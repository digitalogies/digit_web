<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('public/frontend/assets/images/fav.svg') }}" sizes="32x32" />
    <title>Digitalogies</title>
    <!-- bootstrap cdn -->
@include('frontend.include.css')
</head>
<body>
  <!-- <div class="full_page"> -->
    <!-- <div id="preloader">
      <div id="loader"><img src="{{ asset('public/frontend/assets/images/Final-Loader.gif') }}" alt=""></div>
    </div> -->
  <a href="#" id="scroll" style="display: none;"><span></span></a>

<main class="wrapper">

    <!-- header start -->
@include('frontend.include.nav')
  <!-- header start -->
  {{-- <div class="full_page"> --}}
    <!-- section hero -->
    @yield('content')
  <!-- footer section -->
{{-- @include('frontend.include.footer') --}}
  <!-- footer section -->
{{-- </div> --}}
  <!-- </div> -->
</main>
@if (\Session::has('success'))
<div class="modal modal-thankyou fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
        <img id="thanksIcon" src="{{ asset('public/frontend/assets/images/thanks-plan.png') }}" alt="">
        <h2 class="modal-title">Thank You</h2>
        <p>{{ \Session::get('success') }}</p>
    </div>
    </div>
</div>
{{-- @dd(\Session::get('success')) --}}

@endif

@include('frontend.include.script')


</body>
</html>
