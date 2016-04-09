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
              <li><a href="#home">Home</a></li>
              <li><a href="#news">About</a></li>
              <li><a href="#contact">Search</a></li>
              <li><a href="#contact">Join</a></li>
              <li style="float:right"><a class="active" href="#about">Login</a></li>
            </ul>

          </div>

          <div class="row">
            <div class="small-12 medium-8 columns">
              <h1>To join us as a tutor, please fill out the form below:</h1>

              <br><br>

              <ul class="tags">
                       <li class="addedTag">Web Deisgn<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="Web Deisgn"></li>

                        <li class="addedTag">Web Develop<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="Web Develop"></li>

                        <li class="addedTag">SEO<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="SEO"></li>
                        			<li class="tagAdd taglist">
                          				 <input type="text" id="search-field">
            			            </li>
            	</ul>

              <br><br>

              {!! Form::open(array('url' => '/user_signup', 'files' => 'true')); !!}
              <div style="text-align: left">
                <div class="small-12 columns"><h3>Personal Information</h3></div>
                <div class="small-12 medium-6 columns">
                  {!! Form::label('first_name', 'First Name:'); !!}{!! Form::text('first_name'); !!}<br>
                </div>
                <div class="small-12 medium-6 columns">
                  {!! Form::label('last_name', 'Last Name:'); !!}{!! Form::text('last_name'); !!}<br>
                </div>

                <div class="small-12 medium-6 columns">
                  {!! Form::label('email', 'Email Address:'); !!}{!! Form::text('email'); !!}<br>
                </div>
                <div class="small-12 medium-6 columns">
                  {!! Form::label('city', 'City:'); !!}{!! Form::text('city'); !!}<br>
                </div>

                <div class="small-12 medium-6 columns">
                  {!! Form::label('price', 'Dollar Price per hour:'); !!}{!! Form::text('price'); !!}<br>
                </div>

                <div class="small-12 medium-6 columns">
                  <br>
                  <!-- Profile Image -->
                  {!! Form::label('profile_img', 'Choose a profile image:'); !!}
                  {!! Form::file('profile_img'); !!}<br>
                </div>

                <div class="small-12 columns">
                  {!! Form::checkbox('online_lessons_bool', 'yes', false) !!}{!! Form::label('online_lessons_bool', 'Would you like to teach or learn through online tools such as Skype?') !!}<br>
                  {!! Form::checkbox('alt_payment_bool', 'yes', false) !!}{!! Form::label('alt_payment_bool', 'Do you
                accept alternate forms of payment (for ex: gift-cards, 6-packs, or barter)?') !!}<br>
                </div>

                <div class="small-12 columns">
                  <br>
                  {!! Form::label('alt_payments', 'If you accept alternate payments, what items would you prefer?'); !!}{!! Form::text('alt_payments'); !!}<br>
                </div>

                <div class="small-12 columns">
                  {!! Form::label('availability', 'Enter your availability'); !!}{!! Form::text('availability'); !!}   <br><br>
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
                  {!! Form::label('skills_media', 'Add images of your skills should you choose to do so'); !!}<br>
                  {!! Form::file('skills_imgs'); !!}<br><br>
                </div>

                <hr>

                <div class="small-12 medium-8 columns" style="width: 50%; float: left;">
                <h3>Social Media</h3>
                  {!! Form::label('facebook', 'Facebook:'); !!}{!! Form::text('facebook'); !!}<br>
                  {!! Form::label('twitter', 'Twitter:'); !!}{!! Form::text('twitter'); !!}<br>
                  {!! Form::label('instagram', 'Instagram:'); !!}{!! Form::text('instagram'); !!}<br>
                  {!! Form::label('youtube', 'Youtube:'); !!}{!! Form::text('youtube'); !!}<br>
                  {!! Form::label('skype', 'Skype:'); !!}{!! Form::text('skype'); !!}<br>


                  {!! Form::submit('Submit'); !!}

                </div>



              {!! Form::close() !!}

            </div>
          </div>
        </div>
      </div>
    </body>
</html>
