<!doctype html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/base.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/components/ribbon.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/modules/footer.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/modules/profile.css') }}" />

  </head>
  <body>
    <div class="content position-ref full-height">
      <div class="profile">
        <img src="{{ URL::to('/') }}/images/profile-480.jpg" alt="Joseph Campbell Profile Picture">
        <div class="title">
          <h1>
            {{$fullname}}
          </h1>
        </div>
        <div class="subtitle">
          -Full Stack Developer-
        </div>
        {{-- <div class="quote">
          "Joseph is very easy and enjoyable to work with." -Dharm
        </div>
        <div class="quote">
          "Joseph is is a quick learner, capable of working on his own." -Ben
        </div>
        <div class="quote">
          "No Joseph, I don't have time to write you a recommendation." -Beau
        </div>
        <div class="quote">
          "Joseph's architecture successfully eliminated flaws that had previously made our system ineffective." -Sachin
        </div>
        <div class="quote">
          "Joseph has proven to be dedicated, knowledgeable, and trustworthy." - Don
        </div> --}}
      </div>
      <div class="ribbons">
        <div class="ribbon blue">
          <div class="ribbon-content">
            <div class="logo"></div>
          </div>
        </div>
        {{-- <div class="ribbon red">
          <div class="ribbon-content">
            <div class="logo"></div>
          </div>
        </div> --}}
      </div>
    </div>
    <footer>
      <div class="center-buttons">
        {{-- <a href=""><div class="footer-button email"></div></a> --}}
        <a href="https://www.linkedin.com/in/joseph-campbell-83545a6a/"><div class="footer-button linkedin"></div></a>
        <a href="https://github.com/Zarkana"><div class="footer-button github"></div></a>
      </div>
      <div class="right-buttons">
        <div class="footer-button"></div>
      </div>
    </footer>
  </body>
</html>
<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
