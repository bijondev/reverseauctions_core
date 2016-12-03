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
					<h3><i class="icon-cog"></i>Edit Auction</h3>
				</div>
				<!-- / Forms: Top Bar -->
<?php
$data=isset($_GET['aid'])?$_GET['aid']:NULL;
$result=$obj->showDataDetailsauctions($data);
//print_r($result);
if (!empty($result)) {
extract($result);
}
?>
				<!-- Forms: Content -->
				<div class="well no-padding">

					<!-- Forms: Form -->
					<form class="form-horizontal" method="post" action="<?php echo base_url; ?>php_action.php" >
					<input type="hidden" name="aid" value="<?php echo isset($_id)?$_id:NULL; ?>" >
						<!-- Forms: Normal input field -->
						<div class="control-group">
							<label class="control-label" for="inputNormal"><i class="icon-user"></i>Title</label>
							<div class="controls">
								<input type="text" id="inputNormal" name="auctiontitle" value="<?php echo isset($_title)?$_title:NULL; ?>" placeholder="Enter Aucation Title" class="input-block-level">
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
							<label class="control-label" for="inputNormal"><i class="icon-user"></i>Defult price</label>
							<div class="controls">
								<input type="text" id="inputNormal" name="defultprice" value="<?php echo isset($_defult_price)?$_defult_price:NULL; ?>" placeholder="Enter email address" class="input-block-level">
							</div>
						</div>

											<div class="control-group">
							<label class="control-label" for="inputNormal"><i class="icon-user"></i>Start Time</label>
							<div class="controls">

								  <div id="datetimepicker1" class="input-append date">
								    <input data-format="yyyy-MM-dd hh:mm:ss" name="starttime" value="<?php echo isset($_start_time)?$_start_time:NULL; ?>" type="text"></input>
								    <span class="add-on">
								      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
								      </i>
								    </span>
								  </div>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="inputNormal"><i class="icon-user"></i>End time</label>
							<div class="controls">
									<div id="datetimepicker2" class="input-append date">
								    <input data-format="yyyy-MM-dd hh:mm:ss" name="endtime" value="<?php echo isset($_end_time)?$_end_time:NULL; ?>" type="text"></input>
								    <span class="add-on">
								      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
								      </i>
								    </span>
								  </div>
							</div>
						</div>

												<div class="control-group">
							<label class="control-label" for="inputNormal"><i class="icon-user"></i>Status</label>
							<div class="controls">
									<div id="datetimepicker2" class="input-append date">
										  <label>
										    <input type="radio" <?php if($_status=="yes"){ echo "checked"; } ?> name="status" id="optionsRadios2" value="yes">
										    Yes
										  </label>
										    <label>
										    <input type="radio" <?php if($_status=="no"){ echo "checked"; } ?> name="status" id="optionsRadios2" value="no">
										    No
										  </label>
								  </div>
							</div>
						</div>

						<div class="form-actions">
							<button type="submit" name="updateaucation" class="btn btn-primary"> Save</button>
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

  <div class="col-xs-6 col-md-3">
    <a href="uploads/<?php echo isset($_attach_file)?$_attach_file:NULL; ?>" class="btn btn-primary">
    Attach File
    </a>
  </div>

				<div class="well no-padding">
<form id="myForm" action="upload-a-file.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="aid" value="<?php echo $_id; ?>">
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