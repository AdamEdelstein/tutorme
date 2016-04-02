<!DOCTYPE html>
<html>
    <head>
        <title>Tutor Signup Form</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <link href="{{{ asset('/css/style.css') }}}" rel="stylesheet">
        
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Join us as a Tutor</div>

                {!! Form::open(array('url' => '/tutor', 'files' => 'true')); !!}
                  <div style="text-align: left">
                    <h2>Personal Information</h2>
                    {!! Form::label('first_name', 'First Name:'); !!}{!! Form::text('first_name'); !!}<br>
                       {!! Form::label('last_name', 'Last Name:'); !!}{!! Form::text('last_name'); !!}<br><br>
                    {!! Form::label('email', 'Email Address:'); !!}{!! Form::text('email'); !!}<br><br>
                    {!! Form::label('city', 'City:'); !!}{!! Form::text('city'); !!}<br><br>
                    {!! Form::label('price', 'Dollar Price per hour:'); !!}{!! Form::text('price'); !!}<br><br>
                    {!! Form::checkbox('alt_payment_bool', 'alt_payment') !!}{!! Form::label('alt_payment_bool', 'Do you
                    accept alternate forms of payment (for ex: gift-cards, 6-packs, or barter)?') !!}<br><br>
                    {!! Form::label('alt_payments', 'If so, what do you prefer?'); !!}{!! Form::text('alt_payments'); !!}<br><br>
                    {!! Form::label('availability', 'Enter your availability'); !!}{!! Form::text('availability'); !!}   <br><br>

                    <h2>Social Media</h2>
                    {!! Form::label('facebook', 'Facebook:'); !!}{!! Form::text('facebook'); !!}<br><br>
                    {!! Form::label('twitter', 'Twitter:'); !!}{!! Form::text('twitter'); !!}<br><br>
                    {!! Form::label('instagram', 'Instagram:'); !!}{!! Form::text('instagram'); !!}<br><br>
                    {!! Form::label('youtube', 'Youtube:'); !!}{!! Form::text('youtube'); !!}<br><br>


                    <!-- Profile Image -->
                    {!! Form::label('profile_img', 'Choose a profile image:'); !!}<br>
                    {!! Form::file('image'); !!}<br><br>

                    <h2>Skill Information</h2>

                    {!! Form::label('skills', 'Enter your skills seperated by commas:'); !!}{!! Form::text('skills'); !!}<br><br>
                    {!! Form::label('skills_media', 'Add images of your skills should you choose to do so'); !!}<br>
                    {!! Form::file('image'); !!}<br><br>

                    {!! Form::submit('Submit'); !!}
                  </div>
                {!! Form::close() !!}
            </div>
        </div>
    </body>
</html>
