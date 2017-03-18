<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="RSKU Webpage">
    <meta name="author" content="Q5Studio">

    <title>RSKU - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/bootstrap-overwrite.css')}}">
  </head>

  <body>
    <div class="container">

      <header>
        <nav class="navbar navbar-default">
          <div class="container-fluid" id="header-menu">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">
                <img style="max-width: 120px; max-height: 60px;" src="{{asset('images/logo.png')}}" class="img-responsive">
              </a>
            </div>
            <ul class="nav navbar-nav pull-right">
              <li><a href="#">RSU</a></li>
              <li><a href="#">RSK</a></li>
              <li><a href="#">Puskesmas</a></li>
              <button type="button" class="btn btn-default navbar-btn" style="background-color: #E81F63;"><a href="#" style="color:white">Login</a></button>
            </ul>
          </div>
        </nav>
      </header>

      <div id="main" class="row">
        @yield('content')
      </div>

      <footer>
        <nav class="navbar navbar-default" id="footer-menu">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-2">
                <ul class="nav navbar-nav">
                  <li><a href="#" style="color:white;">©Q5Studio</a></li>
                </ul>
              </div>
              <div class="col-md-10">
                <ul class="nav navbar-nav pull-right">
                  <li><a href="#" style="color:white;">RSKU.ID</a></li>
                  <li><a href="#" style="color:white;">About Us</a></li>
                  <li><a href="#" style="color:white;">Contact Us</a></li>
                  <li><a href="#" style="color:white;">Term of Service</a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </footer>

    </div>
  </body>

</html>
