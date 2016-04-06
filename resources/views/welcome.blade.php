<!DOCTYPE html>
<html>
    <head>
        <title>TutorMe - Learn something, Today!</title>


        <link href="{{{ asset('/css/foundation.css') }}}" rel="stylesheet">
        <link href="{{{ asset('/css/style.css') }}}" rel="stylesheet">


    </head>
    <body>





        <div class="container">
            <div class="content">

              <!-- Splash Image and Intro Text -->
              <div class="splash-img">
                <ul>
                  <li><a href="#home">Home</a></li>
                  <li><a href="#news">About</a></li>
                  <li><a href="#contact">Search</a></li>
                  <li><a href="#contact">Join</a></li>
                  <li style="float:right"><a class="active" href="#about">Login</a></li>
                </ul>

                {!! Html::image('img/pages/welcome/sky-intro.png') !!}
              </div>


              <div class="intro-text text-center">
                <h1>TutorMe.com</h1>
              </div>

              <br>

              <div class="intro-buttons text-center">
                  <p><a href='{{ URL::to('tutor_signup') }}' class="button large button-signup">Join Us</a></p>
              </div>

              <!-- Grid of Statements about us -->
              <div class="row about-us">
                <br><br><br>
                <div class="small-12 medium-3 columns">
                  <h3>Alternate Payments</h3>
                  <p>Some tutors accept miscellaneous payment types. So dig out those old unused gift cards, and dust off bitcoin wallets.</p>
                </div>

                <div class="small-12 medium-3 columns">
                  <h3>Many Different Skills</h3>
                  <p>Find a tutor in anything from School Subjects like English and Math, to other skills such as Taxes or Cooking </p>
                </div>

                <div class="small-12 medium-3 columns">
                  <h3>It's Simple to Start</h3>
                  <p>Just make an account, choose the skills you want to learn or teach, and get right into the learning.</p>
                </div>

                <div class="small-12 medium-3 columns">
                  <h3>When you're done</h3>
                  <p>Fire off a quick review on your Student or Teacher, let others know how well they performed!</p>
                </div>
              </div>

              <div class="new-tutors">
                <div class="row">
                <div class="section-title"><h2>Check out our 3 Newest Tutors!</h2>
                  <br><br>
                  <div class="small-12 medium-4 columns">
                    <h2>Tutor1 (IMG)</h2>
                    Name: Jordan Menendez<br>
                    Price: 20$ an hour<br>
                    Alt Payments?: Yes! <br>
                    Skills: Water Polo, Glass Blowing, Camping, Manual Transmission<br>
                  </div>

                  <div class="small-12 medium-4 columns">
                    <h2>Tutor2 (IMG)</h2>
                    Name: Jason Jordan<br>
                    Price: 40$ an hour<br>
                    Alt Payments?: No <br>
                    Skills: C++, Javascript, Laravel, PHP<br>
                  </div>

                  <div class="small-12 medium-4 columns">
                    <h2>Tutor3 (IMG)</h2>
                    Name: Megan Guston<br>
                    Price: Anything<br>
                    Alt Payments?: Yes! <br>
                    Skills: Painting, Mongolian Chants, Candle Making, Gluten-Free Cooking<br>
                  </div>
                  </div>
                </div>
            </div>

              <div class="row latest-skills">
                <div class="section-title"><h2>Check out the most Popular Skills</h2></div>

                  <div class="bump40">
                      <div class="small-2 columns">
                        Skill 1
                      </div>

                      <div class="small-2 columns">
                        Skill 2
                      </div>

                      <div class="small-2 columns">
                        Skill 3
                      </div>

                      <div class="small-2 columns">
                        Skill 4
                      </div>

                      <div class="small-2 columns">
                        Skill 5
                      </div>

                      <div class="small-2 columns">
                        Skill 6
                      </div>
            </div>
          </div>
            <div class="row latest-skills">
                      <div class="small-2 columns">
                        Skill 7
                      </div>

                      <div class="small-2 columns">
                        Skill 8
                      </div>

                      <div class="small-2 columns">
                        Skill 9
                      </div>

                      <div class="small-2 columns">
                        Skill 10
                      </div>

                      <div class="small-2 columns">
                        Skill 11
                      </div>

                      <div class="small-2 columns">
                        Skill 12
                      </div>
              </div>

              <div class="footer">
                Copyright 2016 - Adam Edelstein
              </div>
        </div>
    </body>
</html>
