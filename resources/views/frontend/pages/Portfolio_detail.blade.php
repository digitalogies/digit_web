@extends('frontend.layout.master')
@section('content')
  <!-- section hero -->
  <section class="inner_banner " data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="banner_content text-center">
              <h1>Portfolio Detail</h1>
              <p>Home <span>//</span> Portfolio Detail</p>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- section hero -->
  <!-- portfolio detail section -->
  <section class="portfolio_details" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">
    <div class="container">
      <div class="row">
      <div class="col-md-12 mt-3 full_size_portfolio">
          <img src="{{asset('public/assets/frontend/images/')}}/{{$portfolios->image}}" alt="" class="img-fluid">
        </div>
        <div class="col-md-8" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2000">
          <div class="project_detail">
            <h3>Project Description</h3>
            <p>{{$portfolios->description ? $portfolios->description : ''}}</p>
            <p>{!!$portfolios->detail ? $portfolios->detail : ''!!}</p>
            {{-- <h3>Problems</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem. aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            <h3>Solutions</h3>
            <div class="solutions_box row" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2000">
              <div class="col-md-6">
                <ul class="solution_ul">
                  <li>Full business control</li>
                  <li>Regular update monitoring</li>
                  <li>User dashboard & analytics</li>
                  <li>User dashboard & analytics</li>
                  <li>Custom reporting</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="solution_ul">
                  <li>Regular update monitoring</li>
                  <li>24/7 priority support</li>
                  <li>Full business control</li>
                  <li>User dashboard & analytics</li>
                  <li>Custom reporting</li>
                </ul>
              </div>
            </div>
            <h3>Results</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,</p>
            {{-- <div class="input-group" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2000"> --}}
              {{-- <input
                type="text"
                class="form-control p-4"
                data-role="tagsinput"
                value="design,technology,wordpress"
              />
            </div> --}}
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2000">
          <div class="information_box">
            <h4>Information</h4>
            <ul class="info">
              <li>CLIENT:<span>{{$portfolios->client}}</span></li>
              <li>CATEGORY:<span>{{$portfolios->get_services->name}}</span></li>
              <li>DURATION:<span>{{$portfolios->duration}}</span></li>
              <li>WEBSITE:<span>{{$portfolios->website}}</span></li>
              <li>TAGS:<span>{{$portfolios->tag}}</span></li>
            </ul>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  @include('frontend.include.need_seo')
  <section class="testimonials section_100vh scrolly" >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="testimonials_wrapper">
            <div class="testimonial_slider row">

                @foreach ($reviews as $review)
                <div class="testimonial col-md-12 d-flex">
                    <div class="testmnl_left">
                    <hgroup class="hgroup" data-title="Feedback" data-aos="fade-left">
                        <h2 class="hgroup-title" data-aos="fade-right" data-aos-duration="2000">What Our Client's Say about Digitalogies</h2>
                    </hgroup>
                    <p class="tstmnl_para" data-aos="fade-left">{!!$review->detail!!}</p>
                        <h3 data-aos="fade-right">{{$review->name}}</h3>
                        <span data-aos="fade-up">Entrepreneur</span>
                    </div>
                    <div class="testmnl_right">
                    <div class="client-image">
                        <img data-aos="fade-down" src="{{ asset('public/assets/frontend/images/') }}/{{$review->image}}" alt="" class="img">
                        <img data-aos="fade-up" src="{{ asset('public/frontend/assets/images/qomas.png') }}" alt="" class="img">
                    </div>
                    </div>
                </div>

                @endforeach
            </div>
          </div>
        </div>
      </div>

      <div>
        <div class="row counter_row">
          <div class="col-md-3">
            <div class="counter" data-aos="fade-up" data-aos-duration="2000">
              <div class="count">89</div>
              <span>Business Partner</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="counter" data-aos="fade-up" data-aos-duration="2000">
              <div class="count">130</div>
              <span>Finished Projects</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="counter" data-aos="fade-up" data-aos-duration="2000">
              <div class="count">78</div>
              <span>Happy Clients</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="counter" data-aos="fade-up" data-aos-duration="2000">
              <div class="count">24</div>
              <span>Awards Winning</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  @include('frontend.include.footer')
  @endsection
