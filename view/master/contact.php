
			<!-- Title Header Start -->
			<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
				<div class="container">
					<h1>Contact Page</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Contact Page Section Start -->
			<section class="contact-page">
				<div class="container">
				<h2>Drop A Mail</h2>
				
					<div class="col-md-4 col-sm-4">
						<div class="contact-box">
							<i class="fa fa-map-marker"></i>
							<p>#Street 2122, Near New Market<br>London Uk (122546)</p>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4">
						<div class="contact-box">
							<i class="fa fa-envelope"></i>
							<p>Info@pbijournal.Com<br>support@pbijournal.Com</p>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4">
						<div class="contact-box">
							<i class="fa fa-phone"></i>
							<p>+91 7014790412<br>+91 7014790412</p>
						</div>
					</div>
					
				</div>
			</section>
			<!-- contact section End -->
			
			<!-- contact form -->
			<section class="contact-form">
				<div class="container">
					<h2>Drop A Mail</h2>
				<form action="#" method="post" enctype="multipart/form-data" class="text-right">
				     <input type="hidden" name="action" value="contactDB" />
					<div class="col-md-6 col-sm-6">
						<input type="text" name="name" class="form-control" placeholder="Your Name">
					</div>
					
					<div class="col-md-6 col-sm-6">
						<input type="email" name="email" class="form-control" placeholder="Your Email">
					</div>
					
					<div class="col-md-6 col-sm-6">
						<input type="text" name="phone" class="form-control" placeholder="Phone Number">
					</div>
					
					<div class="col-md-6 col-sm-6">
						<input type="text" name="subject" class="form-control" placeholder="Subject">
					</div>
					
					<div class="col-md-12 col-sm-12">
						<textarea class="form-control" name="message" placeholder="Message"></textarea>
					</div>
					
					<div class="col-md-12 col-sm-12">
					  <input type="submit" value="Submit" name="submit" class="btn btn-primary" >
						
					</div>
				</form>	
				</div>
			</section>
			<!-- Contact form End -->
			<?php   include("view/common/footer.php")?>
			
			<?php  

					if (isset($_REQUEST['ContactQueryDone'])) {
						echo "<script> 
							swal('Thank You!!', 'Your Contact Query has been successfully submitted', 'success');
								 
							</script>";
					}


			?>