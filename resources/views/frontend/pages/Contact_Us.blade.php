@extends('frontend.layout.master')
@section('content')
  <!-- section hero -->
  <section class="inner_banner " data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="banner_content text-center">
              <h1>Contact Us</h1>
              <p>Home <span>//</span> Contact Us</p>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- section hero -->
  <!-- Contact us section -->
  <section class="contact_us" data-aos="fade-up" data-aos-delay="200" data-aos-duration="2000">
    <div class="container">
      <div class="row">
        <div class="col-md-5" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2000">
          <div class="contact_info">
            <div class="upper_sec">
              <h4>Let’s talk about…</h4>
              <p>Do you have any questions? Requests? Ideas? Or maybe you simply want to chat with us to get to know us better? Whatever the reason, everything you need to contact us:)</p>
            </div>
            <div class="bottom_sec">
              <div class="footer_social d-flex flex-column">
                <a href="mailto:info@digitalogies" class="footer_email">info@digitalogies</a>
                <a href="tel:+19176072400" class="footer_phone">+1 917 607 2400</a>
                <div class="social_footer">
                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-7 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2000">
            @if ($errors->any())
            <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
            </ul>
            </div>
            @endif
          <form action="{{ route('UI_message') }}" method="post" class="contact_forrm">
            @csrf
            <div class="form-group col-md-12">
              <label for="">Name</label>
              <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group col-md-12">
              <label for="">Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group col-md-12">
              <label for="">Message</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="message" required></textarea>
            </div>
            <div class="col-md-12">
              <button class="mybtn">Get Started<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="16px">
                <image x="0px" y="0px" width="20px" height="16px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAQAAABuvaSwAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmCwcQFhNizgzuAAABOUlEQVQoz5WSvU7CYBSGX0lASXQokwM0pCHGyZF7MKkjgzfA0o0BglfAUqeyeAPudnDoXdjJxCb8uPITN1geBtukf5Dwne2cJ1/Oe973AqWeoWc96kG32utXP/rUuzapOUldMWbDFBuTGtfcYzNlwwv1hEnQNiGvtFCumriEtNNwhyXDApjUkCWdBK7zxeAoKsSAkPo/PMY9iQrhMkaiwTazq0W/RH6LLQ3h4GX+sIiYFGDh4YgPntKwhEFAUIBtfPHNXRaWJAICrAzcYiH+uCnCEhMirNSkxq6iS+1U9t4k9XM9Flnf4m4sM7+Gj52H6bFmVCYwdzqJEWt65afLm9Ijwjpmyll2nxmksyKahN+leTr8lVjJTF2tFMqTLVNVVWXKlqdQK3U1K+ZKGDj4zNmzZ46Pg5GeHwDEaMx/y+4iSgAAAABJRU5ErkJggg=="></image>
                </svg></button>
            </div>
          </form>
        </div>
      </div>
      <div class="row mt-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="2000">
        <div class="col-md-4">
          <div class="contact_box">
            <a href=""><img src="{{ asset('public/frontend/assets/images/help_support.png ') }}" alt=""></a>
            <h5>Help & Support</h5>
            <a href="mailto:info@digitalogies.com"><p>info@digitalogies.com</p></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact_box">
            <a href=""><img src="{{ asset('public/frontend/assets/images/phone.png ') }}" alt=""></a>
            <h5>Call Us</h5>
            <a href="tel:+1800356789142"><p>+1800 356 789 142</p></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact_box">
            <a href=""><img src="{{ asset('public/frontend/assets/images/mail.png ') }}" alt=""></a>
            <h5>Career</h5>
            <a href="mailto:recruitment@digitalogies.com"><p>recruitment@digitalogies.com</p></a>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="2000">
          <div class="address_box d-flex flex-column  align-items-start text-white" data-aos="fade-down" data-aos-delay="200" data-aos-duration="2000">
              <h3>DXB</h3>
              <h5>Flamingo Villas,<br> Dubai, UAE</h5>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="800" data-aos-duration="2000">
          <div class="address_box d-flex flex-column  align-items-start text-white" data-aos="fade-down" data-aos-delay="200" data-aos-duration="2000">
            <h3>USA</h3>
            <h5>Valley Stream <br> Newyork 11580</h5>
        </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="1200" data-aos-duration="2000">
          <div class="address_box d-flex flex-column  align-items-start text-white" data-aos="fade-down" data-aos-delay="200" data-aos-duration="2000">
            <h3>UK</h3>
            <h5>60 Queen St, St Davids Center <br> Cardiff</h5>
        </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact us section -->
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
