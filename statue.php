<!DOCTYPE html>
<html id="statue-bg">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Statuer i farver</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/flexboxgrid.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  </head>
  <body>
  <div class="container-fluid">
    <div class="container-slide">
      <div class="image-slide">
        <div><img src="img/statue/statue-1.jpg" class="slide-img"></div>
        <div><img src="img/statue/statue-2.jpg" class="slide-img"></div>
        <div><img src="img/statue/statue-3.jpg" class="slide-img"></div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick\slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.image-slide').slick({
          infinite: true,
          prevArrow: false,
          nextArrow: false,
      });
    });
  </script>

  </body>
</html>
