@extends('frontend.layout.master')
@section('content')


<!-- header start -->
  <!-- section hero -->
  <section class="inner_banner " data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="banner_content text-center">
              <h1>Career</h1>
              <p>Home <span>//</span> Career</p>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- section hero -->
  <!-- jobs section -->
  <section class="job_section" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
    <div class="container">
      <hgroup class="hgroup text-center" data-title="Career">
        @if ($careers->count() > 0)
        <h2 class="hgroup-title">Jobs Available Now</h2>
        @else
        <h2 class="hgroup-title">No Jobs Available Now</h2>
        @endif

      </hgroup>
      <div class="row">
        @foreach ($careers as $career)

        <div class="col-md-4">
            <div class="career_box">
              <div class="career_head d-flex align-items-center">
                <img src="{{ asset('public/frontend/assets/images/career_logo.png')}}" alt="">
                <div class="career_tile pl-4">
                  <h4>{{ $career->tittle }} </h4>
                  <span>{{ $career->designation }}</span>
                </div>
              </div>
              <div class="career_body">
                <p>
                  Requirments: {!!$career->responsibilities!!}<br>
                  Location: {{$career->location}}
                </p>
                <p class="text-right">
                  <a href="{{ route('UI_career_detail',$career->slug) }}" class="btn btn-primary">Apply Now <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="16px">
                      <image x="0px" y="0px" width="16px" height="16px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAQAAABuvaSwAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmCwcQFhNizgzuAAABOUlEQVQoz5WSvU7CYBSGX0lASXQokwM0pCHGyZF7MKkjgzfA0o0BglfAUqeyeAPudnDoXdjJxCb8uPITN1geBtukf5Dwne2cJ1/Oe973AqWeoWc96kG32utXP/rUuzapOUldMWbDFBuTGtfcYzNlwwv1hEnQNiGvtFCumriEtNNwhyXDApjUkCWdBK7zxeAoKsSAkPo/PMY9iQrhMkaiwTazq0W/RH6LLQ3h4GX+sIiYFGDh4YgPntKwhEFAUIBtfPHNXRaWJAICrAzcYiH+uCnCEhMirNSkxq6iS+1U9t4k9XM9Flnf4m4sM7+Gj52H6bFmVCYwdzqJEWt65afLm9Ijwjpmyll2nxmksyKahN+leTr8lVjJTF2tFMqTLVNVVWXKlqdQK3U1K+ZKGDj4zNmzZ46Pg5GeHwDEaMx/y+4iSgAAAABJRU5ErkJggg=="></image>
                      </svg>
                  </a>
                </p>
              </div>
            </div>
          </div>
        @endforeach


      </div>
    </div>
  </section>
  <!-- jobs section -->
  <!-- footer section -->
  @include('frontend.include.footer')
  @endsection


