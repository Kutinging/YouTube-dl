<?php
  $fileid = $_GET["file"]; //Obviously needs validation
  $filename = $fileid.'.mp3';
  ob_end_clean();
if(is_file($filename)){
  header("Content-Type: application/octet-stream; ");
  header("Content-Transfer-Encoding: binary");
  header("Content-Length: ". filesize($filename).";");
  header("Content-disposition: attachment; filename=".$filename);
  readfile($filename);
  sleep(3);
  unlink($filename);
}
else{
	echo "Error Download.";
}
  
  //unlink($fileid.'.m4a');
 ?>