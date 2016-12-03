<?php
include 'config.php';
if (!empty($_SESSION['email'])) {
?>
<?php include 'header.php'; ?>

<!-- Information Boxes -->
		<div class="row-fluid">

<div class="span6">

				<!-- Forms: Top Bar -->
				<div class="top-bar">
					<h3><i class="icon-cog"></i>Auction</h3>
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
								<?php echo isset($_title)?$_title:NULL; ?>
							</div>
						</div>
						<!-- / Forms: Normal input field -->

						<!-- Forms: Form Password -->
						<div class="control-group">
							<label class="control-label" for="inputPassword"><i class="icon-key"></i>Description</label>
							<div class="controls">
								<?php echo isset($_description)?$_description:NULL; ?>
							</div>
						</div>
						<!-- / Forms: Form Password -->
					<div class="control-group">
							<label class="control-label" for="inputNormal"><i class="icon-user"></i>Defult price</label>
							<div class="controls">
								<?php echo isset($_defult_price)?$_defult_price:NULL; ?>
							</div>
						</div>

											<div class="control-group">
							<label class="control-label" for="inputNormal"><i class="icon-user"></i>Start Time</label>
							<div class="controls">

								    <?php echo isset($_start_time)?$_start_time:NULL; ?>

							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="inputNormal"><i class="icon-user"></i>End time</label>
							<div class="controls">
								    <?php echo isset($_end_time)?$_end_time:NULL; ?>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="inputNormal"></label>
							<div class="controls">

								        <a href="uploads/<?php echo isset($_attach_file)?$_attach_file:NULL; ?>" class="btn btn-info">
									    Download Attach File
									    </a>

							</div>
						</div>

						<div class="form-actions">
							<a href="score.php?sid=<?php echo md5(isset($_id)?$_id:NULL); ?>" class="btn btn-primary">Start</a>

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