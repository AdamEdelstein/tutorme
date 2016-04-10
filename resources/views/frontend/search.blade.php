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
                <li><a href="#home">Home</a></li>
                <li><a href="#news">About</a></li>
                <li><a href="#contact">Search</a></li>
                <li><a href="#contact">Join</a></li>
                <li style="float:right"><a class="active" href="#about">Login</a></li>
              </ul>



              <div class="row">
                <div class="small-12 columns center-text">
                  <h1>Search for a Tutor or Student</h1>
                </div>

                {!! Form::open(array('route' => 'search’)) !!}
                {!! Form::text('search', null,
                array('required',
                'class'=>'form-control',
                'placeholder'=>'Search for a tutorial...')) !!}
                {!! Form::submit('Search',
                array('class'=>'btn btn-default')) !!}
                {!! Form::close() !!}
              </div>


            </div>
        </div>
    </body>
</html>
