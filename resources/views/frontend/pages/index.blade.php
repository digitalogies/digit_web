
@extends('frontend.layout.master')
@section('content')
  <div id="preloader">
    <div id="loader"><img src="{{ asset('public/frontend/assets/images/Final-Loader.gif') }}" alt=""></div>
  </div>
  <!-- header start -->
  <section id="MainContent">
    <!-- section hero -->
    {{-- <section class="section-hero section_100vh scrolly">
        <div id="particles-js"></div>
      <div class="container">

            <div class="row align-items-center">
                <div class="col-md-5 left-side">
                    <h3 class="h3" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="1000">Innovative</h3>
                    <h1 class="h1" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">Solu<span>tions</span></h1>
                    <h2 class="h2" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="1000">For your Business</h2>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">To do more and better than usually expected. All-in-one Technology Solutions For all your Business Blues from Web Development to SEO Services, we do it all!</p>

                    <a href="{{ route('UI_contactUs') }}" class="btn btn-primary" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000">Get Started <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="30px" height="16px">
                        <image  x="0px" y="0px" width="16px" height="16px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAQAAABuvaSwAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmCwcQFhNizgzuAAABOUlEQVQoz5WSvU7CYBSGX0lASXQokwM0pCHGyZF7MKkjgzfA0o0BglfAUqeyeAPudnDoXdjJxCb8uPITN1geBtukf5Dwne2cJ1/Oe973AqWeoWc96kG32utXP/rUuzapOUldMWbDFBuTGtfcYzNlwwv1hEnQNiGvtFCumriEtNNwhyXDApjUkCWdBK7zxeAoKsSAkPo/PMY9iQrhMkaiwTazq0W/RH6LLQ3h4GX+sIiYFGDh4YgPntKwhEFAUIBtfPHNXRaWJAICrAzcYiH+uCnCEhMirNSkxq6iS+1U9t4k9XM9Flnf4m4sM7+Gj52H6bFmVCYwdzqJEWt65afLm9Ijwjpmyll2nxmksyKahN+leTr8lVjJTF2tFMqTLVNVVWXKlqdQK3U1K+ZKGDj4zNmzZ46Pg5GeHwDEaMx/y+4iSgAAAABJRU5ErkJggg==" />
                        </svg></a>
                </div>
                <div class="col-md-7 right-side">
                    <div class="img_box">
                        <img data-aos="fade-down" data-aos-duration="1500" data-aos-delay="1500" src="{{ asset('public/frontend/assets/images/element_girl.png') }}" alt="" class="first img">
                        <img data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1500" src="{{ asset('public/frontend/assets/images/element_girl_2.png') }}" alt="" class="scnd img">
                        <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1500" src="{{ asset('public/frontend/assets/images/element_girl_3.png') }}" alt="" class="third img">
                      </div>
                </div>
            </div>
            <a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000" href="{{ route('UI_contactUs') }}" class="btn btn-primary text-center responsive_btn">Get Started <svg
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              width="30px" height="16px">
              <image  x="0px" y="0px" width="16px" height="16px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAQAAABuvaSwAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmCwcQFhNizgzuAAABOUlEQVQoz5WSvU7CYBSGX0lASXQokwM0pCHGyZF7MKkjgzfA0o0BglfAUqeyeAPudnDoXdjJxCb8uPITN1geBtukf5Dwne2cJ1/Oe973AqWeoWc96kG32utXP/rUuzapOUldMWbDFBuTGtfcYzNlwwv1hEnQNiGvtFCumriEtNNwhyXDApjUkCWdBK7zxeAoKsSAkPo/PMY9iQrhMkaiwTazq0W/RH6LLQ3h4GX+sIiYFGDh4YgPntKwhEFAUIBtfPHNXRaWJAICrAzcYiH+uCnCEhMirNSkxq6iS+1U9t4k9XM9Flnf4m4sM7+Gj52H6bFmVCYwdzqJEWt65afLm9Ijwjpmyll2nxmksyKahN+leTr8lVjJTF2tFMqTLVNVVWXKlqdQK3U1K+ZKGDj4zNmzZ46Pg5GeHwDEaMx/y+4iSgAAAABJRU5ErkJggg==" />
              </svg></a>
        </div>
    </section> --}}
    <section class="section-hero section_100vh scrolly">
      <div id="particles-js"></div>
        <div class="container">
          <div class="home_slider">
            <div class="row align-items-center new_slider_class">
              <div class="col-md-5 left-side">
                <h3 class="h3" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="1000">Innovative</h3>
                <h1 class="h1" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">Solu<span>tions</span></h1>
                <h2 class="h2" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="1000">For your Business</h2>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">To do more and better than usually expected. All-in-one Technology Solutions For all your Business Blues from Web Development to SEO Services, we do it all!</p>

                <a href="{{ route('UI_contactUs') }}" class="btn btn-primary" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000">Get Started <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="30px" height="16px">
                <image  x="0px" y="0px" width="16px" height="16px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAQAAABuvaSwAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmCwcQFhNizgzuAAABOUlEQVQoz5WSvU7CYBSGX0lASXQokwM0pCHGyZF7MKkjgzfA0o0BglfAUqeyeAPudnDoXdjJxCb8uPITN1geBtukf5Dwne2cJ1/Oe973AqWeoWc96kG32utXP/rUuzapOUldMWbDFBuTGtfcYzNlwwv1hEnQNiGvtFCumriEtNNwhyXDApjUkCWdBK7zxeAoKsSAkPo/PMY9iQrhMkaiwTazq0W/RH6LLQ3h4GX+sIiYFGDh4YgPntKwhEFAUIBtfPHNXRaWJAICrAzcYiH+uCnCEhMirNSkxq6iS+1U9t4k9XM9Flnf4m4sM7+Gj52H6bFmVCYwdzqJEWt65afLm9Ijwjpmyll2nxmksyKahN+leTr8lVjJTF2tFMqTLVNVVWXKlqdQK3U1K+ZKGDj4zNmzZ46Pg5GeHwDEaMx/y+4iSgAAAABJRU5ErkJggg==" />
                </svg></a>
              </div>
              <div class="col-md-7 right-side">
                <div class="img_box d-flex justify-content-end">
                  <img src="{{ asset('public/frontend/assets/images/hero_section_1.png') }}" alt="">
                </div>
              </div>
            </div>
            <div class="row align-items-center new_slider_class">
              <div class="col-md-5 left-side">
                <h3 class="h3">SEO</h3>
                <h1 class="h1">Opti<span>mize</span></h1>
                <h2 class="h2">For your Company</h2>
                <p>To get along with the latest trends, our SEO team stays on top of the latest SEO trends and algorithm updates to further our industry knowledge and enable more businesses to maximize their digital potential.</p>

                <a href="{{ route('UI_contactUs') }}" class="btn btn-primary">Get Started <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="30px" height="16px">
                <image  x="0px" y="0px" width="16px" height="16px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAQAAABuvaSwAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmCwcQFhNizgzuAAABOUlEQVQoz5WSvU7CYBSGX0lASXQokwM0pCHGyZF7MKkjgzfA0o0BglfAUqeyeAPudnDoXdjJxCb8uPITN1geBtukf5Dwne2cJ1/Oe973AqWeoWc96kG32utXP/rUuzapOUldMWbDFBuTGtfcYzNlwwv1hEnQNiGvtFCumriEtNNwhyXDApjUkCWdBK7zxeAoKsSAkPo/PMY9iQrhMkaiwTazq0W/RH6LLQ3h4GX+sIiYFGDh4YgPntKwhEFAUIBtfPHNXRaWJAICrAzcYiH+uCnCEhMirNSkxq6iS+1U9t4k9XM9Flnf4m4sM7+Gj52H6bFmVCYwdzqJEWt65afLm9Ijwjpmyll2nxmksyKahN+leTr8lVjJTF2tFMqTLVNVVWXKlqdQK3U1K+ZKGDj4zNmzZ46Pg5GeHwDEaMx/y+4iSgAAAABJRU5ErkJggg==" />
                </svg></a>
              </div>
              <div class="col-md-7 right-side">
                <div class="img_box d-flex justify-content-end seo_slide">
                  <img src="{{ asset('public/frontend/assets/images/home_slider_2.png') }}" alt="">
                </div>
              </div>
            </div>
            <div class="row align-items-center new_slider_class">
              <div class="col-md-5 left-side">
                <h3 class="h3">UI/UX</h3>
                <h1 class="h1">Desi<span>gning</span></h1>
                <h2 class="h2">For your Company</h2>
                <p >As a top-notch UI/UX designing company, we create visually appealing designs for your projects to gain user attention, engage them, and leave them with an unmatched usability experience!</p>

                <a href="{{ route('UI_contactUs') }}" class="btn btn-primary">Get Started <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="30px" height="16px">
                <image  x="0px" y="0px" width="16px" height="16px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAQAAABuvaSwAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmCwcQFhNizgzuAAABOUlEQVQoz5WSvU7CYBSGX0lASXQokwM0pCHGyZF7MKkjgzfA0o0BglfAUqeyeAPudnDoXdjJxCb8uPITN1geBtukf5Dwne2cJ1/Oe973AqWeoWc96kG32utXP/rUuzapOUldMWbDFBuTGtfcYzNlwwv1hEnQNiGvtFCumriEtNNwhyXDApjUkCWdBK7zxeAoKsSAkPo/PMY9iQrhMkaiwTazq0W/RH6LLQ3h4GX+sIiYFGDh4YgPntKwhEFAUIBtfPHNXRaWJAICrAzcYiH+uCnCEhMirNSkxq6iS+1U9t4k9XM9Flnf4m4sM7+Gj52H6bFmVCYwdzqJEWt65afLm9Ijwjpmyll2nxmksyKahN+leTr8lVjJTF2tFMqTLVNVVWXKlqdQK3U1K+ZKGDj4zNmzZ46Pg5GeHwDEaMx/y+4iSgAAAABJRU5ErkJggg==" />
                </svg></a>
              </div>
              <div class="col-md-7 right-side">
                <div class="img_box d-flex justify-content-end">
                  <img src="{{ asset('public/frontend/assets/images/home_slider_3.png') }}" alt="">
                </div>
              </div>
            </div>
            <div class="row align-items-center new_slider_class">
              <div class="col-md-5 left-side">
                <h3 class="h3">Blockchain</h3>
                <h1 class="h1">Tech<span>nology</span></h1>
                <h2 class="h2">For your Company</h2>
                <p >As a digital agency, we help business owners to translate their ideas into blockchain solutions, and assist in polishing and reviewing existing blockchain applications.</p>

                <a href="{{ route('UI_contactUs') }}" class="btn btn-primary">Get Started <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="30px" height="16px">
                <image  x="0px" y="0px" width="16px" height="16px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAQAAABuvaSwAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmCwcQFhNizgzuAAABOUlEQVQoz5WSvU7CYBSGX0lASXQokwM0pCHGyZF7MKkjgzfA0o0BglfAUqeyeAPudnDoXdjJxCb8uPITN1geBtukf5Dwne2cJ1/Oe973AqWeoWc96kG32utXP/rUuzapOUldMWbDFBuTGtfcYzNlwwv1hEnQNiGvtFCumriEtNNwhyXDApjUkCWdBK7zxeAoKsSAkPo/PMY9iQrhMkaiwTazq0W/RH6LLQ3h4GX+sIiYFGDh4YgPntKwhEFAUIBtfPHNXRaWJAICrAzcYiH+uCnCEhMirNSkxq6iS+1U9t4k9XM9Flnf4m4sM7+Gj52H6bFmVCYwdzqJEWt65afLm9Ijwjpmyll2nxmksyKahN+leTr8lVjJTF2tFMqTLVNVVWXKlqdQK3U1K+ZKGDj4zNmzZ46Pg5GeHwDEaMx/y+4iSgAAAABJRU5ErkJggg==" />
                </svg></a>
              </div>
              <div class="col-md-7 right-side">
                <div class="img_box d-flex justify-content-end">
                  <img src="{{ asset('public/frontend/assets/images/home_slider_4.png') }}" alt="">
                </div>
              </div>
            </div>
          </div>
            <a href="{{ route('UI_contactUs') }}" class="btn btn-primary text-center responsive_btn">Get Started <svg
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            width="30px" height="16px">
            <image  x="0px" y="0px" width="16px" height="16px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAQAAABuvaSwAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmCwcQFhNizgzuAAABOUlEQVQoz5WSvU7CYBSGX0lASXQokwM0pCHGyZF7MKkjgzfA0o0BglfAUqeyeAPudnDoXdjJxCb8uPITN1geBtukf5Dwne2cJ1/Oe973AqWeoWc96kG32utXP/rUuzapOUldMWbDFBuTGtfcYzNlwwv1hEnQNiGvtFCumriEtNNwhyXDApjUkCWdBK7zxeAoKsSAkPo/PMY9iQrhMkaiwTazq0W/RH6LLQ3h4GX+sIiYFGDh4YgPntKwhEFAUIBtfPHNXRaWJAICrAzcYiH+uCnCEhMirNSkxq6iS+1U9t4k9XM9Flnf4m4sM7+Gj52H6bFmVCYwdzqJEWt65afLm9Ijwjpmyll2nxmksyKahN+leTr8lVjJTF2tFMqTLVNVVWXKlqdQK3U1K+ZKGDj4zNmzZ46Pg5GeHwDEaMx/y+4iSgAAAABJRU5ErkJggg==" />
            </svg></a>
        </div>
  </section>
    <!-- section hero -->
    <!-- why you need seo -->
@include('frontend.include.need_seo')
    <!-- why you need seo -->
    <!-- offering section -->

    <section class="offering section_100vh scrolly" >
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3 d-flex flex-column justify-content-center">
              <div class="offer_content">
                <hgroup class="hgroup" data-title="Services" data-aos="fade-left" data-aos-duration="1000">
                  <h2 class="hgroup-title" data-aos="fade-right" data-aos-duration="1000"> What we are offering</h2>
                </hgroup>
              </div>
            </div>
            <div class="col-md-9 p-0">
              <div class="offer_slider">
                <div class="offer_slider_wrapper">
                    <div class="carousel row" data-aos="fade-down">
                @foreach ($services as $service)
                      <div class="col-md-3">
                        <figure class="offers">
                          <a href="{{ route('UI_detail_service',$service->slug)}}">
                            <img src="{{ asset('public/assets/frontend/images/') }}/{{$service->image}}" alt="Mobile App">
                            <div class="offers_content">
                                <div class="wrap">
                                  <!-- <img class="icon" src="assets/images/mobile.png" alt=""> -->
                                  <div class="icon">
                                    {!!$service->icon!!}
                                  </div>
                                  <h3 class="text-left text-white">{{ $service->name }}</h3>
                                </div>
                            </div>
                          </a>
                        </figure>
                      </div>
                @endforeach
                    </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- offering section -->
    <!-- creative projects section -->
    <!-- <section class="creative_projects section_100vh wow fadeInUp" >
      <div class="container">
        <hgroup class="hgroup" data-title="Portfolio">
          <h2 class="hgroup-title text-center"> We Created Creative Projects</h2>
        </hgroup>
        <div class="row">
          <div class="col-md-3 p-0 d-flex flex-column">
            <div class="gallery">
              <img src="{{ asset('public/frontend/assets/images/projects-1.png') }}" alt="" class="img">
            </div>
            <div class="gallery">
              <img src="{{ asset('public/frontend/assets/images/projects_4.png') }}" alt="" class="img">
            </div>
          </div>
          <div class="col-md-3 p-0 d-flex flex-column">
            <div class="gallery">
              <img src="{{ asset('public/frontend/assets/images/paper_bag.png') }}" alt="" class="img">
            </div>
            <div class="gallery">
              <img src="{{ asset('public/frontend/assets/images/projects_5.png') }}" alt="" class="img">
            </div>
          </div>
          <div class="col-md-3 p-0 d-flex flex-column">
            <div class="gallery">
              <img src="{{ asset('public/frontend/assets/images/projects_2.png') }}" alt="" class="img">
            </div>
            <div class="gallery">
              <img src="{{ asset('public/frontend/assets/images/projects_6.png') }}" alt="" class="img">
            </div>
          </div>
          <div class="col-md-3 p-0 d-flex flex-column">
            <div class="gallery">
              <img src="{{ asset('public/frontend/assets/images/projects_3.png') }}" alt="" class="img">
            </div>
            <div class="gallery">
              <img src="{{ asset('public/frontend/assets/images/projects_7.png') }}" alt="" class="img">
            </div>
          </div>
        </div>
      </div>
    </section> -->
    @if ($portfolios->count() > 0)
    <section class="creative_projects section_100vh scrolly">
            <div class="container">
              <hgroup class="hgroup" data-title="Portfolio" data-aos="fade-left">
                <h2 class="hgroup-title text-center" data-aos="fade-right" data-aos-duration="2000"> We Created Creative Projects</h2>
              </hgroup>

              <div class="row">
                <div class="col-md-3 col-6 p-0 d-flex flex-column">
                  <div class="gallery half" data-aos="fade-down" data-aos-duration="2000">
                    <a data-fancybox="gallery" data-src="{{ asset('public/assets/frontend/images/') }}/{{$portfolios->count() > 0 ? $portfolios[0]->image : 'No image'}}">
                        <div class="gallery-wrapper">
                            <span>{{$portfolios->count() > 0 ? $portfolios[0]->name : 'No Name'}}</span>
                          </div>
                      <img src="{{ asset('public/assets/frontend/images/') }}/{{$portfolios->count() > 0 ? $portfolios[0]->image : 'No image'}}" />
                    </a>
                  </div>
                  <div class="gallery" data-aos="fade-up" data-aos-duration="2000">
                    <a data-fancybox="gallery" data-src="{{ asset('public/assets/frontend/images/') }}/{{$portfolios->count() > 1 ? $portfolios[1]->image : 'No image'}}">
                        <div class="gallery-wrapper">
                            <span>{{$portfolios->count() > 1 ? $portfolios[1]->name : 'No Name'}}</span>
                          </div>
                      <img src="{{ asset('public/assets/frontend/images/') }}/{{$portfolios->count() > 1 ? $portfolios[1]->image : 'No image'}}" />
                    </a>
                  </div>
                </div>
                <div class="col-md-3 col-6 p-0 d-flex flex-column">
                  <div class="gallery" data-aos="fade-down" data-aos-duration="2000">
                    <a data-fancybox="gallery" data-src="{{ asset('public/assets/frontend/images/') }}/{{$portfolios->count() > 2 ? $portfolios[2]->image : 'No image'}}">
                        <div class="gallery-wrapper">
                            <span>{{$portfolios->count() > 2 ? $portfolios[2]->name : 'No Name'}}</span>
                          </div>
                    <img src="{{ asset('public/assets/frontend/images/') }}/{{$portfolios->count() > 2 ? $portfolios[2]->image : 'No image'}}" />
                    </a>
                  </div>
                  <div class="gallery half" data-aos="fade-up" data-aos-duration="2000">
                    <a data-fancybox="gallery" data-src="{{ asset('public/assets/frontend/images/') }}/{{$portfolios->count() > 3 ? $portfolios[3]->image : 'No image'}}">
                        <div class="gallery-wrapper">
                            <span>{{$portfolios->count() > 3 ? $portfolios[3]->name : 'No Name'}}</span>
                        </div>
                    <img src="{{ asset('public/assets/frontend/images/') }}/{{$portfolios->count() > 3 ? $portfolios[3]->image : 'No image'}}" />
                    </a>
                  </div>
                </div>
                <div class="col-md-3 col-6 p-0 d-flex flex-column">
                  <div class="gallery half" data-aos="fade-down" data-aos-duration="2000">
                    <a data-fancybox="gallery" data-src="{{ asset('public/assets/frontend/images/') }}/{{$portfolios->count() > 5 ? $portfolios[5]->image : 'No image'}}">
                        <div class="gallery-wrapper">
                            <span>{{$portfolios->count() > 5 ? $portfolios[5]->name : 'No Name'}}</span>
                        </div>
                        <img src="{{ asset('public/assets/frontend/images/') }}/{{$portfolios->count() > 5 ? $portfolios[5]->image : 'No image'}}" />
                    </a>
                  </div>
                  <div class="gallery" data-aos="fade-up" data-aos-duration="2000">
                    {{-- @dd($portfolios) --}}
                    <a data-fancybox="gallery" data-src="{{ asset('public/assets/frontend/images/') }}/{{$portfolios->count() > 6 ? $portfolios[6]->image : 'no image'}}">
                        <div class="gallery-wrapper">
                            <span>{{$portfolios->count() > 6 ? $portfolios[6]->name : 'No Name'}}</span>
                          </div>
                        <img src="{{ asset('public/assets/frontend/images/') }}/{{$portfolios->count() > 6 ? $portfolios[6]->image : 'no image'}}" />
                    </a>
                  </div>
                </div>
                <div class="col-md-3 col-6 p-0 d-flex flex-column">
                  <div class="gallery" data-aos="fade-down" data-aos-duration="2000">
                    <a data-fancybox="gallery" data-src="{{ asset('public/assets/frontend/images/') }}/{{$portfolios->count() > 7 ? $portfolios[7]->image : 'No image'}}">
                        <div class="gallery-wrapper">
                            <span>{{$portfolios->count() > 7 ? $portfolios[7]->name : 'No Name'}}</span>
                          </div>
                        <img src="{{ asset('public/assets/frontend/images/') }}/{{$portfolios->count() > 7 ? $portfolios[7]->image : 'no image'}}" />
                    </a>
                  </div>
                  <div class="gallery half" data-aos="fade-up" data-aos-duration="2000">
                    <a data-fancybox="gallery" data-src="{{ asset('public/assets/frontend/images/') }}/{{$portfolios->count() > 4 ? $portfolios[4]->image : 'no image'}}">
                        <div class="gallery-wrapper">
                            <span>{{$portfolios->count() > 4 ? $portfolios[4]->name : 'No Name'}}</span>
                          </div>
                        <img src="{{ asset('public/assets/frontend/images/') }}/{{$portfolios->count() > 4 ? $portfolios[4]->image : 'no image'}}" />
                    </a>
                  </div>
                </div>
              </div>
            </div>
    </section>
    @endif
    <!-- creative projects section -->
    <!-- creative things -->
    <section class="creative_things section_100vh scrolly" >
        <div class="container">
          <div class="creative_things_content">
            <hgroup class="hgroup" data-title="We Create Creative Things" data-aos="fade-left">
              <h2 class="hgroup-title text-center" data-aos="fade-right" data-aos-duration="2000"> We Create </h2>
              <h3 data-aos="fade-up">Creative Things</h3>
            </hgroup>
          </div>
        </div>
        <div class="area" >
          <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div >
    </section>
    <!-- creative things -->
    <!-- testimonials slider section -->
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
    <!-- testimonials slider section -->
    <!-- team member section -->
@include('frontend.include.expert_team')
    <!-- team member section -->
@include('frontend.include.footer')
</section><!-- #MainContent -->
  <!-- footer section -->
  @endsection
