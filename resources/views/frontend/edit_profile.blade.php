<!DOCTYPE html>
<html>
<head>
  <title>User Signup Form</title>


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

    </div>

    <div class="row main-content bump40 user-profile-card">
      <div class="small-12 large-centered columns">

        <br><br>


        {!! Form::open(array('url' => '/edit_profile', 'files' => 'true', 'method' => 'post')); !!}
        <div class="small-12 columns"><h3>Tell us more about yourself <strong><?php echo Auth::user()->name; ?></strong>.</h3></div>


        <div class="small-12 medium-6 columns bump20">
          {!! Form::label('city', 'What city are you interested in?'); !!}{!! Form::text('city') !!}<br>
        </div>

        <div class="small-12 medium-6 columns bump20">
          {!! Form::label('price', 'What is the price range you are looking for?'); !!}{!! Form::text('price'); !!}<br>
        </div>

        <div class="small-12 columns">
          <!-- Profile Image -->
          <h3>{!! Form::label('profile_img', 'Choose a profile image:'); !!}</h3>
          {!! Form::file('profile_img'); !!}<br>
        </div>

        <div class="small-12 columns">
          {!! Form::checkbox('online_lessons_bool', 'yes', false) !!}{!! Form::label('online_lessons_bool', 'Would you like to teach or learn through online tools such as Skype?') !!}<br>
          {!! Form::checkbox('alt_payment_bool', 'yes', false) !!}{!! Form::label('alt_payment_bool', 'Do you
          accept alternate forms of payment (for ex: gift-cards, 6-packs, or barter)?') !!}
        </div>

        <div class="small-12 medium-6 columns bump20">
          {!! Form::label('alt_payments', 'What items do you prefer for alternate payments?'); !!}{!! Form::text('alt_payments'); !!}<br>
        </div>

        <div class="small-12 medium-6 columns bump20">
          {!! Form::label('availability', 'Enter your availability'); !!}{!! Form::text('availability'); !!}   <br>
        </div>
        <hr>

        <h3>Skill Information</h3>
        <div class="small-12 medium-6 columns">
          {!! Form::label('skills_learn', 'Enter the skills you want to learn:'); !!}{!! Form::text('skills_learn'); !!}<br>
        </div>

        <div class="small-12 medium-6 columns">
          {!! Form::label('skills_teach', 'Enter the skills are comfortable teaching:'); !!}{!! Form::text('skills_teach'); !!}<br>
        </div>

        <div class="small-12 columns">
          {!! Form::label('skills_imgs', 'Add images of your skills should you choose to do so'); !!}<br>
          {!! Form::file('skills_imgs') !!}<br><br>
          <!-- {!! Form::file('skills_imgs', array('multiple'=>true)); !!} -->
        </div>

        <hr>
        <h3>Social Media</h3>

        <div class="small-12 medium-6 columns">
          {!! Form::label('facebook', 'Facebook:'); !!}{!! Form::text('facebook'); !!}<br>
          {!! Form::label('twitter', 'Twitter:'); !!}{!! Form::text('twitter'); !!}<br>
          {!! Form::label('instagram', 'Instagram:'); !!}{!! Form::text('instagram'); !!}<br>
        </div>
        <div class="small-12 medium-6 columns">
          {!! Form::label('youtube', 'Youtube:'); !!}{!! Form::text('youtube'); !!}<br>
          {!! Form::label('skype', 'Skype:'); !!}{!! Form::text('skype'); !!}<br>
        </div>

        <div class="small-12 columns">
          {!! Form::submit('Submit'); !!}

          <br><br><br>
        </div>

      </div>
      {!! Form::close(); !!}

    </div>
  </div>
</div>
</body>
</html>
