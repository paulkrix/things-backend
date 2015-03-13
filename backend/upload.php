<?php
/*
error_reporting(E_ALL);
ini_set('display_errors', 1);
*/

require_once 'data/BulletProof.php';
require_once 'data/SimpleImage.php';
  
if(!isset($_POST['id']) || !isset($_POST['thing'])) {
  exit();
}

  $image = new ImageUploader\BulletProof;

  $fieldId = $_POST['id'];
  $thingId = $_POST['thing'];


  $uploaddir = "uploads/";
  
  $uploadfile = $fieldId . '.' . $thingId;
  $resizedFile = 'resized.' . $fieldId . '.' . $thingId;

//echo '<pre>';
$result = $image->upload( $_FILES['file'], $uploadfile );
if( $result ) {
  $result_parts = explode('.', $result);
  $img = new abeautifulsite\SimpleImage( $result );
  $img->adaptive_resize(674, 379)->save( $uploaddir . $resizedFile . '.' . $result_parts[sizeof($result_parts)-1]);
  //echo $uploaddir . $resizedFile . '.' . $result_parts[sizeof($result_parts)-1];
  echo $result;
}
  
/*
if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {

  $img = new abeautifulsite\SimpleImage($uploadfile);
  $img->adaptive_resize(674, 379)->save($resizedFile);

  echo $uploadfile;
} else {

}
*/
?>