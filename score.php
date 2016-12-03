<?php
include 'config.php';
if (!empty($_SESSION['email'])) {
?>
<?php include 'header.php'; ?>

<!-- Information Boxes -->
		<div class="row-fluid">

<div class="span6">
<?php
$data=isset($_GET['sid'])?$_GET['sid']:NULL;
$result=$obj->showDataDetailsauctions($data);
//print_r($result);
if (!empty($result)) {
extract($result);
}
?>
				<!-- Forms: Top Bar -->
				<div class="top-bar">
					<h3><i class="icon-cog"></i><?php echo isset($_title)?$_title:NULL; ?>

					</h3>
				</div>
				<!-- / Forms: Top Bar -->
<?php
$field="_company_id";
$id=$_SESSION['cid'];
$table="ra_score";
$tenderid=$_id;
$defultprice=$_defult_price;
$time=date("Y-m-d H:i:s");

$result=$obj->getByIdAll($id,$table,$field);
if (empty($result)) {
				$contact_data = array(
					'_id'=>0,
					'_tender_id' =>$tenderid,
					'_company_id' =>$_SESSION['cid'],
					'_time' =>$time,
					'_price' =>$defultprice,
					'_comments' =>""
					);
					//echo $i;

			$obj->dbRowInsert("ra_score", $contact_data);
}


?>
				<!-- Forms: Content -->
				<div class="well no-padding">
<form class="form-horizontal" method="post" action="<?php echo base_url; ?>php_action.php" >
					<!-- Forms: Form -->
<input type="hidden" id="tenderid" name="tenderid" value="<?php echo $tenderid; ?>" >
<input type="hidden" name="companyid" value="<?php echo $_SESSION['cid']; ?>" >
<input type="hidden" name="defultprice" value="<?php echo $defultprice; ?>" >


					<input type="hidden" name="aid" value="<?php echo isset($_id)?$_id:NULL; ?>" >
						<!-- Forms: Normal input field -->

											<div class="control-group">
							<label class="control-label" for="inputNormal"><i class="icon-user"></i>Start Time</label>
							<div class="controls">

								    <?php echo isset($_start_timef)?$_start_timef:NULL; ?>

							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="inputNormal"><i class="icon-user"></i>End time</label>
							<div class="controls">
								    <?php echo isset($_end_timef)?$_end_timef:NULL; ?>
							</div>
						</div>


<div class="control-group">
	<label class="control-label" for="inputNormal"><i class="icon-user"></i>Comporomise Price</label>
	<div class="controls">
		   								<select class="span3" name="nagotionprice" >
									<?php
									foreach ($pricedistance as  $value) {
										?>
										<option value="<?php echo "-".$value; ?>"><?php echo $value; ?></option>
										<?php
									}
									?>
								</select>
	</div>
</div>

						<div class="form-actions">
							<button type="submit" name="nagotion" class="btn btn-primary">Send</button>

						</div>
					<!-- / Forms: Form Actions -->
</form> 
					<!-- / Forms: Form -->           

				</div>
				<!-- / Forms: Content -->

			</div>
			<!-- / Forms: Box -->
<div class="span6">
<?php
 $end_second=strtotime(isset($_end_timef)?$_end_timef:NULL);
 $ext_time=$obj->get_extend_minuts($_id)*60;
 $total_time=$end_second+$ext_time;
 //echo date( 'F j Y H:i:s', $total_time); echo "<br />";
 //echo isset($_end_timef)?$_end_timef:NULL;
?>
<div class="top-bar">
	<h3 style="width:95%;" ><i class="icon-cog"></i>Score Line
	<span data-index="1" style="float:right;" date-value="<?php echo date( 'F j Y H:i:s', $total_time); ?>" ></span>
	</h3>

</div>
<div class="well no-padding">
<div class="" id="pointtable" >
	
</div></div>
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