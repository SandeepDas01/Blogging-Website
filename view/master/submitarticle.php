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
									
									<!-- row -->
										<div class="row">
											<div class="col-md-12 col-sm-12">
												<div class="form-group">
													<h4>Article Submition Form</h4>
												</div>	
											</div>
										</div>
										
									
									<form action="#" method="post" enctype="multipart/form-data" class="text-right">
										 <input type="hidden" name="action" value="submitarticleDB" />
										<div class="col-md-6 col-sm-6">
											<input type="text" name="fristname" class="form-control" placeholder="Frist Name">
										</div>
										<div class="col-md-6 col-sm-6">
											<input type="text" name="middlename" class="form-control" placeholder="Midle Name">
										</div>
										<div class="col-md-6 col-sm-6">
											<input type="text" name="lastname" class="form-control" placeholder="Last Name">
										</div>
										<div class="col-md-6 col-sm-6">
											<input type="email" name="email" class="form-control" placeholder="Your Email">
										</div>
										
										<div class="col-md-6 col-sm-6">
											<input type="text" name="number" class="form-control" placeholder="Phone Number">
										</div>
										
										<div class="col-md-6 col-sm-6">
											<input type="text" name="authors" class="form-control" placeholder="Authors">
										</div>
										
										<div class="col-md-12 col-sm-12">
											<textarea name="abstract" placeholder="Abstract" class="form-control resume height-120"></textarea>
										</div>
										
										<div class="col-md-6 col-sm-6">
											<input type="text" name="title" class="form-control" placeholder="Title">
										</div>
										
										<div class="col-md-6 col-sm-6">
											<input type="file" name="file" class="form-control" placeholder="File">
										</div>
										
										<div class="col-md-12 col-sm-12">
										  <input type="submit" value="Submit" name="submit" class="btn btn-primary" >
											
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
		
			<?php  

					if (isset($_REQUEST['SubmitArticleDone'])) {
						echo "<script> 
							swal('Thank You!!', 'Your Article has been successfully submitted', 'success');
								 
							</script>";
					}


			?>