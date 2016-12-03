		<!-- Information Boxes -->
		<div class="row-fluid">

			<!-- Information Boxes: Users Registered -->
			<div class="span3 well infobox">
				<i class="icon-6x icon-user"></i>
				<div class="pull-right text-right">
					Users Registered<br>
					<b class="huge">175</b><br>
					<span class="caps muted">Today</span>
				</div>
			</div>
			<!-- / Information Boxes: Users Registered -->

			<!-- Information Boxes: Active Users -->
			<div class="span3 well infobox">
				<i class="icon-6x icon-rss"></i>
				<div class="pull-right text-right">
					Subscribers<br>
					<b class="huge">3432</b><br>
					<span class="caps muted">+25 Today</span>
				</div>
			</div>
			<!-- / Information Boxes: Active Users -->

			<!-- Information Boxes: Images -->
			<div class="span3 well infobox">
				<i class="icon-6x icon-picture"></i>
				<div class="pull-right text-right">
					Images<br>
					<b class="huge">4343</b><br>
					<span class="caps muted">+5 Today</span>
				</div>
			</div>
			<!-- / Information Boxes: Images -->
			
			<!-- Information Boxes: Applications -->
			<div class="span3 well infobox">
				<i class="icon-6x icon-pencil"></i>
				<div class="pull-right text-right">
					Applications<br>
					<b class="huge">34</b><br>
					<span class="caps muted">Installed</span>
				</div>
			</div>
			<!-- / Information Boxes: Applications -->

		</div>
		<!-- / Information Boxes -->

		<!-- Site Traffic and Pie -->

		<!-- Create Account and Messages -->
		<div class="row-fluid">

			<!-- Create Account: Box -->
			<div class="span8">

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
									<th>Company</th>
									<th>email</th>
									<th>Type</th>
									<th>Statue</th>
									<th class="right">Actions</th>
								</tr>
							</thead>
							<tbody>
							<?php
$id="buyer";
$table="ra_company";
$field="_type";
$result=$obj->getByIdAll($id,$table,$field);
//print_r($result);
if (!empty($result)) {

foreach($result as $values_reels){
extract($values_reels);
							?>
								<tr>
									<td><?php echo isset($_company_name)?$_company_name:NULL; ?></td>
									<td><?php echo isset($_email)?$_email:NULL; ?></td>
									<td><?php echo isset($_type)?$_type:NULL; ?></td>
									<td><span class="label label-important"><?php echo isset($_video_url)?$_video_url:NULL; ?></span></td>
									<td class="right">
										<a href="edit-company.php?cid=<?php echo md5(isset($_id)?$_id:NULL); ?>" class="btn btn-info">Edit</a>
										<a type="button" class="btn btn-danger">Delete</a>
									</td>
								</tr><?php } } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>Company</th>
									<th>email</th>
									<th>Type</th>
									<th>Statue</th>
									<th class="right">Actions</th>
								</tr>
							</tfoot>
						</table>
						<!-- / Create Account: Content User Overview Table -->

					</div>
					<!-- / Create Account: Content User Overview -->

					<!-- / Create Account: Tab -->   
					<div class="tab-pane" id="user-create">

						<!-- Create Account: Form -->
						<form class="form-horizontal">

							<!-- Create Account: Top Information -->
							<div class="top-info">

								<!-- Alert -->
								<div class="alert alert-info">
									<a class="close" data-dismiss="alert">&times;</a>
									<i class="icon-info"></i> You can add users through this panel
								</div>
								<!-- / Alert -->

							</div>
							<!-- / Create Account: Top Information -->

							<!-- Create Account: Form Name -->
							<div class="control-group">
								<label class="control-label" for="inputName"><i class="icon-user"></i> Name</label>
								<div class="controls">
									<input type="text" id="inputName" placeholder="Name">
								</div>
							</div>
							<!-- / Create Account: Form Name -->

							<!-- Create Account: Form Username -->
							<div class="control-group">
								<label class="control-label" for="inputUsername"><i class="icon-user"></i> Username</label>
								<div class="controls">
									<input type="text" id="inputUsername" placeholder="Username">
								</div>
							</div>
							<!-- / Create Account: Form Username -->

							<!-- Create Account: Form Nationality -->
							<div class="control-group">
								<label class="control-label" for="inputNationality"><i class="icon-flag"></i> Nationality</label>
								<div class="controls">
									<input type="text" class="typeahead" id="inputNationality" placeholder="Nationality">
								</div>
							</div>
							<!-- / Create Account: Form Nationality -->

							<!-- Create Account: Form Password -->
							<div class="control-group">
								<label class="control-label" for="inputPassword"><i class="icon-key"></i> Password</label>
								<div class="controls">
									<input type="password" id="inputPassword" placeholder="Password">
								</div>
							</div>
							<!-- / Create Account: Form Password -->

							<!-- Create Account: Form Email -->
							<div class="control-group">
								<label class="control-label" for="inputEmail"><i class="icon-envelope"></i> Email</label>
								<div class="controls">
									<input type="text" id="inputEmail" placeholder="Email">
								</div>
							</div>
							<!-- / Create Account: Form Email -->

							<!-- Create Account: Form Gender -->
							<div class="control-group">
								<label class="control-label" for="inputGender"><i class="icon-user"></i> Gender</label>
								<div class="controls">
									<div class="btn-group" data-toggle="buttons-radio">
										<button type="button" class="btn">Female</button>
										<button type="button" class="btn">Male</button>
									</div>
								</div>
							</div>
							<!-- / Create Account: Form Gender -->

							<!-- Create Account: Form Date of Birth -->
							<div class="control-group">
								<label class="control-label" for="inputDate"><i class="icon-user"></i> Date of Birth</label>
								<div class="controls">
		 
									<select class="span12">
										<option value="Day">Day</option>
										<option value="01">01</option>
										<option value="02">02</option>
									</select>
									<select class="span12">
										<option value="Month">Month</option>
										<option value="January">January</option>
										<option value="February">February</option>
									</select>
									<select class="span12">
										<option value="Year">Year</option>
										<option value="2012">2012</option>
										<option value="2013">2013</option>
									</select>
								</div>
							</div>
							<!-- / Create Account: Form Date of Birth -->
		 
							<!-- Create Account: Form Actions -->
							<div class="form-actions">
								<button type="submit" class="btn btn-primary">Signup</button>
								<button type="button" class="btn">Cancel</button>
							</div>
							<!-- / Create Account: Form Actions -->
		 
						</form> 
						<!-- / Create Account: Form -->   

					</div>
					<!-- / Create Account: Tab -->   

				</div>
				<!-- / Create Account: Content -->

			</div>
			<!-- / Create Account: Box -->

			<!-- Messages: Box -->
			<div class="span4">

				<!-- Messages: Top Bar -->
				<div class="top-bar">
						<h3><i class="icon-envelope"></i> Messages</h3>
				</div>
				<!-- / Messages: Top Bar -->

				<!-- Messages: Content -->
				<div class="well no-padding" id="pagination-messages">
 
					<!-- Messages: Content Messages -->
					<div class="list-widget messages pagination-content">

						<!-- Messages: Content Message -->
						<div class="item">
							<small class="pull-right">2 hours ago</small>
							<h3><i class="icon-user"></i> Kasper <span class="label">admin</span></h3>
							<p>Working on it!</p>
						</div>
						<!-- / Messages: Content Message -->
				
						<!-- Messages: Content Message -->
						<div class="item">
							<small class="pull-right">5 hours ago</small>
							<h3><i class="icon-user"></i> Janika <span class="label">admin</span></h3>
							<p>You better fix that bug already</p>
						</div>
						<!-- / Messages: Content Message -->
	
						<!-- Messages: Content Message -->
						<div class="item">
							<small class="pull-right">6 hours ago</small>
							<h3><i class="icon-user"></i> Turtle-Kid <span class="label">admin</span></h3>
							<p>I want a turtle!</p>
						</div>
						<!-- / Messages: Content Message -->
	
						<!-- Messages: Content Message -->

						<div class="item">
							<small class="pull-right">6 hours ago</small>
							<h3><i class="icon-user"></i> Janika <span class="label">admin</span></h3>
							<p>I'll make this admin panel holy as swiss cheese.</p>
						</div>
						<!-- / Messages: Content Message -->

						<!-- Messages: Content Message -->
						<div class="item">
							<small class="pull-right">7 hours ago</small>
							<h3><i class="icon-user"></i> Kasper <span class="label">admin</span></h3>
							<p>Haha, yeah. must be a bug</p>
						</div>
						<!-- / Messages: Content Message -->
				
						<!-- Messages: Content Message -->
						<div class="item">
							<small class="pull-right">8 hours ago</small>
							<h3><i class="icon-user"></i> Janika <span class="label">admin</span></h3>
							<p>That was random.</p>
						</div>
						<!-- / Messages: Content Message -->
	
						<!-- Messages: Content Message -->
						<div class="item">
							<small class="pull-right">14 hours ago</small>
							<h3><i class="icon-user"></i> Turtle-Kid <span class="label">user</span></h3>
							<p>I like turtles.</p>
						</div>
						<!-- / Messages: Content Message -->
	
						<!-- Messages: Content Message -->

						<div class="item">
							<small class="pull-right">15 hours ago</small>
							<h3><i class="icon-user"></i> Janika <span class="label">admin</span></h3>
							<p>Alright, ill start on the html now..</p>
						</div>
						<!-- / Messages: Content Message -->

						<!-- Messages: Content Message -->
						<div class="item">
							<small class="pull-right">16 hours ago</small>
							<h3><i class="icon-user"></i> Kasper <span class="label">admin</span></h3>
							<p>Sent it over!</p>
						</div>
						<!-- / Messages: Content Message -->
				
						<!-- Messages: Content Message -->
						<div class="item">
							<small class="pull-right">18 hours ago</small>
							<h3><i class="icon-user"></i> Janika <span class="label">admin</span></h3>
							<p>You better be done soon!</p>
						</div>
						<!-- / Messages: Content Message -->
	
						<!-- Messages: Content Message -->
						<div class="item">
							<small class="pull-right">21 hours ago</small>
							<h3><i class="icon-user"></i> Kasper <span class="label">admin</span></h3>
							<p>Its nearly done, just need a small tweak.</p>
						</div>
						<!-- / Messages: Content Message -->
	
						<!-- Messages: Content Message -->

						<div class="item">
							<small class="pull-right">22 hours ago</small>
							<h3><i class="icon-user"></i> Janika <span class="label label-info">admin</span></h3>
							<p>Have you finished the designs, Kasper?</p>
						</div>
						<!-- / Messages: Content Message -->

					</div>
					<!-- Messages: Content Messages -->

					<!-- Messages: Quick Reply -->
					<form class="list-widget">
	
						<div class="item">
							<div class="input-prepend input-append">
								<span class="add-on"><i class="icon-comment-alt"></i></span>
								<input class="no-margin input-full-width" type="text" placeholder="Quick Reply..">
								<button class="btn" type="button">Post</button>
							</div>
						</div>

					</form>
					<!-- / Messages: Quick Reply -->
					
					<!-- Messages: Content Pagination -->
					<div class="pagination pagination-centered"></div>
					<!-- / Messages: Content Pagination -->
	
				</div>
				<!-- / Messages: Content -->

			</div>
			<!-- Messages: Box -->

		</div>
		<!-- / Create Account and Messages -->

		<!-- Calendar and Todo List -->
		


	</div> 
	<!-- / Content Container -->
