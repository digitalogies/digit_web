@extends('frontend.layout.master')
@section('content')
<!-- header start -->
  <!-- section hero -->
  <section class="inner_banner " data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="banner_content text-center">
              <h1>Career Detail</h1>
              <p>Home <span>//</span> Career Detail</p>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- section hero -->
  <!-- job detail section -->
  <section class="job_detail" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="job_d">
            <hgroup class="hgroup" data-title="Career">
              <h2 class="hgroup-title">{{$career->designation}}{{$career->tittle}}</h2>
              <p>{!!$career->responsibilities!!}</p>
            </hgroup>
            <h3 class="responsibilties mt-5">Requirments</h3>
            <div class="respons_ul mt-4">
                {!!$career->requirment!!}
            </div>

          </div>
        </div>
        <div class="col-md-4"></div>
      </div>
      <div class="col-md-12 py-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="2000">
        <hgroup class="hgroup text-center apply" data-title="Career">
          <h2 class="hgroup-title">Apply for this Job</h2>
          {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul style="list-style: none">
                      @foreach ($errors->all() as $error)
                          <li >{{ $error }}</li>
                      @endforeach
                    </ul>
                    </div>
                    @endif --}}

        </hgroup>
            <form action="{{ route('UI_career_job') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row form_apply">
              <div class="form-group col-md-6">
                <label for="">First Name</label>
                <input type="text" class="form-control" name="first_name" oninput="this.value = this.value.replace(/[^A-Za-z, ]/, '')" title="contain letters only" required >
                <input type="hidden" name="career_name" value="{{$career->tittle}}" >
              </div>
              <div class="form-group col-md-6">
                <label for="">Last Name</label>
                <input type="text" class="form-control" name="last_name" oninput="this.value = this.value.replace(/[^A-Za-z, ]/, '')" title="contain letters only" required>
              </div>
              <div class="form-group col-md-6">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" placeholder="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Invalid email address" required>
              </div>
              <div class="form-group col-md-6">
                <label for="">Phone</label>
                <input type="number" class="form-control" name="number" placeholder="" title="contain numbers only"  pattern="[0-9]{1,5}" required>
              </div>
              <div class="form-group col-md-6">
                <label for="">Resume/CV</label>
                <input type="file" class="form-control" name="resume" pattern=".+\.pdf$" title="Must include .pdf file extension" required>
              </div>
              <div class="form-group col-md-6">
                <label for="">Cover Letter</label>
                <input type="file" class="form-control" name="cover_letter" placeholder=""  pattern=".+\.pdf$" title="Must include .pdf file extension">
              </div>
              <div class="form-group col-md-6">
                <label for="">LinkedIn Profile</label>
                <input type="text" class="form-control" name="linkedin_url" placeholder="" >
              </div>
              <div class="form-group col-md-6">
                <label for="">Portfolio If/Any</label>
                <input type="text" class="form-control" name="portfolio_url" placeholder="">
              </div>
              <div class="form-group col-md-12">
                <label for="">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="4" ></textarea>
              </div>
              <div class="col-md-12 text-center">
                <button class="mybtn">Submit Now<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="16px">
                  <image x="0px" y="0px" width="22px" height="16px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAQAAABuvaSwAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmCwcQFhNizgzuAAABOUlEQVQoz5WSvU7CYBSGX0lASXQokwM0pCHGyZF7MKkjgzfA0o0BglfAUqeyeAPudnDoXdjJxCb8uPITN1geBtukf5Dwne2cJ1/Oe973AqWeoWc96kG32utXP/rUuzapOUldMWbDFBuTGtfcYzNlwwv1hEnQNiGvtFCumriEtNNwhyXDApjUkCWdBK7zxeAoKsSAkPo/PMY9iQrhMkaiwTazq0W/RH6LLQ3h4GX+sIiYFGDh4YgPntKwhEFAUIBtfPHNXRaWJAICrAzcYiH+uCnCEhMirNSkxq6iS+1U9t4k9XM9Flnf4m4sM7+Gj52H6bFmVCYwdzqJEWt65afLm9Ijwjpmyll2nxmksyKahN+leTr8lVjJTF2tFMqTLVNVVWXKlqdQK3U1K+ZKGDj4zNmzZ46Pg5GeHwDEaMx/y+4iSgAAAABJRU5ErkJggg=="></image>
                  </svg></button>
              </div>
            </div>
            </form>

      </div>
    </div>
  </section>
  <!-- job detail section -->
  @include('frontend.include.footer')
  @endsection
