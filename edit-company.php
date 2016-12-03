<?php
include 'config.php';
if (!empty($_SESSION['email'])) {
?>
<?php include 'header.php'; ?>
<!-- Information Boxes -->
		<div class="row-fluid">
		<?php
		$msg=isset($_GET['msg'])?$_GET['msg']:NULL;
if ($msg=="error") {
	echo "<div class=\"alert alert-warning alert-dismissable\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
  <strong>Error to add new company</strong>
</div>";
}
if ($msg=="success") {
		echo "<div class=\"alert alert-success alert-dismissable\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
  <strong>Succesfully Add new company.</strong>
</div>";
}
?>
<div class="span6">
<?php
$data=isset($_GET['cid'])?$_GET['cid']:NULL;
$result=$obj->showDataDetails($data);
//print_r($result);
if (!empty($result)) {
extract($result);
}
?>
				<!-- Forms: Top Bar -->
				<div class="top-bar">
					<h3><i class="icon-cog"></i>Edit Company</h3>
				</div>
				<!-- / Forms: Top Bar -->

				<!-- Forms: Content -->
				<div class="well no-padding">

					<!-- Forms: Form -->
					<form class="form-horizontal" method="post" action="<?php echo base_url; ?>php_action.php" >
					<input type="hidden" name="cid" value="<?php echo isset($_id)?$_id:NULL; ?>" >
					<?php
					$cid=isset($_id)?$_id:NULL;
					?>
						<!-- Forms: Normal input field -->
						<div class="control-group">
							<label class="control-label" for="inputNormal"><i class="icon-user"></i>Company Name</label>
							<div class="controls">
								<input type="text" id="inputNormal" name="companyname" value="<?php echo isset($_company_name)?$_company_name:NULL; ?>" class="input-block-level">
							</div>
						</div>
						<!-- / Forms: Normal input field -->

						<!-- Forms: Form Password -->
						<div class="control-group">
							<label class="control-label" for="inputPassword"><i class="icon-key"></i>Description</label>
							<div class="controls">
								<textarea rows="3" name="description" class="span12"><?php echo isset($_description)?$_description:NULL; ?></textarea>
							</div>
						</div>
						<!-- / Forms: Form Password -->
					<div class="control-group">
							<label class="control-label" for="inputNormal"><i class="icon-user"></i>Email</label>
							<div class="controls">
								<input type="text" id="inputNormal" name="email" value="<?php echo isset($_email)?$_email:NULL; ?>" placeholder="Enter email address" class="input-block-level">
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="inputNormal"><i class="icon-user"></i>Company Type</label>
							<div class="controls">

								<select class="span10" name="companytype" >

									<option value="">--Select Company--</option>
									<?php
									foreach ($companytype as  $value) {
										?>
										<option <?php if($_type==$value){echo "selected"; } ?> value="<?php echo $value; ?>"><?php echo $value; ?></option>
										<?php
									}
									?>
								</select>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="inputNormal"><i class="icon-user"></i>Company Parents</label>
							<div class="controls">
									<select class="span10" name="parentcompany" >
									<option value="">--Select Company--</option>
									<?php
									$pid=$_parents_id;
									$id="buyer";
									$table="ra_company";
									$field="_type";
									$result=$obj->getByIdAll($id,$table,$field);
									//print_r($result);
									if (!empty($result)) {

									foreach($result as $values_reels){
									extract($values_reels);
									?>
									<option <?php if($pid==$_id){echo "selected"; } ?> value="<?php echo $_id; ?>"><?php echo $_company_name; ?></option>
									<?php } } ?>
								</select>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="inputNormal"><i class="icon-user"></i>Status</label>
							<div class="controls">
								<select class="span10" name="status" >
									<option value="">--Select Company--</option>
									<?php
									foreach ($status as  $value) {
										?>
										<option <?php if($_status===$value){echo "selected"; } ?> value="<?php echo $value; ?>"><?php echo $value; ?></option>
										<?php
									}
									?>
								</select>
							</div>
						</div>
						<!-- Forms: Form Option -->

	 
						<!-- Forms: Form Actions -->
						<div class="form-actions">
							<button type="submit" name="updatecompany" class="btn btn-primary"> Save</button>
							<button type="button" class="btn"> Cancel</button>
						</div>
						<!-- / Forms: Form Actions -->
	 
					</form> 
					<!-- / Forms: Form -->           

				</div>
				<!-- / Forms: Content -->

			</div>
			<!-- / Forms: Box -->
			<div class="span6">
			<div class="top-bar">
					<h3><i class="icon-cog"></i>Company Logo</h3>
				</div>

				<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img data-src="holder.js/100%x180" height="150" width="200" src="uploads/<?php echo isset($_logo)?$_logo:NULL; ?>" alt="...">
    </a>
  </div>
</div>


				<div class="well no-padding">
<form id="myForm" action="upload.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="cid" value="<?php echo $cid; ?>">
     <input type="file" size="60" name="myfile">
     <input type="submit" value="Upload">
 </form>
  <div id="progress">
        <div id="bar"></div>
        <div id="percent">0%</div >
</div>
<br/>
    
<div id="message"></div>
				</div>
			</div>


						<div class="span6">
			<div class="top-bar">
					<h3><i class="icon-cog"></i>Company Documents</h3>
				</div>
				<div class="well no-padding">
<table  class="table table-striped">
<?php
$id=$cid;
$table="ra_company_attach";
$field="_cid";
$result=$obj->getByIdAll($id,$table,$field);
//print_r($result);
if (!empty($result)) {

foreach($result as $values_reels){
extract($values_reels);
?>
	<tr>
		<td><a href="uploads/<?php echo isset($_file)?$_file:NULL; ?>"> <?php echo isset($_title)?$_title:NULL; ?></a></td>
<td><a href="edit-company.php?cid=<?php echo md5(isset($_id)?$_id:NULL); ?>" class="btn btn-info">Edit</a>
<a type="button" class="btn btn-danger">Delete</a></td>
	</tr>
	<?php } } ?>
</table>

<form id="myForm" action="upload-documents.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="cid" value="<?php echo $cid; ?>">
<input type="text" name="filename" placeholder="enter file title" ><br />
     <input type="file" size="60" name="myfile">
     <input type="submit" value="Upload">
 </form>
  <div id="progress">
        <div id="bar"></div>
        <div id="percent">0%</div >
</div>
<br/>
    
<div id="message"></div>
				</div>
			</div>

		</div>
		<!-- / Information Boxes -->


	</div> 
	<!-- / Content Container -->
<?php include 'footer.php'; ?>
<?php
}else{
	header("Location: login.php");
}
?>