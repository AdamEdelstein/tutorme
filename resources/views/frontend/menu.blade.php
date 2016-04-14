<!DOCTYPE html>
<html>
    <head>

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
                <li><a class="active" href="#home">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Search</a></li>
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





            </div>
        </div>
    </body>
</html>
