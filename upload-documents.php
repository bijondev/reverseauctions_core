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
			'_id' =>0, 
			'_cid' =>isset($cid)?$cid:NULL,
			'_file' =>isset($name)?$name:NULL,
			'_title' =>isset($_POST["filename"])?$_POST["filename"]:NULL,
			);
			//echo $i;

			if($obj->dbRowInsert("ra_company_attach", $contact_data)){
				echo "Uploaded File :".$_FILES['myfile']['name'];
			}else{
				echo "error to file upload!";
			}
    
   	 
	}

}
?>