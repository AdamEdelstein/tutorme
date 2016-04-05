<!DOCTYPE html>
<html>
    <head>
        <title>Tutor Signup Form</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <link href="{{{ asset('/css/foundation.css') }}}" rel="stylesheet">
        <link href="{{{ asset('/css/style.css') }}}" rel="stylesheet">

        <link href="{{{ asset('/css/style.css') }}}" rel="stylesheet">

        <script src="{{{ asset('/js/script.js') }}}"></script>

    </head>
    <body>
      <div class="container">
        <div class="content">
          <div class="row">
            <div class="small-12 medium-8 columns">
              <h1>To join us as a tutor, please fill out the form below:</h1>

              <br><br>

              {!! Form::open(array('url' => '/tutor', 'files' => 'true')); !!}
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
                  {!! Form::file('image'); !!}<br>
                </div>

                <div class="small-12 columns">
                  {!! Form::checkbox('alt_payment_bool', 'alt_payment') !!}{!! Form::label('alt_payment_bool', 'Do you
                accept alternate forms of payment (for ex: gift-cards, 6-packs, or barter)?') !!}<br>
                </div>

                <div class="small-12 columns">
                  {!! Form::label('alt_payments', 'If so, what do you prefer?'); !!}{!! Form::text('alt_payments'); !!}<br>
                </div>

                <div class="small-12 columns">
                  {!! Form::label('availability', 'Enter your availability'); !!}{!! Form::text('availability'); !!}   <br><br>
                </div>

                <hr>

                <div class="small-12 columns">
                <h3>Skill Information</h3>

                <ul class="tags">
                           <li class="addedTag">Web Deisgn<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="Web Deisgn"></li>

                            <li class="addedTag">Web Develop<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="Web Develop"></li>

                            <li class="addedTag">SEO<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="SEO"></li>
                            			<li class="tagAdd taglist">
                              				 <input type="text" id="search-field">
                			            </li>
                	</ul>

                  {!! Form::label('skills', 'Enter your skills seperated by commas:'); !!}{!! Form::text('skills'); !!}<br>
                  {!! Form::label('skills_media', 'Add images of your skills should you choose to do so'); !!}<br>
                  {!! Form::file('image'); !!}<br><br>
                </div>

                <hr>

                <div class="small-12 medium-8 columns" style="width: 50%; float: left;">
                <h3>Social Media</h3>
                  {!! Form::label('facebook', 'Facebook:'); !!}{!! Form::text('facebook'); !!}<br>
                  {!! Form::label('twitter', 'Twitter:'); !!}{!! Form::text('twitter'); !!}<br>
                  {!! Form::label('instagram', 'Instagram:'); !!}{!! Form::text('instagram'); !!}<br>
                  {!! Form::label('youtube', 'Youtube:'); !!}{!! Form::text('youtube'); !!}<br>

                  <div class="button">{!! Form::submit('Submit'); !!}</div>

                </div>



              {!! Form::close() !!}

            </div>
          </div>
        </div>
      </div>
    </body>
</html>
