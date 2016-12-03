<?php
include 'config.php';
if (!empty($_SESSION['email'])) {
?>
<?php include 'header.php'; ?>

<!-- Information Boxes -->
		<div class="row-fluid">
		<?php
if (isset($_GET['msg'])?$_GET['msg']:NULL=="error") {
	echo "<div class=\"alert alert-warning alert-dismissable\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
  <strong>Error to add new company</strong>
</div>";
}
if (isset($_GET['msg'])?$_GET['msg']:NULL=="success") {
		echo "<div class=\"alert alert-success alert-dismissable\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
  <strong>Succesfully Add new company.</strong>
</div>";
}
?>
<div class="span6">

				<!-- Forms: Top Bar -->
				<div class="top-bar">
					<h3><i class="icon-cog"></i>Add New Company</h3>
				</div>
				<!-- / Forms: Top Bar -->

				<!-- Forms: Content -->
				<div class="well no-padding">

					<!-- Forms: Form -->
					<form class="form-horizontal" method="post" action="<?php echo base_url; ?>php_action.php" >

						<!-- Forms: Normal input field -->
						<div class="control-group">
							<label class="control-label" for="inputNormal"><i class="icon-user"></i>Company Name</label>
							<div class="controls">
								<input type="text" id="inputNormal" name="companyname" placeholder="Enter Company Name" class="input-block-level">
							</div>
						</div>
						<!-- / Forms: Normal input field -->

						<!-- Forms: Form Password -->
						<div class="control-group">
							<label class="control-label" for="inputPassword"><i class="icon-key"></i>Description</label>
							<div class="controls">
								<textarea rows="3" name="description" class="span12"></textarea>
							</div>
						</div>
						<!-- / Forms: Form Password -->
					<div class="control-group">
							<label class="control-label" for="inputNormal"><i class="icon-user"></i>Email</label>
							<div class="controls">
								<input type="text" id="inputNormal" name="email" placeholder="Enter email address" class="input-block-level">
							</div>
						</div>

											<div class="control-group">
							<label class="control-label" for="inputNormal"><i class="icon-user"></i>Password</label>
							<div class="controls">
								<input type="password" id="inputNormal" name="password" placeholder="Enter password" class="input-block-level">
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="inputNormal"><i class="icon-user"></i>Company Type</label>
							<div class="controls">
								<select class="span10" name="companytype" >
									<option value="">--Select Company Type--</option>
									<option value="buyer">Buyer</option>
									<option value="seller">Seller</option>
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
									<option value="">--Select Status--</option>
									<option value="yes">Yes</option>
									<option value="no">No</option>
								</select>
							</div>
						</div>
						<!-- Forms: Form Option -->

	 
						<!-- Forms: Form Actions -->
						<div class="form-actions">
							<button type="submit" name="insertcompany" class="btn btn-primary"> Save</button>
							<button type="button" class="btn"> Cancel</button>
						</div>
						<!-- / Forms: Form Actions -->
	 
					</form> 
					<!-- / Forms: Form -->           

				</div>
				<!-- / Forms: Content -->

			</div>
			<!-- / Forms: Box -->
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