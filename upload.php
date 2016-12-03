<?php
include 'config.php';
include 'eden.php';
$output_dir = "uploads/";
extract($_POST);
if(isset($_FILES["myfile"]))
{
if($_FILES["myfile"]["type"] == "image/jpeg"){
  $image_headshot=eden('image', $_FILES["myfile"]["tmp_name"], 'jpeg');
    $name_headshot=uniqid().".jpeg";
    $image_headshot->resize(380, 475);
    $image_headshot->save('uploads/'.$name_headshot, 'jpeg');
}
elseif($_FILES["myfile"]["type"] == "image/jpg"){
    $image_headshot=eden('image', $_FILES["myfile"]["tmp_name"], 'jpg');
    $name_headshot=uniqid().".jpg";
    $image_headshot->resize(380, 475);
    $image_headshot->save('uploads/'.$name_headshot, 'jpg');

}elseif($_FILES["myfile"]["type"] == "image/pjpeg"){
      $image_headshot=eden('image', $_FILES["myfile"]["tmp_name"], 'pjpeg');
    $name_headshot=uniqid().".pjpeg";
    $image_headshot->resize(380, 475);
    $image_headshot->save('uploads/'.$name_headshot, 'pjpeg');

}elseif($_FILES["myfile"]["type"] == "image/x-png"){
      $image_headshot=eden('image', $_FILES["myfile"]["tmp_name"], 'x-png');
    $name_headshot=uniqid().".x-png";
    $image_headshot->resize(380, 475);
    $image_headshot->save('uploads/'.$name_headshot, 'x-png');

}elseif($_FILES["myfile"]["type"] == "image/png"){
      $image_headshot=eden('image', $_FILES["myfile"]["tmp_name"], 'png');
    $name_headshot=uniqid().".png";
    $image_headshot->resize(380, 475);
    $image_headshot->save('uploads/'.$name_headshot, 'png');
}

        $picture = array(
        '_logo' =>$name_headshot
        );
                           
            if ($obj->dbRowUpdate("ra_company", $picture,"WHERE _id = '$cid'")) {
                   echo "Uploaded File :".$_FILES['myfile']['name'];
                }
                else{
                  echo "Error to save";
                }



	//Filter the file types , if you want.
	/*if ($_FILES["myfile"]["error"] > 0)
	{
	  echo "Error: " . $_FILES["myfile"]["error"] . "<br>";
	}
	else
	{
		$name=uniqid().$_FILES["myfile"]["name"];
    	move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir. $name);
    
   	 echo "Uploaded File :".$_FILES["myfile"]["name"];
	}*/

}
?>