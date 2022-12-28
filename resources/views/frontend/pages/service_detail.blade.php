@extends('frontend.layout.master')
@section('content')
  <!-- section hero -->
  <section class="inner_banner" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="banner_content text-center">
              <h1>{{$service->name}}</h1>
              <p>Home <span>//</span>{{$service->name}}</p>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- section hero -->
  <!-- service detail section -->
  <section class="service_details" data-aos="fade-up" data-aos-delay="200" data-aos-duration="2000">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <img src="{{ asset('public/assets/frontend/images/') }}/{{$service->inner_image}}" alt="" class="img-fluid service_banner">
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2000">
          <div class="right_services">
            <h3>Services</h3>
            <ul class="all_services" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2000">
                @php
                $count = 1;
                @endphp
                @foreach ($services as $key=>$data)
@if ($data->id != $service->id)
<li><a href="{{ route('UI_detail_service',$data->slug)}}"><span>{{$count}}</span>{{$data->name}}</a></li>
                    {{$count += 1}}
@endif

                @endforeach
            </ul>
          </div>
        </div>
        <div class="col-md-8" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2000">
          <div class="left_content">
            <h3>Description</h3>
            <p>{{$service->description}}</p>
            <h3>Service Process</h3>
            {!!$service->detail!!}
            {{-- <div class="services_process" data-aos="fade-up" data-aos-delay="400" data-aos-duration="2000">
              <div class="row">
                <div class="col-md-6">
                  <div class="process_box">
                    <div class="process-head">
                      <span>01</span>
                      <h4>Service Process</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ex</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="process_box">
                    <div class="process-head">
                      <span>02</span>
                      <h4>Service Process</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ex</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="process_box">
                    <div class="process-head">
                      <span>03</span>
                      <h4>Service Process</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ex</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="process_box">
                    <div class="process-head">
                      <span>04</span>
                      <h4>Service Process</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ex</p>
                  </div>
                </div>
              </div>
            </div>
            <h3>Services outcome</h3>
            <ul class="respons_ul mt-4">
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</li>
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</li>
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</li>
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</li>
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</li>
            </ul> --}}
          </div>
        </div>
        <div class="col-md-4 mt-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="3000">
          <div class="right_services">
            <h3>Get A Quote</h3>
            {{-- @if ($errors->any())
            <div class="alert alert-danger">
            <ul style="list-style: none">
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
            </ul>
            </div>
            @endif --}}
            <form action="{{ route('UI_message') }}" method="post" class="get_quote">
                @csrf
              <div class="form-group">
                <input type="hidden" class="form-control" value="{{$service->name}}" name="service">
                <input type="text" class="form-control" placeholder="Enter Your First Name" name="name" oninput="this.value = this.value.replace(/[^A-Za-z, ]/, '')" title="contain letters only" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Invalid email address" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea3" rows="3" placeholder="Write Message" name="message"></textarea>
              </div>
              <div class="col-md-12 p-0">
                <button class="mybtn">Get Started<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="16px">
                  <image x="0px" y="0px" width="22px" height="16px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAQAAABuvaSwAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmCwcQFhNizgzuAAABOUlEQVQoz5WSvU7CYBSGX0lASXQokwM0pCHGyZF7MKkjgzfA0o0BglfAUqeyeAPudnDoXdjJxCb8uPITN1geBtukf5Dwne2cJ1/Oe973AqWeoWc96kG32utXP/rUuzapOUldMWbDFBuTGtfcYzNlwwv1hEnQNiGvtFCumriEtNNwhyXDApjUkCWdBK7zxeAoKsSAkPo/PMY9iQrhMkaiwTazq0W/RH6LLQ3h4GX+sIiYFGDh4YgPntKwhEFAUIBtfPHNXRaWJAICrAzcYiH+uCnCEhMirNSkxq6iS+1U9t4k9XM9Flnf4m4sM7+Gj52H6bFmVCYwdzqJEWt65afLm9Ijwjpmyll2nxmksyKahN+leTr8lVjJTF2tFMqTLVNVVWXKlqdQK3U1K+ZKGDj4zNmzZ46Pg5GeHwDEaMx/y+4iSgAAAABJRU5ErkJggg=="></image>
                  </svg></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- service detail section -->
  <!-- services portfolio section -->
 {{-- @if ($portfolios->count() > 0)
 <section class="creative_projects section_100vh wow fadeInUp" >
    <div class="container">
      <hgroup class="hgroup" data-title="Portfolio">
        <h2 class="hgroup-title text-center"> We Created Creative Projects</h2>
      </hgroup>
      <div class="row">
        @foreach ($portfolios as $portfolio)
        <div class="col-md-3 p-0 d-flex flex-column">
          <div class="gallery">

            <a data-fancybox="gallery" data-src="{{ asset('public/assets/frontend/images/') }}/{{$portfolio->image}}">
              <i class="fa fa-plus"></i>
              @if ($portfolio->image)

              @endif
              <img src="{{ asset('public/assets/frontend/images/') }}/{{$portfolio->image}}"/>
            </a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
 @endif --}}

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

  <!-- services portfolio section -->
  @include('frontend.include.footer')
<!-- footer section -->

@endsection


