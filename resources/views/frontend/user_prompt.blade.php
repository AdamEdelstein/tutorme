<!DOCTYPE html>
<html>
    <head>
        <title>Tutor Me</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">


                <link href="{{{ asset('/css/foundation.css') }}}" rel="stylesheet">
                <link href="{{{ asset('/css/style.css') }}}" rel="stylesheet">

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


              <div class="row">
                <div class="small-12 columns center-text user-prompt">


                <h2 class="bump50">Hey <?php echo Auth::user()->name; ?>, <br></h2>
                I noticed you haven't made a profile yet, would you like to make one?<br>
                Or you can jump right in and start searching for tutors or students.<br><br>
                <a href="{{ url('/edit_profile') }}" class="button">Edit Profile</a>
                <a href="{{ url('/search') }}" class="button">Search</a>

                </div>
              </div>


            </div>
        </div>
    </body>
</html>
