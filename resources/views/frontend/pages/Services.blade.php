@extends('frontend.layout.master')
@section('content')
  <!-- section hero -->
  <section class="inner_banner " data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="banner_content text-center">
              <h1>Services</h1>
              <p>Home <span>//</span> Services</p>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- section hero -->
  <!-- services section -->
  <section class="servicess" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2000">
    <div class="container">
      <div class="row" data-aos="fade-up" data-aos-delay="400" data-aos-duration="3000">
        @foreach ($services as $service)
        <div class="col-md-3">
          <a href="{{ route('UI_detail_service',$service->slug)}}" class="service_a">
            <div class="service_container">
                {!!$service->icon!!}
              <h3>{{$service->name}}</h3>
              <p>{{$service->description}}</p>
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- services section -->
  <!-- why you need seo -->
  @include('frontend.include.need_seo')
  <!-- why you need seo -->
  <!-- footer section -->
  @include('frontend.include.footer')
  @endsection
