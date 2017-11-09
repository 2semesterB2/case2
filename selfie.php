<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>case 2</title>

      <link rel="stylesheet" href="/css/flexboxgrid.css">
      <link href="/css/styleselfie.css" rel="stylesheet" type="text/css" />
  </head>

  <body>

    <div class="container-fluid">
      <form method="get" action="index.php">
                <button id="tilbage" type="submit">Forside</button>
              </form>
    <h1 id="overskrift"> Antikmuseet </h1>
    <form class="pic" method="post" enctype="multipart/form-data">
      <label> Upload dine billeder af dit besøg på museet her </label>

    <p><input type="file"  name="file"/></p>
    <p><input type="submit" name="upload" value="Upload Billede"></p>
    </form>
    <?php include 'upload.php';?>

    <div id="myModal" class="modal">
          <span class="close">&times;</span>
          <img class="modal-content" id="img01">

        </div>
  </div>


<script src="modal.js"></script>
  </body>
</html>
