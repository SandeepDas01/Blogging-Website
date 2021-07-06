	<!-- Title Header Start -->
			<section class="inner-header-title no-br advance-header-title light-tx" style="background-image:url(assets/img/banner-10.jpg);">
				<div class="container">
					<h2><span>Pharma</span> and Biomedical Insight</h2>
					<!--<p><span>704</span> new job in the last <span>7</span> days.</p>--->
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			
		
			
			<!-- ========== Begin: Brows job Category ===============  -->
			<section class="brows-job-category gray-bg">
				<div class="container">
					<div class="col-md-9 col-sm-12">
						
						
						
						<?php
			
			
			$s=$_REQUEST['search'];
			
			
							$sql="SELECT * FROM services
WHERE sName LIKE '".$s."%'";


							$result=query($sql);
							$i=1;
							$list='';
							while($resultRow = fetchArray($result))
							{
								
								 $list.='<article>
							<div class="brows-job-list">
								<div class="col-md-12 col-sm-12">
											
											<div class="advance-search-caption">
												<a href="'.BASEURL.'Abstractview/'.$resultRow['sId'].'"><h4>'.$resultRow['sName'].'</h4></a>
												
												
												
												
													</div>
										
										</div>
								
								
							</div>
						</article>';
						$i=0;
								 
							}
							
							
							if($i==1)
							{
								echo "Your query not found";
							}
							else
							{
							echo $list;
							}
						
						 ?>
						
						
						<!-- Ad banner -->
						<div class="row">
							
						</div>
					</div>
					
					<!-- Sidebar Start -->
					<div class="col-md-3 col-sm-12">
						<div class="sidebar right-sidebar">
						
							<form action="#" method="post">
							<input type="hidden" name="action" value="blogSearch">
									<div class="search-form">
										<div class="input-group">
											<input type="text" class="form-control" name="search" placeholder="Search…">
											<span class="input-group-btn">
												<button type="submit" class="btn btn-default">Go</button>
											</span>
										</div>
									</div>
								</form>
								
							
							<div class="side-widget">
								
								<div class="widget-text padd-0">
									<div class="ad-banner">
										<img src="http://via.placeholder.com/320x285" class="img-responsive" alt="">
									</div>
								</div>
							</div>
							
							<div class="side-widget">
								
								<div class="widget-text padd-0">
									<div class="ad-banner">
										<img src="http://via.placeholder.com/320x285" class="img-responsive" alt="">
									</div>
								</div>
							</div>
							
							<div class="side-widget">
								<h2 class="side-widget-title">QUICK LINKS</h2>
								<div class="widget-text padd-0">
									 <ul class="footer-menu">
										<li><a href="home-6.html"><i class="fa fa-map-marker fa-2x"></i>&nbsp;&nbsp; Demo</a></li>
										<li><a href="browse-candidate-list.html"><i class="fa fa-users fa-2x"></i>&nbsp;&nbsp; Demo</a></li>
										<li><a href="browse-employer-list.html"><i class="fa fa-file-word-o fa-2x"></i>&nbsp;&nbsp; Demo</a></li>
										<li><a href="advance-search-2.html"><i class="fa fa-files-o fa-2x"></i>&nbsp;&nbsp; Demo</a></li>
										<li><a href="checkout.html"><i class="fa fa-rupee fa-2x"></i>&nbsp;&nbsp; Demo</a></li>
										<li><a href="checkout.html"><i class="fa fa-tasks fa-2x"></i>&nbsp;&nbsp; Demo</a></li>
										<li><a href="checkout.html"><i class="fa fa-files-o fa-2x"></i>&nbsp;&nbsp; Demo</a></li>
									 </ul> 
								</div>
							</div>
							
							<div class="side-widget">
								<h2 class="side-widget-title">LATEST ISSUES</h2>
								<div class="widget-text padd-0">
									 <ul class="footer-menu">
									    <li><a href="browse-candidate-list.html"><i class="fa fa-stack-overflow fa fa-2x"></i>&nbsp;&nbsp;  Demo 2021</a></li>
										<li><a href="browse-employer-list.html"><i class="fa fa-stack-overflow fa fa-2x"></i>&nbsp;&nbsp; Demo 2021</a></li>
										<li><a href="advance-search-2.html"><i class="fa fa-stack-overflow fa fa-2x"></i>&nbsp;&nbsp; Demo 2021</a></li>
										<li><a href="checkout.html"><i class="fa fa-stack-overflow fa fa-2x"></i>&nbsp;&nbsp; Demo 2021</a></li>
										<li><a href="checkout.html"><i class="fa fa-stack-overflow fa fa-2x"></i>&nbsp;&nbsp; Demo 2021</a></li>
										<li><a href="checkout.html"><i class="fa fa-stack-overflow fa fa-2x"></i>&nbsp;&nbsp; Demo 2021</a></li>
										<li><a href="checkout.html"><i class="fa fa-stack-overflow fa fa-2x"></i>&nbsp;&nbsp; Demo 2021</a></li>
									 </ul> 
								</div>
							</div>
							
							<div class="side-widget">
								<h2 class="side-widget-title">Recent Category</h2>
								<div class="widget-text padd-0">
									
									<div class="blog-item">
										
									</div>
									<div class="blog-item">
										
										<div class="blog-detail">
											<a href="blog-details.html"><h4>Enim Ad Minim Veniam, Quis Nostrud Exercitation</h4></a>
											<div class="post-info">Aug 10 2021</div>
										</div>
									</div>
									
									<div class="blog-item">
										
										<div class="blog-detail">
											<a href="blog-details.html"><h4>Enim Ad Minim Veniam, Quis Nostrud Exercitation</h4></a>
											<div class="post-info">Aug 10 2021</div>
										</div>
									</div>
									<div class="blog-item">
									
										<div class="blog-detail">
											<a href="blog-details.html"><h4>Enim Ad Minim Veniam, Quis Nostrud Exercitation</h4></a>
											<div class="post-info">Aug 10 2021</div>
										</div>
									</div>
								</div>
							</div>
							
							
							
						
							
						</div>
					</div>
					<!-- Sidebar End -->
					
				</div>
			</section>
			<!-- ========== Begin: Brows job Category End ===============  -->
			<?php   include("view/common/footer.php")?>
			