<?php 
	$this->load->view('layouts/header');
?>
        <!-- Breadcurb AREA -->
		<div class="breadcurb-area">
			<div class="container">
				<ul class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Men</a></li>
					<li>Single Product</li>
				</ul>
			</div>
		</div>
		<!-- Product Item AREA -->
		<div class="product-item-area">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<div class="product-item-categori">
							<div class="product-type">
								<h2>Product Type</h2>
								<ul>
									<li><a href="#"><i class="fa fa-angle-right"></i>Dresses</a></li>
									<li><a href="#" class="active"><i class="fa fa-angle-right"></i>Shirts</a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Coats</a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Jackets</a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Storts</a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Jeans</a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Skirts</a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Lingeris</a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Shoes</a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Bags</a></li>
								</ul>
							</div>
						</div>
						<div class="price-filter">
							<h2>Filter by price</h2>
							<div id="slider-range"></div>
							<button class="btn btn-default">Filter</button>
							<p>
							  <label for="amount">Price:</label>
							  <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
							</p>
						</div>
						<div class="filter-size-area">
							<h2>Filter by Size</h2>
							<div class="filter-size">
								<div class="filter-size-left">
									<p>M (6)</p>
									<p>X (7)</p>
									<p>XS (10)</p>
								</div>
								<div class="filter-size-right">
									<p>M (6)</p>
									<p>X (7)</p>
									<p>XS (10)</p>
								</div>
							</div>
						</div>
						<div class="add-shop">
							<div class="add-kids single-add">
								<a href="#"><img src="img/banner/kids-ad.jpg" alt="add"></a>
							</div>
							<div class="add-dress single-add">
								<a href="#"><img src="img/banner/kids-ad-2.jpg" alt="add"></a>
							</div>
						</div>
					</div>
					<div class="col-md-9 col-sm-8">
						<div class="row">
							<div class="col-md-5 col-sm-5">
								<div class="product-item-tab">
									<!-- Tab panes -->
									<div class="single-tab-content">
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane active" id="img-one"><img src="img/single-product/single-product-1.jpg" alt="tab-img"></div>
											<div role="tabpanel" class="tab-pane" id="img-two"><img src="img/single-product/single-product-2.jpg" alt="tab-img"></div>
											<div role="tabpanel" class="tab-pane" id="img-three"><img src="img/single-product/single-product-1.jpg" alt="tab-img"></div>
										</div>
									</div>
									<!-- Nav tabs -->
									<div class="single-tab-img">
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active"><a href="#img-one" role="tab" data-toggle="tab"><img src="img/single-product/s1.jpg" alt="tab-img"></a></li>
											<li role="presentation"><a href="#img-two" role="tab" data-toggle="tab"><img src="img/single-product/s2.jpg" alt="tab-img"></a></li>
											<li role="presentation" class="tab-last-li"><a href="#img-three" role="tab" data-toggle="tab"><img src="img/single-product/s3.jpg" alt="tab-img"></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-7 col-sm-7">
								<div class="product-tab-content">
									<div class="product-tab-header">
										<h1>Baby New Style Jackets</h1>
										<div class="best-product-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<p>(3 costomar review)</p>
										</div>
										<h3>$52.00</h3>
									</div>
									<div class="product-item-code">
										<p>Item Code  :   #897896</p>
										<p>Availability :   In stock</p>
									</div>
									<div class="product-item-details">
										<p>Nulla quis lorem ut libero malesuada feugiat. Donec sollicitudin molestie malesuada. Mauris. </p>
									</div>
									<div class="size-chart">
										<p>Size Chart: <i class="fa fa-plus"></i></p>
										<!--
										<select name="" id="">
											<option value="">Size Chart: <i class="fa fa-plus"></i></option>
											<option value="">Lg</option>
											<option value="">Xs</option>
											<option value="">Xs</option>
										</select>
										-->
									</div>
									<div class="available-option">
										<h2>Available Options:</h2>
										<div class="color-option fix">
											<p>Color:</p>
											<a href="#" class="color-1"></a>
											<a href="#" class="color-2"></a>
											<a href="#" class="color-3"></a>
											<a href="#" class="color-4"></a>
											<a href="#" class="color-5"></a>
											<a href="#" class="color-6"></a>
										</div>
										<div class="size-option fix">
											<p>Size:</p>
											<select>
												<option value="Choose an option">Choose an option</option>
												<option value="Lg">Lg</option>
												<option value="Xs">M</option>
												<option value="Xs">Xs</option>
											</select>
										</div>
										<div class="wishlist-icon">
											<div class="single-wishlist">
												<a href="#"><i class="fa fa-heart"></i></a>
												<p>wishlist</p>
											</div>
											<div class="single-wishlist">
												<a href="#"><i class="fa fa-signal"></i></a>
												<p>Compare</p>
											</div>
										</div>
									</div> 
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="description-tab">
								<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#description" role="tab" data-toggle="tab">Description</a></li>
										<li role="presentation"><a href="#information" role="tab" data-toggle="tab">Addisonal information</a></li>
										<li role="presentation"><a href="#reviews" role="tab" data-toggle="tab">Reviews (3)</a></li>
									</ul>
									  <!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="description">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>

											<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
										</div>
										<div role="tabpanel" class="tab-pane" id="information">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>

											<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. </p>
										</div>
										<div role="tabpanel" class="tab-pane" id="reviews">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>

											<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="single-product-slider similar-product">
									<div class="product-items">
										<h2 class="product-header">Similar PRODUCTS</h2>
										<div class="row">
											<div id="singleproduct-slider" class="owl-carousel">
												<div class="col-md-4">
													<div class="single-product">
														<div class="single-product-img">
															<a href="#">
																<img class="primary-img" src="img/product/single-product-1.jpg" alt="product">
																<img class="secondary-img" src="img/product/kids-1.jpg" alt="product">
															</a>
															<div class="single-product-action">
																<a href="#"><i class="fa fa-external-link"></i></a>
																<a href="#"><i class="fa fa-shopping-cart"></i></a>
															</div>
														</div>
														<div class="single-product-content">
															<div class="product-content-left">
																<h2><a href="#">EXCLUSIVE STYLE</a></h2>
																<p>Jacket’s</p>
															</div>
															<div class="product-content-right">
																<h3>$27.00</h3>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-4">
													<div class="single-product">
														<div class="single-product-img">
															<a href="#">
																<img class="primary-img" src="img/product/kids-2.jpg" alt="product">
																<img class="secondary-img" src="img/product/single-product-2.jpg" alt="product">
															</a>
															<div class="single-product-action">
																<a href="#"><i class="fa fa-external-link"></i></a>
																<a href="#"><i class="fa fa-shopping-cart"></i></a>
															</div>
														</div>
														<div class="single-product-content">
															<div class="product-content-left">
																<h2><a href="#">EXCLUSIVE STYLE</a></h2>
																<p>Jacket’s</p>
															</div>
															<div class="product-content-right">
																<h3>$27.00</h3>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-4">
													<div class="single-product">
														<div class="single-product-img">
															<a href="#">
																<img class="primary-img" src="img/product/kids-4.jpg" alt="product">
																<img class="secondary-img" src="img/product/men-2.jpg" alt="product">
															</a>
															<div class="single-product-action">
																<a href="#"><i class="fa fa-external-link"></i></a>
																<a href="#"><i class="fa fa-shopping-cart"></i></a>
															</div>
														</div>
														<div class="single-product-content">
															<div class="product-content-left">
																<h2><a href="#">EXCLUSIVE STYLE</a></h2>
																<p>Jacket’s</p>
															</div>
															<div class="product-content-right">
																<h3>$27.00</h3>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-4">
													<div class="single-product">
														<div class="single-product-img">
															<a href="#">
																<img class="primary-img" src="img/product/single-product-1.jpg" alt="product">
																<img class="secondary-img" src="img/product/kids-1.jpg" alt="product">
															</a>
															<div class="single-product-action">
																<a href="#"><i class="fa fa-external-link"></i></a>
																<a href="#"><i class="fa fa-shopping-cart"></i></a>
															</div>
														</div>
														<div class="single-product-content">
															<div class="product-content-left">
																<h2><a href="#">EXCLUSIVE STYLE</a></h2>
																<p>Jacket’s</p>
															</div>
															<div class="product-content-right">
																<h3>$27.00</h3>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-4">
													<div class="single-product">
														<div class="single-product-img">
															<a href="#">
																<img class="primary-img" src="img/product/single-product-2.jpg" alt="product">
																<img class="secondary-img" src="img/product/women-2.jpg" alt="product">
															</a>
															<div class="single-product-action">
																<a href="#"><i class="fa fa-external-link"></i></a>
																<a href="#"><i class="fa fa-shopping-cart"></i></a>
															</div>
														</div>
														<div class="single-product-content">
															<div class="product-content-left">
																<h2><a href="#">EXCLUSIVE STYLE</a></h2>
																<p>Jacket’s</p>
															</div>
															<div class="product-content-right">
																<h3>$27.00</h3>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-4">
													<div class="single-product">
														<div class="single-product-img">
															<a href="#">
																<img class="primary-img" src="img/product/single-product-3.jpg" alt="product">
																<img class="secondary-img" src="img/product/men-2.jpg" alt="product">
															</a>
															<div class="single-product-action">
																<a href="#"><i class="fa fa-external-link"></i></a>
																<a href="#"><i class="fa fa-shopping-cart"></i></a>
															</div>
														</div>
														<div class="single-product-content">
															<div class="product-content-left">
																<h2><a href="#">EXCLUSIVE STYLE</a></h2>
																<p>Jacket’s</p>
															</div>
															<div class="product-content-right">
																<h3>$27.00</h3>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer AREA -->
		<div class="footer-area">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="footer-info-card">
								<div class="footer-logo">
									<a href="index.html"><img src="img/footer-logo.png" alt="logo"></a>
								</div>
								<p>Lorem ipsum dolor sit amet, coetuer adipiscing elit. Aenean comodo liula eget dolor. Aenean massa. Cum sociis natoque penatibus.</p>
								<ul class="list-inline">
									<li><a href="#"><img src="img/visa-card/visa-card-1.png" alt="card" class="img-responsive"></a></li>
									<li><a href="#"><img src="img/visa-card/visa-card-2.png" alt="card" class="img-responsive"></a></li>
									<li><a href="#"><img src="img/visa-card/visa-card-3.png" alt="card" class="img-responsive"></a></li>
									<li><a href="#"><img src="img/visa-card/visa-card-4.png" alt="card" class="img-responsive"></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="footer-menu-area">
								<h2 class="footer-heading">MY ACCOUNT</h2>
								<div class="footer-menu">
									<ul>
										<li><a href="#"><i class="fa fa-angle-right"></i>My Account</a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i>About Us</a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i>Contact</a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i>Affiliates</a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i>Meet The Maker</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 hidden-sm hidden-xs">
							<div class="footer-menu-area">
								<h2 class="footer-heading">Opening time</h2>
								<div class="footer-menu opening-time">
									<ul>
										<li><i class="fa fa-angle-right"></i>Satarday<span>7.00 AM - 7.00 PM</span></li>
										<li><i class="fa fa-angle-right"></i>Sunday<span>7.00 AM - 7.00 PM</span></li>
										<li><i class="fa fa-angle-right"></i>Monday<span>7.00 AM - 7.00 PM</span></li>
										<li><i class="fa fa-angle-right"></i>Tuesday<span>7.00 AM - 7.00 PM</span></li>
										<li><i class="fa fa-angle-right"></i>Thusday<span>7.00 AM - 7.00 PM</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="contact-info-area">
								<h2 class="footer-heading">Contact Us</h2>
								<div class="contact-info">
									<div class="contanct-details">
										<div class="info-icon">
											<i class="fa fa-phone"></i>
										</div>
										<div class="info-content">
											<p>+1 (00) 86 868 868 666</p>
											<p>+1 (00) 42 868 666 888</p>
										</div>
									</div>
									<div class="contanct-details">
										<div class="info-icon">
											<i class="fa fa-envelope-o"></i>
										</div>
										<div class="info-content">
											<p>admin@bootexperts.com</p>
											<p>info@bootexperts.com</p>
										</div>
									</div>
									<div class="contanct-details">
										<div class="info-icon">
											<i class="fa fa-map-marker"></i>
										</div>
										<div class="info-content">
											<p>68 Dohava Stress, Lorem isput Spust, New York- US</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="copyright">
								Copyrignt@2015/<a href="http://bootexperts.com/" target="_blank">BootExperts</a>/ ALL RIGHTS RESERVED
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="footer-social-icon">
								<ul class="list-inline">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
									<li><a href="#"><i class="fa fa-vimeo"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- JS -->
        
 		<!-- jquery-1.11.3.min js
		============================================ -->         
        <script src="js/vendor/jquery-1.11.3.min.js"></script>
        
 		<!-- bootstrap js
		============================================ -->         
        <script src="js/bootstrap.min.js"></script>
		
		<!-- nivo slider js
		============================================ --> 
		<script src="js/jquery.nivo.slider.pack.js"></script>
        
 		<!-- Mean Menu js
		============================================ -->         
        <script src="js/jquery.meanmenu.min.js"></script>
        
   		<!-- owl.carousel.min js
		============================================ -->       
        <script src="js/owl.carousel.min.js"></script>
		
		<!-- jquery price slider js
		============================================ --> 		
		<script src="js/jquery-price-slider.js"></script>
		
		<!-- wow.js
		============================================ -->
        <script src="js/wow.js"></script>		
		<script>
			new WOW().init();
		</script>
        
   		<!-- plugins js
		============================================ -->         
        <script src="js/plugins.js"></script>
		
   		<!-- main js
		============================================ -->           
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/bsale-preview/b-sale/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Feb 2020 05:30:29 GMT -->
</html>
