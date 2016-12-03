<?php
include 'config.php';
$output_dir = "uploads/";


if(isset($_FILES["myfile"]))
{
	extract($_POST);
	//Filter the file types , if you want.
	if ($_FILES["myfile"]["error"] > 0)
	{
	  echo "Error: " . $_FILES["myfile"]["error"] . "<br>";
	}
	else
	{
		$name=uniqid().$_FILES["myfile"]["name"];
    	move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir. $name);

    				$contact_data = array(
			'_attach_file' =>isset($name)?$name:NULL
			);
			//echo $i;

			if($obj->dbRowUpdate("ra_tender", $contact_data,"WHERE _id = '$aid'")){
				echo "Uploaded File :".$_FILES['myfile']['name'];
			}else{
				echo "error to file upload!";
			}
    
   	 
	}

}
?>