  <!-- @if ($teams->count() > 0)
<section class="team_member section_100vh scrolly" >
    <div class="container">
      <hgroup class="hgroup" data-title="Team" data-aos="fade-down">
        <h2 class="hgroup-title text-center text-white">Our Expert Team Member</h2>
      </hgroup>
      <div class="wrapper">
        <div class="member_slider row" data-aos="fade-up">
@foreach ($teams as $team)
        <div class="col-md-3">
            <div class="member_box">
                <div class="social_icons_wrap d-flex flex-column justify-content-center">
                    <a href="{{$team->facebook_url}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="{{$team->twitter_url}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="{{$team->linkedin_url}}" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <a href="{{$team->instagram_url}}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </div>
                <img src="{{asset('public/assets/frontend/images/')}}/{{$team->image}}" width="80px" alt="">
              <h4>{{$team->name}}</h4>
              <span>{{$team->designation}}</span>

            </div>
        </div>
@endforeach

        </div>
      </div>
    </div>
  </section>
  @endif -->
