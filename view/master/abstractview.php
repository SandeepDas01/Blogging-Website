
			<!-- Title Header Start -->
			<section class="inner-header-title no-br advance-header-title light-tx" style="background-image:url(assets/img/banner-10.jpg);">
				<div class="container">
					<h2><span>Pharma</span> and biomedical insight</h2>
					<!--<p><span>704</span> new job in the last <span>7</span> days.</p>--->
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			
		
			
			<!-- ========== Begin: Brows job Category ===============  -->
			<section class="brows-job-category">
				<div class="container">
					<div class="col-md-9 col-sm-12">
					
						<?php
			
			$sid=$_REQUEST['sId'];
							$sql="SELECT * FROM `services` where sId=".$sid;
							
							$result=query($sql);
							$i=1;
							$list='';
							while($resultRow = fetchArray($result))
							{
								 $list.='<article>
                            <a href="#" title="'.$resultRow['sName'].'"><h1>'.$resultRow['sName'].'</h1></a>
							<div class="brows-job-list">
								<div class="col-md-12 col-sm-12">
											
											<div class="advance-search-caption">
												
												
												<p><span><b>Author(s):</b></span>'.$resultRow['Author'].'</p>
												
												
												<p><span><b>DOI: </b></span> <a href="<?php echo BASEURL; ?>#">'.$resultRow['DOI'].'</a></p>
												
												<p><span><b>Cite: </b></span>'.$resultRow['sName'].' doi: <a href="#">'.$resultRow['cite'].'</a></p>
												
												<p align="right"><a href="'.BASEURLFORIMAGES.''.$resultRow['sImage'].'"  class="btn advance-search" title="apply" style="" target="_blank" >View File <i class="fa fa-file-pdf-o"></i></a></p>
											</div>
										
										</div>
								
								
							</div>
						</article>
					
						<article class="blog-news">
								<div class="full-blog">
								
									<div class="full blog-content">
										
										<h2 class="blog-sing-title">ABSTRACT:</h2>
										<div class="blog-text">
											<p>'.$resultRow['desc'].'</p>
											
										</div>
									</div>
									
								</div>
						</article>';
								 
							}
							echo $list;
						
						 ?>



					
						<article class="blog-news">
								<div class="full-blog">
								
									<div class="full blog-content">
										
										<h2 class="blog-sing-title">ABSTRACT:</h2>
										<div class="blog-text">
											<p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
											
										</div>
									</div>
									
								</div>
						</article>
									
									
						
							<!-- Comment Form -->
							<div class="row no-mrg">
								<div class="row-bottom">
								<h2 class="detail-title">RECOMONDED ARTICLES:</h2>
								
						        </div>
								<div class="candidate-list-layout">
										<div class="cll-wrap">
											
											<div class="cll-caption">
												<h4><a href="#">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore</a></h4>
												<ul>
													<li><span><b>Author(s):</b></span>Lorem ipsum dolor sit amet</li>
													
												</ul>
												<ul>
													
													<li><span><b>DOI:</b></span> <a href="#">10.5958/0974-360X.2016.00152.9 </a></li>
												</ul>

											</div>
										</div>
										
										<div class="cll-right">
											<a href="#" class="btn theme-btn btn-shortlist">Red More <i class="ti-angle-double-right"></i></a>
										</div>
								</div>
								
								
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
								<h2 class="side-widget-title">Resent Category</h2>
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