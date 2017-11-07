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


<script src="modal.js"></script>
  </body>
</html>
