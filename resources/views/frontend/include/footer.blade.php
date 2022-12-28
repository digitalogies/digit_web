<footer class="main-footer scrolly">
    <div class="container">
      <div class="row first_row">
        <div class="col-md-6">
          <div class="footer_logo">
            <a href="index.html"><img data-aos="fade-down" data-aos-duration="2000" src="{{ asset('public/frontend/assets/images/logo.png')}}" alt=""></a>
          </div>
          <hgroup class="hgroup" data-title="Contact Us" data-aos="fade-left">
            <h2 class="hgroup-title">Don't hesitate to contact us any time</h2>
          </hgroup>
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center">
          <p data-aos="fade-right">We promise that we never have any commercial incentive while choosing a technology or approach, we base our</p>
          <form action="{{ route('UI_subscription') }}" method="post" class="footer_form" data-aos="fade-up">
            @csrf
            <input type="email" class="form-control" name="subscription_email" placeholder="Enter email address for subscription" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Invalid email address" required>
            {{-- <span  style="color: crimson">@error('subscription_email'){{ $message }}  @enderror</span> --}}
            <button class="mybtn btn">Submit <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="16px">
              <image x="0px" y="0px" width="22px" height="16px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAQAAABuvaSwAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmCwcQFhNizgzuAAABOUlEQVQoz5WSvU7CYBSGX0lASXQokwM0pCHGyZF7MKkjgzfA0o0BglfAUqeyeAPudnDoXdjJxCb8uPITN1geBtukf5Dwne2cJ1/Oe973AqWeoWc96kG32utXP/rUuzapOUldMWbDFBuTGtfcYzNlwwv1hEnQNiGvtFCumriEtNNwhyXDApjUkCWdBK7zxeAoKsSAkPo/PMY9iQrhMkaiwTazq0W/RH6LLQ3h4GX+sIiYFGDh4YgPntKwhEFAUIBtfPHNXRaWJAICrAzcYiH+uCnCEhMirNSkxq6iS+1U9t4k9XM9Flnf4m4sM7+Gj52H6bFmVCYwdzqJEWt65afLm9Ijwjpmyll2nxmksyKahN+leTr8lVjJTF2tFMqTLVNVVWXKlqdQK3U1K+ZKGDj4zNmzZ46Pg5GeHwDEaMx/y+4iSgAAAABJRU5ErkJggg=="></image>
              </svg></button>
          </form>
        </div>
      </div>
      <div class="row services py-5">
        <div class="col-lg-2 col-sm-4 col-12">
          <div class="footer_menu">
            <h4>Company</h4>
              <ul class="footer_ul">
                <li><a href="{{ route('UI_index') }}">Home</a></li>
                <li><a href="{{ route('UI_aboutUs') }}">About Us</a></li>
                <li><a href="{{ route('UI_service') }}">Services</a></li>
                <li><a href="{{ route('UI_portfolio') }}">Portfolio</a></li>
                <li><a href="{{ route('UI_contactUs') }}">Contact Us</a></li>
              </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-4 col-12">
          <div class="footer_menu">
            <h4>Services</h4>
              <ul class="footer_ul">
                @foreach ($footer_services->take(5) as $service)
                <li><a href="{{ route('UI_detail_service',$service->slug)}}">{{$service->name}}</a></li>
                @endforeach
              </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-4 col-12">
          <div class="footer_menu middle">
              <ul class="footer_ul">
                @foreach ($footer_services->skip(5)->take(5) as $service)
                <li><a href="{{ route('UI_detail_service',$service->slug)}}">{{$service->name}}</a></li>
                @endforeach
              </ul>
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-12">
          <div class="footer_menu footer_social_area">
            <h4>Social Links</h4>
            <div class="social_footer_nav">
              <a href="https://www.facebook.com/digitalogies" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="https://www.linkedin.com/company/digitalogies/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
              <a href="https://www.instagram.com/digitalogies/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </div>
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-12">
          <div class="d-flex flex-column footer_menu">
            <h4>Information</h4>
            <a href="mailto:info@digitalogies.com" class="footer_email">info@digitalogies</a>
            <a href="tel:+19176072400" class="footer_phone">+1 917 607 2400</a>

          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <p class="m-0 py-5 text-center">Copyright @ 2022 <span><a href="#">Digitalogies,</a></span> All right reserved.</p>
      </div>
    </div>
  </footer>


