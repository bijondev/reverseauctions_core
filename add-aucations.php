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
					<h3><i class="icon-cog"></i>Add New Auction</h3>
				</div>
				<!-- / Forms: Top Bar -->

				<!-- Forms: Content -->
				<div class="well no-padding">

					<!-- Forms: Form -->
					<form class="form-horizontal" method="post" action="<?php echo base_url; ?>php_action.php" >
					<input type="hidden" name="tid" value="<?php echo $_SESSION['cid']; ?>" >
						<!-- Forms: Normal input field -->
						<div class="control-group">
							<label class="control-label" for="inputNormal"><i class="icon-user"></i>Title</label>
							<div class="controls">
								<input type="text" id="inputNormal" name="auctiontitle" placeholder="Enter Aucation Title" class="input-block-level">
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
							<label class="control-label" for="inputNormal"><i class="icon-user"></i>Defult price</label>
							<div class="controls">
								<input type="text" id="inputNormal" name="defultprice" placeholder="Enter email address" class="input-block-level">
							</div>
						</div>

											<div class="control-group">
							<label class="control-label" for="inputNormal"><i class="icon-user"></i>Start Time</label>
							<div class="controls">

								  <div id="datetimepicker1" class="input-append date">
								    <input data-format="yyyy-MM-dd hh:mm:ss" name="starttime" type="text"></input>
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
								    <input data-format="yyyy-MM-dd hh:mm:ss" name="endtime" type="text"></input>
								    <span class="add-on">
								      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
								      </i>
								    </span>
								  </div>
							</div>
						</div>

						<div class="form-actions">
							<button type="submit" name="insertaucation" class="btn btn-primary"> Save</button>
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