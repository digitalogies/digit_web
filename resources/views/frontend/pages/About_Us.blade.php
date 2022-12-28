@extends('frontend.layout.master')
@section('content')
<!-- header start -->
  <!-- section hero -->
  <section class="inner_banner " data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="banner_content text-center">
              <h1>About Us</h1>
              <p>Home <span>//</span> About</p>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- section hero -->
  <!-- why you need seo -->
  @include('frontend.include.need_seo')
  <!-- why you need seo -->
  <!-- our mission section -->
  <section class="our_mission" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
    <div class="container">
      <div class="row">
        <div class="col-md-8 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
          <div class="mission_sec">
            <hgroup class="hgroup" data-title="About Us">
              <h2 class="hgroup-title">Our Mission</h2>
            </hgroup>
            <p>Our Mission is the core values and foundation of our company’s culture. Our Company has one strategy: Give respect & take respect to be successful in your career as we are a true believer in respecting every individual’s rights and privacy, leading us to a win-win situation for our company and its personnel.</p>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
          <div class="mission_right">
            <img src="{{ asset('public/frontend/assets/images/mission_1.png ')}}" alt="">
          </div>
        </div>
        <div class="col-md-8 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
          <div class="mission_sec">
            <hgroup class="hgroup" data-title="About Us">
              <h2 class="hgroup-title">Our Vision</h2>
            </hgroup>
            <p>Excellence Gets It Done on Time! <br> We perform to ensure The Digitalogies can make it to new heights. We love what we do that motivated us to reinforce our ties with the industry’s top-most enthusiasts</p>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
          <div class="mission_right">
            <img src="{{ asset('public/frontend/assets/images/mission_2.png ')}}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- our mission section -->
  <!-- testimonials slider section -->
  <section class="testimonials inner_slider section_100vh" data-aos="fade-up" data-aos-delay="200">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="wrapper">
            <div class="testimonial_slider row">
                @foreach ($reviews as $review)
                <div class="testimonial col-md-12 d-flex">
                    <div class="testmnl_left">
                    <hgroup class="hgroup" data-title="Feedback">
                        <h2 class="hgroup-title">What Our Client's Say about Digitalogies</h2>
                    </hgroup>
                    <p class="tstmnl_para">{!! $review->detail !!}</p>
                        <h3>{{ $review->name }}</h3>
                        <span>Actor</span>
                    </div>
                    <div class="testmnl_right">
                    <img src="{{ asset('public/assets/frontend/images/')}}/{{$review->image}}" alt="" class="img">
                    <img src="{{ asset('public/frontend/assets/images/qomas.png ')}}" alt="" class="img">
                    </div>
                </div>
                @endforeach


            </div>
          </div>
        </div>
      </div>
      <div class="row counter_row">
          <div class="col-md-3">
            <div class="counter aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">
              <div class="count">89</div>
              <span>Business Partner</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="counter aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">
              <div class="count">130</div>
              <span>Finished Projects</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="counter aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">
              <div class="count">78</div>
              <span>Happy Clients</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="counter aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">
              <div class="count">24</div>
              <span>Awards Winning</span>
            </div>
          </div>
        </div>
    </div>
  </section>
  <!-- testimonials slider section -->
  <!-- team member section -->
  @include('frontend.include.expert_team')
  <!-- team member section -->
  <!-- footer section -->
  @include('frontend.include.footer')



  @endsection

    {{-- <script>

$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});
    </script> --}}

