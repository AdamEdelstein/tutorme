<!DOCTYPE html>
<html>
    <head>
        <title>Tutor Me</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">


                <link href="{{{ asset('/css/foundation.css') }}}" rel="stylesheet">
                <link href="{{{ asset('/css/style.css') }}}" rel="stylesheet">
                <link href="{{{ asset('/css/font-awesome.css') }}}" rel="stylesheet">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">


                <script type="text/javascript" src='//code.jquery.com/jquery-1.10.2.min.js'></script>
                <script type="text/javascript" src='{{ url("/selectize/dist/js/standalone/selectize.min.js") }}'></script>
                <script type="text/javascript" src="{{{ asset('/js/script.js')}}}"></script>





    </head>
    <body>
        <div class="container">
            <div class="content">

              <ul>
                <li><a class="active" href="{{ url('/') }}">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="{{ url('/search') }}">Search</a></li>
                <li><a href="{{ url('/register') }}">Join</a></li>

                @if (Auth::guest())
                <li class="dropdown" style="float:right">
                  <a href="{{ url('/login') }}" class="dropbtn">Login</a>
                  <div class="dropdown-content">
                    <a href="{{ url('/register') }}">Register</a>
                  </div>
                </li>
                @else
                <li class="dropdown" style="float:right">
                  <a href="{{ url('/user_profile') }}" class="dropbtn">{{ Auth::user()->name }}</a>
                  <div class="dropdown-content">
                    <a href="{{ url('/logout') }}">Logout</a>
                  </div>
                </li>
              </ul>
              @endif


              <div class="row bump50 main-content user-profile-card">
                <div class="small-12 medium-4 columns text-center left-user-profile">
                  <img class="thumbnail" src="<?php echo Auth::user()->profile_img?>"><br><br>
                  {{ Auth::user()->name }}<br>
                  {{ Auth::user()->city }}<br>
                  {{ Auth::user()->email }}<br>

                  <br>
                  <!-- Checks for Social Media -->
                  <?php if (Auth::user()->facebook): ?>
                    <a href="{{ Auth::user()->facebook }}"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                  <?php endif; ?>

                  <?php if (Auth::user()->twitter): ?>
                    <a href="{{ Auth::user()->twitter }}"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
                  <?php endif; ?>

                  <?php if (Auth::user()->instagram): ?>
                    <a href="{{ Auth::user()->instagram }}"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                  <?php endif; ?>

                  <?php if (Auth::user()->youtube): ?>
                    <a href="{{ Auth::user()->youtube }}"><i class="fa fa-youtube-square fa-2x" aria-hidden="true"></i></a>
                  <?php endif; ?>

                  <?php if (Auth::user()->skype): ?>
                    <a href="{{ Auth::user()->skype }}"><i class="fa fa-skype fa-2x" aria-hidden="true"></i></a>
                  <?php endif; ?>

                  <br><br>

                  <p><a href='{{ URL::to('/edit_profile') }}' class="button medium button-signup">Edit Profile</a></p>
                </div>

                <div class="small-12 medium-8 columns">

                  <?php
                    if (Auth::user()->skills_learn == null) {
                      echo 'I have nothing to learn<br><br>';
                    } else {
                      echo 'Skills to learn:'.' <strong><em>'.Auth::user()->skills_learn.'</strong></em><br><br>';
                    }
                  ?>

                  <?php
                    if (Auth::user()->skills_learn == null) {
                      echo 'I have nothing to teach<br><br>';
                    } else {
                      echo 'Skills to teach:'.' <strong><em>'.Auth::user()->skills_teach.'</strong></em><br><br>';
                    }
                  ?>


                  <?php
                    if (Auth::user()->alt_payment_bool == 1) {
                      echo 'Alternate payment types accepted<br>';
                      echo 'Payment Types Accepted:'.' '.Auth::user()->alt_payments;
                    } else {
                      echo 'Alternate payment types NOT accepted<br>';
                    }
                  ?>
                  <br><br>
                  <?php
                    if(Auth::user()->online_lessons_bool == 1) {
                      echo 'Online learning available<br>';
                    } else {
                      echo 'Face to Face learning only<br>';
                    }
                  ?>
                  <br>
                  I am available during these times: {{ Auth::user()->availability }}<br>

                </div>
                <br><br>
                <hr class="bump20">
                <div class="row">
                  <div class="small-12 medium-8 medium-centered large-centered columns bump50">
                    <h3>Pictures of my skills:<br></h3>

                    <img src="<?php echo Auth::user()->skills_img ?>"><br>
                  </div>
                </div>

              </div>


            </div>
        </div>
    </body>
</html>
