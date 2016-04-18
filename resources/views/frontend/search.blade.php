<!DOCTYPE html>
<html>
    <head>
        <title>Tutor Me</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">


                <link href="{{{ asset('/css/foundation.css') }}}" rel="stylesheet">
                <link href="{{{ asset('/css/style.css') }}}" rel="stylesheet">
                <link href="{{{ asset('/css/search_results.css') }}}" rel="stylesheet">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

                <script type="text/javascript" src='//code.jquery.com/jquery-1.10.2.min.js'></script>
                <script type="text/javascript" src='{{ url("/selectize/dist/js/standalone/selectize.min.js") }}'></script>
                <script type="text/javascript" src="{{{ asset('/js/script.js')}}}"></script>



    </head>
    <body>
        <div class="container">
            <div class="content">

              <ul>
                <li><a class="active" href="/">Home</a></li>
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



              <div class="row">
                <div class="small-12 columns center-text">
                  <h1>Search for a Tutor or Student</h1>
                </div>
              </div>


                <div class="text-center large-centered search-field bump50">
                {!! Form::open(array('url' => '/search', 'method' => 'post')); !!}
                  {!! Form::label('search', 'search'); !!}{!! Form::text('search'); !!}<br>
                {!! Form::close(); !!}
                </div>

                <?php if (isset($articles)) { ?>
                  <div class="row search-results main-content search-results bump40">

                  <?php
                    $file_count = count($articles);

                      echo "<h3>Number of results: $file_count</h3><br>";
                      $i = 0;
                      while($i < $file_count) {
                  ?>

                  <div class="small-12 columns large-centered medium-centered">

                      <div class="small-4 columns bump20 search-results-left">
                        <img class="picture-border" src="<?php echo $articles[$i]->profile_img ?>">
                        <br><br>

                        <?php if ($articles[$i]->facebook): ?>
                          <a href="{{ $articles[$i]->facebook }}"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                        <?php endif; ?>

                        <?php if ($articles[$i]->twitter): ?>
                          <a href="{{ $articles[$i]->twitter }}"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
                        <?php endif; ?>

                        <?php if ($articles[$i]->instagram): ?>
                          <a href="{{ $articles[$i]->instagram }}"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                        <?php endif; ?>

                        <?php if ($articles[$i]->youtube): ?>
                          <a href="{{ $articles[$i]->youtube }}"><i class="fa fa-youtube-square fa-2x" aria-hidden="true"></i></a>
                        <?php endif; ?>

                        <?php if ($articles[$i]->skype): ?>
                          <a href="{{ $articles[$i]->skype }}"><i class="fa fa-skype fa-2x" aria-hidden="true"></i></a>
                        <?php endif; ?>

                        <br>
                        <div class="bump10">
                          {!! ($articles[$i]->name) !!}<br>
                          {!! ($articles[$i]->city) !!}<br><br>
                        </div>
                      </div>

                      <div class="small-8 columns bump20">
                        <div class="small-6 columns">
                        <?php
                          if ($articles[$i]->skills_learn == null) {
                            echo 'I have nothing to learn<br><br>';
                          } else {
                            echo 'Skills to learn:'.' <strong><em>'.$articles[$i]->skills_learn.'</strong></em><br><br>';
                          }
                        ?>

                        <?php
                          if ($articles[$i]->skills_teach == null) {
                            echo 'I have nothing to teach<br><br>';
                          } else {
                            echo 'Skills to teach:'.' <strong><em>'.$articles[$i]->skills_teach.'</strong></em><br><br>';
                          }
                        ?>

                        <?php
                          if ($articles[$i]->price != null) {
                            echo 'I charge'.' '.$articles[$i]->price.' an hour<br><br>';
                          }
                        ?>

                      </div>
                      <div class="small-6 columns">
                        <?php
                          if ($articles[$i]->alt_payments == 1) {
                            echo 'Alternate payment types accepted<br>';
                            echo 'Payment Types Accepted:'.' '.$articles[$i]->alt_payments;
                          } else {
                            echo 'Alternate payment types NOT accepted<br>';
                          }
                        ?>
                        <br><br>
                        <?php
                          if ($articles[$i]->online_lessons_bool == 1) {
                            echo 'Online learning available<br>';
                          } else {
                            echo 'Face to Face learning only<br>';
                          }
                        ?>
                        <br>
                        I am available during these times:<br>
                        {{ $articles[$i]->availability }}<br>
                      </div>
                      </div>
                      <br>
                      <hr>
                      <br>
                  </div>
                  <?php $i++; } ?>

                <?php } ?>
              </div>
            </div>
          </div>
    </body>
</html>
