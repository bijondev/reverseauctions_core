		<!-- Create Account and Messages -->
		<div class="row-fluid">

			<!-- Create Account: Box -->
			<div class="span12">

				<!-- Create Account: Top Bar -->
				<div class="top-bar">
					<ul class="tab-container">
					  <li class="active"><a href="#user-overview"><i class="icon-user"></i> All Company</a></li>
					  <li><a href="#user-create"><i class="icon-user"></i> Create Account</a></li>
					</ul>
				</div>
				<!-- / Create Account: Top Bar -->

				<!-- Create Account: Content -->
				<div class="well no-padding tab-content">
					
					<!-- Create Account: Content User Overview -->
					<div class="tab-pane active" id="user-overview">

					<!-- Create Account: Content User Overview Table -->
						<table class="data-table">
							<thead>
								<tr>
									<th>Auction Title</th>
									<th>Defult Price</th>
									<th>Start Time</th>
									<th>End time</th>
									<th class="right">Actions</th>
								</tr>
							</thead>
							<tbody>
							<?php
$id=$_SESSION['parents_id'];
$table="ra_tender";
$field="_c_id";
$result=$obj->getByIdAll($id,$table,$field);
//print_r($result);
if (!empty($result)) {

foreach($result as $values_reels){
extract($values_reels);
							?>
								<tr>
									<td><?php echo isset($_title)?$_title:NULL; ?></td>
									<td><?php echo isset($_defult_price)?$_defult_price:NULL; ?></td>
									<td><?php echo isset($_start_time)?$_start_time:NULL; ?></td>
									<td><?php echo isset($_end_time)?$_end_time:NULL; ?></td>
									<td class="right">
										<a href="show-auction.php?aid=<?php echo md5(isset($_id)?$_id:NULL); ?>" class="btn btn-info">Show</a>
									</td>
								</tr><?php } } ?>
							</tbody>

						</table>
						<!-- / Create Account: Content User Overview Table -->

					</div>
					<!-- / Create Account: Content User Overview -->

				</div>
				<!-- / Create Account: Content -->

			</div>
			<!-- / Create Account: Box -->

			<!-- Messages: Box -->

		</div></div>