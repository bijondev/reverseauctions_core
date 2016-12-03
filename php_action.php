<?php
include 'config.php';
$time=date("Y-m-d H:i:s");
/**************************Login****************************/
if (isset($_POST['logincheck'])) {
		extract($_POST);
	$result=$obj->dbloginCheck($_email, $_password);
	if ($result!=0) {
			extract($result);
			$_SESSION['cid']=$_id;
	$_SESSION['company_name']=$_company_name;
	$_SESSION['description']=$_description;
	$_SESSION['logo']=$_logo;
	$_SESSION['email']=$_email;
	$_SESSION['password']=$_password;
	$_SESSION['type']=$_type;
	$_SESSION['parents_id']=$_parents_id;
	$_SESSION['status']=$_status;
header("Location: index.php");
}
else{
	$_SESSION['login_error']="Invalid email or password! Please use Correct email & password.";
	header("Location: login.php");
}
}
/***************************************add new company*********************************************/
if (isset($_POST['insertcompany'])) {
	extract($_POST);
			$contact_data = array(
			'_id' =>0, 
			'_company_name' =>isset($_POST["companyname"])?$_POST["companyname"]:NULL,
			'_description' =>isset($_POST["description"])?$_POST["description"]:NULL,
			'_email' =>isset($_POST["email"])?$_POST["email"]:NULL,
			'_password' =>md5(isset($_POST["password"])?$_POST["password"]:NULL),
			'_type' =>isset($_POST["companytype"])?$_POST["companytype"]:NULL,
			'_parents_id' =>isset($_POST["parentcompany"])?$_POST["parentcompany"]:NULL,
			'_status' =>isset($_POST["status"])?$_POST["status"]:NULL
			);
			//echo $i;

			if ($obj->dbRowInsert("ra_company", $contact_data)) {
			header("Location: add-new-company.php?msg=success");
			}
			else{
			header("Location: add-new-company.php?msg=error");
			}
}
/*********************************************Update Company*************************************************************/
if (isset($_POST['updatecompany'])) {
	extract($_POST);
			$contact_data = array(
			'_company_name' =>isset($_POST["companyname"])?$_POST["companyname"]:NULL,
			'_description' =>isset($_POST["description"])?$_POST["description"]:NULL,
			'_email' =>isset($_POST["email"])?$_POST["email"]:NULL,
			'_type' =>isset($_POST["companytype"])?$_POST["companytype"]:NULL,
			'_parents_id' =>isset($_POST["parentcompany"])?$_POST["parentcompany"]:NULL,
			'_status' =>isset($_POST["status"])?$_POST["status"]:NULL
			);
if ($obj->dbRowUpdate("ra_company", $contact_data,"WHERE _id = '$cid'")) {
			header("Location: edit-company.php?cid=".md5($cid)."&msg=success");
			}
			else{
			header("Location: edit-company.php?cid=".md5($cid)."&msg=error");
			}
}
/*************************************************Add Aucation**************************************************************/
if (isset($_POST['insertaucation'])) {
		extract($_POST);
			$contact_data = array(
			'_id' =>0, 
			'_c_id'=>$tid,
			'_title' =>isset($_POST["auctiontitle"])?$_POST["auctiontitle"]:NULL,
			'_description' =>isset($_POST["description"])?$_POST["description"]:NULL,
			'_defult_price' =>isset($_POST["defultprice"])?$_POST["defultprice"]:NULL,
			'_start_time' =>isset($_POST["starttime"])?$_POST["starttime"]:NULL,
			'_end_time' =>isset($_POST["endtime"])?$_POST["endtime"]:NULL,
			'_status'=>"no"
			);
			//echo $i;

			if ($obj->dbRowInsert("ra_tender", $contact_data)) {
			header("Location: add-new-company.php?msg=success");
			}
			else{
			header("Location: add-new-company.php?msg=error");
			}
}

/****************************************************Update Auctions************************************************************************/
if (isset($_POST['updateaucation'])) {
	extract($_POST);
				$contact_data = array(
			'_title' =>isset($_POST["auctiontitle"])?$_POST["auctiontitle"]:NULL,
			'_description' =>isset($_POST["description"])?$_POST["description"]:NULL,
			'_defult_price' =>isset($_POST["defultprice"])?$_POST["defultprice"]:NULL,
			'_start_time' =>isset($_POST["starttime"])?$_POST["starttime"]:NULL,
			'_end_time' =>isset($_POST["endtime"])?$_POST["endtime"]:NULL,
			'_status' =>isset($_POST["status"])?$_POST["status"]:NULL
			);
				if ($obj->dbRowUpdate("ra_tender", $contact_data,"WHERE _id = '$aid'")) {
			header("Location: edit-auction.php?aid=".md5($aid)."&msg=success");
			}
			else{
			header("Location: edit-auction.php?aid=".md5($aid)."&msg=error");
			}
}
/***********************************************************Nagotion********************************************************************************************/
if (isset($_POST['nagotion'])) {
	extract($_POST);
					/*$contact_data = array(
					'_id'=>0,
					'_tender_id' =>$tenderid,
					'_company_id' =>$companyid,
					'_time' =>$time,
					'_price' =>$nagotionprice,
					'_comments' =>""
					);*/

						if (($end_second-time())<120) {
	$contact_data = array(
					'_id'=>0,
					'_tender_id' =>$tenderid,
					'_company_id' =>$_SESSION['cid'],
					'_time' =>$time,
					'_time_extend'=>2,
					'_price' =>$nagotionprice,
					'_comments' =>""
					);
					//echo $i;
}
else{
	$contact_data = array(
					'_id'=>0,
					'_tender_id' =>$tenderid,
					'_company_id' =>$_SESSION['cid'],
					'_time' =>$time,
					'_price' =>$nagotionprice,
					'_comments' =>""
					);
}

					//echo $i;
//print_r($contact_data);
			if ($obj->dbRowInsert("ra_score", $contact_data)){
			header("Location: score.php?sid=".md5($tenderid));
			}
			else{
			header("Location: score.php?sid=".md5($tenderid));
			}
}
?> 