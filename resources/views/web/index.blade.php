<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Owl Carousel - One slide</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="jQuery Responsive Carousel - Owl Carusel">
    <meta name="author" content="Bartosz Wojciechowski">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('web/css/bootstrapTheme.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/custom.css') }}" rel="stylesheet">

    <!-- Owl Carousel Assets -->
    <link href="{{ asset('web/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/owl.theme.css') }}" rel="stylesheet">

  </head>
  <body>
    <div id="top-nav" class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <div class="nav-collapse collapse">
            <ul class="nav pull-right">
                <li><a href="../index.html"><i class="icon-chevron-left"></i> Back to Frontpage</a></li>
                <li><a href="../owl.carousel.zip" class="download download-on" data-spy="affix" data-offset-top="450">Download</a></li>
            </ul>
            <ul class="nav pull-left">
                
            </ul>
            </div>
            </div>
        </div>
    </div>
   
    <div id="title">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h1>One Item with Image</h1>
          </div>
        </div>
      </div>
    </div>

    <div id="demo">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div id="owl-demo" class="owl-carousel">

                        <div class="item"><img src="{{ asset('web/images/fullimage1.jpg') }}" alt="The Last of us"></div>
                        <div class="item"><img src="{{ asset('web/images/fullimage2.jpg') }}" alt="GTA V"></div>
                        <div class="item"><img src="{{ asset('web/images/fullimage3.jpg') }}" alt="Mirror Edge"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    


    <script src="{{ asset('web/js/jquery-1.9.1.min.js') }}"></script> 
    <script src="{{ asset('web/js/owl.carousel.js') }}"></script>


    <style>
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    </style>


    <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({

      navigation : false,
      autoPlay: true,
      slideSpeed : 5000,
      paginationSpeed : 400,
      singleItem : true,

      });
    });
    </script>

    <script src="{{ asset('web/js/bootstrap-collapse.js') }}"></script>
    <script src="{{ asset('web/js/bootstrap-transition.js') }}"></script>
    <script src="{{ asset('web/js/bootstrap-tab.js') }}"></script>
    <script src="{{ asset('web/js/application.js') }}"></script>

  </body>
</html>