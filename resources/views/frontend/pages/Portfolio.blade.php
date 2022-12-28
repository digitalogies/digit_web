@extends('frontend.layout.master')
@section('content')
  <!-- section hero -->
  <section class="inner_banner " data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="banner_content text-center">
              <h1>Portfolio</h1>
              <p>Home <span>//</span> Portfolio</p>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- section hero -->
  <!-- portfolio section -->
  <section class="portfolio" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2000">
    <div class="container">
      <div class="row">
        <div class="col-md-12 py-5">
          <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#see_all" type="button" role="tab"  aria-selected="true">see all</button>
            </li>
            @foreach ($services as $key=>$service)
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#{{$service->slug}}" type="button" role="tab"  aria-selected="true">{{$service->name}}</button>
            </li>
            @endforeach

          </ul>
        </div>
      </div>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active row" id="see_all" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row">
            @foreach ($services as $key=>$service)
                @foreach ($service->get_portfolio as $portfolio_image)
                <div class="col-md-4"><a href="{{route('UI_portfolio_detail',$portfolio_image->slug)}}"><img src="{{asset('public/assets/frontend/images/')}}/{{$portfolio_image->image}}" alt=""></a></div>
                @endforeach
            @endforeach
            </div>
          </div>
        @foreach ($services as $key=>$service)
        <div class="tab-pane fade" id="{{$service->slug}}" role="tabpanel">
          <div class="row">

            @foreach ($service->get_portfolio as $portfolio_image)
                <div class="col-md-4"><a href="{{route('UI_portfolio_detail',$portfolio_image->slug)}}"><img src="{{asset('public/assets/frontend/images/')}}/{{$portfolio_image->image}}" alt=""></a></div>
            @endforeach

            {{-- <div class="col-md-12 text-center py-5">
              <a href="" class="btn btn-primary">Load More Projects <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="16px">
                <image x="0px" y="0px" width="16px" height="16px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAQAAABuvaSwAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmCwcQFhNizgzuAAABOUlEQVQoz5WSvU7CYBSGX0lASXQokwM0pCHGyZF7MKkjgzfA0o0BglfAUqeyeAPudnDoXdjJxCb8uPITN1geBtukf5Dwne2cJ1/Oe973AqWeoWc96kG32utXP/rUuzapOUldMWbDFBuTGtfcYzNlwwv1hEnQNiGvtFCumriEtNNwhyXDApjUkCWdBK7zxeAoKsSAkPo/PMY9iQrhMkaiwTazq0W/RH6LLQ3h4GX+sIiYFGDh4YgPntKwhEFAUIBtfPHNXRaWJAICrAzcYiH+uCnCEhMirNSkxq6iS+1U9t4k9XM9Flnf4m4sM7+Gj52H6bFmVCYwdzqJEWt65afLm9Ijwjpmyll2nxmksyKahN+leTr8lVjJTF2tFMqTLVNVVWXKlqdQK3U1K+ZKGDj4zNmzZ46Pg5GeHwDEaMx/y+4iSgAAAABJRU5ErkJggg=="></image>
                </svg>
              </a>
            </div> --}}

          </div>
        </div>
        @endforeach


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
  <!-- portfolio section -->
  @include('frontend.include.footer')
  @endsection
{{--
    <script>

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
