<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                position: relative;
            }

            .full-height {
                height: 100vh;
            }



            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {

            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .footer {

              right: 0;

              left: 0;
              padding: 1rem;
              background-color: #efefef;
              text-align: center;
              font-size: 12px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">


                <!-- Jumbotron -->

              <div class="jumbotron">
                  <div class="container">
                    <div class="col-xs-8 lead">
                          <h1>Fact Find</h1>
                      <p >Loaded with all the features you need to capture and use your data smarter, quicker, more accurately, and much cheaper than using paper forms.</p>
                      <p><a class="btn btn-lg btn-success" href="{{ route('register') }}" role="button">Get started today</a></p>
                    </div>
                  </div>
                </div>

                <!-- proof points -->
                <!-- Example row of columns -->
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h2>Robust data capture options</h2>
          <p>Quickly enter information using handwriting, virtual keyboard, checkboxes, drop-down option lists, radio buttons, and date and time wheels.</p>

        </div>
        <div class="col-sm-4">
          <h2>Free</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

        </div>
        <div class="col-sm-4">
          <h2>White Labeling</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </p>

        </div>
      </div>



      <!-- Example row of columns -->
      <div class="row">
        <div class="col-sm-4">
          <h2>Data validation</h2>
          <p>Set up mandatory fields or perform validation checks to ensure that incoming data is accurate and complete. </p>
        </div>
        <div class="col-sm-4">
          <h2>Form review</h2>
          <p>Automatically review forms and receive immediate notification if form is incomplete or does not adhere to your business rules. </p>
        </div>
        <div class="col-sm-4">
          <h2>Print, email and export</h2>
          <p>Print and email forms directly from the application or export a CSV for input into your CRM.</p>
        </div>
      </div>




    </div>

  <div class="footer">Powered by TAL</div>





    </body>
</html>
