<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>case 2</title>

      <link href="/css/styleselfie.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  </head>

  <body>

    <div class="container-fluid">

    <h1 id="overskrift"> Case 2 </h1>
    <form class="pic" method="post" enctype="multipart/form-data">
      <label> Antikmuseet </label>

    <p><input type="file"  name="file"/></p>
    <p><input type="submit" name="upload" value="Upload Billede"></p>
    </form>
    <?php include 'upload.php';?>

    <div id="myModal" class="modal">
          <span class="close">&times;</span>
          <img class="modal-content" id="img01">

        </div>


    </div>


    <script src="js/modal.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>
