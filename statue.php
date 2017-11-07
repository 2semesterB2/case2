<!DOCTYPE html>
<html id="statue-bg">
  <head>
    <script>
      $(function() {
        $('.kc-wrap').KillerCarousel({
          // Width of carousel.
          width: 800,
          // Item spacing in 3D (modern browsers) modes.
          spacing3d: 120,
          // Item spacing in 2D (old browsers) modes.
          spacing2d: 120,
          showShadow:true,
          showReflection: true
        });
      });
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Statuer i farver</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/flexboxgrid.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="killercarousel.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="killercarousel.js"></script>
  </head>
  <body>
    <!-- Main wrapping parent. -->
    <div class = "kc-wrap">
    <!-- Carousel items follow. -->
      <div class="kc-item">
        <img src="img/statue/statue-1.jpg" alt = "" >
      </div>
      <div class="kc-item">
        <img src="img/statue/statue-2.jpg" alt = "" >
      </div>
      <div class="kc-item">
        <img src="img/statue/statue-3.jpg" alt = "" >
      </div>
    </div>
    $(function() {
      $('.kc-wrap').KillerCarousel({
        // Width of carousel.
        width: 800,
        // Item spacing in 3D (modern browsers) modes.
        spacing3d: 120,
        // Item spacing in 2D (old browsers) modes.
        spacing2d: 120,
        showShadow:true,
        showReflection: true
      });
    });
  </body>
</html>
