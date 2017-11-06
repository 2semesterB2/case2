<?php
if (isset($_POST['upload'])) {
  //http://us2.php.net/manual/en/features.file-upload.post-method.php
  //The original name of the file on the client machine.
  $file_name =  $_FILES['file']['name'];
  //The mime type of the file, if the browser provided this information.
  //This mime type is however not checked on the PHP side and therefore don't take its value for granted.
  $file_type = $_FILES['file']['type'];
//  The size, in bytes, of the uploaded file.
  $file_size = $_FILES['file']['size'];
  //The temporary filename of the file in which the uploaded file was stored on the server.
  $file_tem_loc = $_FILES['file']['tmp_name'];


  //gemmer uploadede billede i mappen Upload
	$file_store = "upload/".$file_name;

//move_uploaded_file() ensures the safety of this operation by allowing only those files uploaded through PHP to be moved.
  if (move_uploaded_file($file_tem_loc, $file_store)) {
    echo "";
  }

}
?>
<?php
//Kalder mappen upload folder
// Open a directory, upload/, read its contents, then close:

$folder = "upload/";
if (is_dir($folder)){

    if ($open = opendir($folder))
    {
        while (($file = readdir($open)) !=false)
      {
          if ($file =='.' || $file =='..') continue;
//(echo) laver et img tag der poster et billede fra upload folder med følgende størrelser
          echo ' <img id="lol" src ="upload/' .$file.'" width="250" height="250" >';
    }
closedir($open);
}

}


?>
