	<!-- General Detail Start -->
			<section class="dashboard-wrap">
				<div class="container-fluid">
				<div class="container">
					<div class="row">
					
						<!-- Sidebar Wrap -->
						
						
						<!-- Content Wrap -->
						<div class="col-lg-12 col-md-8">
						  
						 
							<div class="dashboard-body">
								<div class="dashboard-caption">
									
									<div class="dashboard-caption-header">
										<h4><i class="fa fa-file-word-o fa-4x"></i>Submit Article</h4>
									</div>
									<form  method="post"  action="#" enctype="multipart/form-data">
						              <input type="hidden" value="submitarticle" name="action" />
									<div class="dashboard-caption-wrap">
										
										<!-- row -->
										<div class="row">
											<div class="col-md-12 col-sm-12">
												<div class="form-group">
													<h4>Article Submition Form</h4>
												</div>	
											</div>
										</div>
										
										
										
										<!-- Row Experience -->
										<div class="row mrg-top-30">
											<div class="col-md-12 col-sm-12">
												<div class="form-group">
													<h4>Information</h4>
												</div>	
											</div>
										</div>
										
										<!-- row -->
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="form-group">
													<label>First Name</label>
													<input type="fristname" class="form-control" required>
												</div>	
											</div>
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="form-group">
													<label>Middle  Name</label>
													<input type="text" name="middlename" class="form-control" required>
												</div>	
											</div>
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="form-group">
													<label>Last Name</label>
													<input type="text" name="lastname" class="form-control" required>
												</div>	
											</div>
											
										
										</div>
										
										
										<div class="row">
											<div class="col-lg-8 col-md-8 col-sm-12">
												<div class="form-group">
													<label>Email</label>
													<input type="email" name="email" class="form-control" required>
												</div>	
											</div>
											
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="form-group">
													<label>Mobile Number</label>
													<input type="text" name="number" class="form-control" required>
												</div>	
											</div>
											
										
										</div>
										
										
										<!-- row -->
										<div class="row">
											
											
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label>Abstract</label>
													<textarea name="abstract" class="form-control  resume height-120" placeholder="Add Abstract" required></textarea>
												</div>	
											</div>
											
											
											
											
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label>Title </label>
													<input type="text" name="title" class="form-control" required>
												</div>	
											</div>
											
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label>Authors</label>
													<input type="text" name="authors" class="form-control" required>
												</div>	
											</div>
											
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label>Attachment File</label>
													<div class="input-group">
													  <div class="custom-file">
														<input type="file" name="file" class="custom-file-input" >
														<label class="custom-file-label"  for="inputGroupFile01" >Choose file</label>
													  </div>
													</div>
												</div>	
											</div>
										</div>
										
										
										
										<div class="row mrg-top-30">
											<div class="col-md-12 col-sm-12">
												<div class="form-group text-center">
													<input type="submit" value="Update Article" name="submit" class="btn-savepreview" >
						
													
												</div>	
											</div>
										</div>
										
									</div>
								</form>
								</div>
							</div>
							
						</div>
					
					</div>
				 </div>	
				</div>
			</section>
			<!-- General Detail End -->
			

<?php   include("view/common/footer.php")?>
		
		