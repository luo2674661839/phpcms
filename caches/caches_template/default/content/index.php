<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!-- Header End -->


<section class="slider-pro slider" id="slider">
	
	<div class="sp-slides">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=d64d49fa3a4bee5837471e9a340f50de&sql=select+%2A+from+SowingMap\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from SowingMap LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
		<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
		<!-- Slides -->
		<div class="sp-slide main-slides">
			<div class="img-overlay"></div>

			<img class="sp-image" src="<?php echo $val['image'];?>" alt="Slider 1"/>

			<h1 class="sp-layer slider-text-big"
			data-position="center" data-show-transition="left" data-hide-transition="right" data-show-delay="1500" data-hide-delay="200">
			<span class="highlight-texts"><?php echo $val['text'];?></span>
			</h1>

			<p class="sp-layer"
			data-position="center" data-vertical="15%" data-show-delay="2000" data-hide-delay="200" data-show-transition="left" data-hide-transition="right">
				<?php echo $val['tag'];?>
			</p>
		</div>
		<!-- Slides End -->
	 <?php $n++;}unset($n); ?>
	 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	</div>
</section>
<!-- Main Slider End -->

<div class="tlinks">Collect from <a href="http://www.cssmoban.com/" >网页模板</a></div>
<section id="about" class="about-sec section-wrapper description">
	<div class="container">
		<div class="row">
			<!-- Section Header -->
			<div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
				<h2><span class="highlight-text">关于</span></h2>
			   
				<p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, nam corporis quas, saepe minima error aperiam dolorum aliquam, quis deserunt eos eius quisquam odio itaque.</p>
			</div>
			<!-- Section Header End -->

			<div class="col-md-6 col-sm-6 col-xs-12 custom-sec-img wow fadeInDown">
				<img src="statics/home/images/features.jpg" alt="Custom Image">
			</div>

			<div class="col-md-6 col-sm-6 col-xs-12 customized-text wow fadeInDown black-ed">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa sit, numquam amet voluptatibus obcaecati ea maiores totam nostrum, ad iure rerum quas harum ipsum.  lobcaecati ea maiores totam nostrum, ad iure rerum quas harum ipsum. Rem ea ducimus quos quae quo.</p>
				<div class="row"> 
					<div class="col-md-11">
						<strong>Bootstrap</strong>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iusto, natus est ducimus saepe laborum</p>
					</div>
				</div>
				<div class="row"> 
					<div class="col-md-11">
						<strong>Responisve Theme</strong>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iusto, natus est ducimus saepe laborum Lorem ipsum dolor sit amet.</p>
					</div>
				</div>
				<div class="row"> 
					<div class="col-md-11">
						<strong>HTML5/CSS3</strong>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iusto, natus est ducimus saepe laborum Lorem ipsum dolor sit amet.</p>
					</div>
				</div>
			</div>
		</div> 
	</div>
</section> 

<section id="services" class="section-wrapper">
	<div class="container">
		<div class="row">

			<!-- Section Header -->
			<div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
				<h2><span class="highlight-text">服务</span></h2>
			   
				<p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, nam corporis quas, saepe minima error aperiam dolorum aliquam, quis deserunt eos eius quisquam odio itaque.</p>
			</div>
			<!-- Section Header End -->

			<div class="our-services">
		 
	
	 <div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".2s">
					<div class="service-box">
						<div class="icon"> <h3>早餐</h3>
						</div> 
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero praesentium quam nulla.</p>
						<img src="statics/home/images/breakfast.jpg" alt="Custom Image">
						</div> 
</div>
					<div class="col-md-4 col-sm-4 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".2s">
					<div class="service-box">
						<div class="icon"> <h3>午餐 </h3>
						</div>
						
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero praesentium quam nulla.</p>
						<img src="statics/home/images/lunch.jpg" alt="Custom Image">
					</div>
</div>
					<div class="col-md-4 col-sm-4 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".2s">
					<div class="service-box">
						<div class="icon"> <h3>晚餐</h3>
						</div>
						
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero praesentium quam nulla.</p>
						<img src="statics/home/images/dinner.jpg" alt="Custom Image">
					</div>
</div>
				 
				</div> 
				<div class="row">
				 
					<div class="col-md-4 col-sm-4 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".1s">
					<div class="service-box">
						<div class="icon">
							<i class="icon_star-half_alt"></i><h3>巴菲特</h3>
						</div>
						
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero praesentium quam nulla.</p>
					</div>
</div>
					<div class="col-md-4 col-sm-4 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".1s">
					<div class="service-box">
						<div class="icon">
							<i class="icon_music"></i><h3>派对</h3>
						</div>
						
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero praesentium quam nulla.</p>
					</div>
</div>
					<div class="col-md-4 col-sm-4 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".1s">
					<div class="service-box">
						<div class="icon">
							<i class="icon_cog"></i><h3>客房</h3>
						</div>
						
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero praesentium quam nulla.</p>
					</div>
</div>
				</div>
			</div> 

		</div>
	</div>
</section> 

<section class="menus style3" id="menuCard">
			<div class="container"> 
				<div class="row"> 

	<!-- Section Header -->
			<div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
				<h2><span class="highlight-text">菜单卡</span></h2>
			   
				<p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, nam corporis quas, saepe minima error aperiam dolorum aliquam, quis deserunt eos eius quisquam odio itaque.</p>
			</div>
			<!-- Section Header End -->
			
					<div class="menus-container"> 
							<!-- menu --> 
								<div class="menu row">
									<div class="col-md-6 wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
										<div class="menu-column">
											<div class="food">
												<div class="food-desc">
													<h6 class="food-name">咖喱鸡</h6>
													<div class="dots"></div>
													<div class="food-price">
														<span>5.00</span>
													</div><!-- /food-price -->
												</div><!-- /food-desc -->
												<div class="food-details">
													<span>用“黄油”</span>
												</div><!-- /food-details -->
											</div><!-- /food -->
											<div class="food">
												<div class="food-desc">
													<h6 class="food-name">芒果奶昔</h6>
													<div class="dots"></div>
													<div class="food-price">
														<span>16.00</span>
													</div><!-- /food-price -->
												</div><!-- /food-desc -->
												<div class="food-details">
													<span>添加咖喱酱</span>
												</div><!-- /food-details -->
											</div><!-- /food -->
											<div class="food">
												<div class="food-desc">
													<h6 class="food-name">羊肉炒饭</h6>
													<div class="dots"></div>
													<div class="food-price">
														<span>22.00</span>
													</div><!-- /food-price -->
												</div><!-- /food-desc -->
												<div class="food-details">
													<span>纯肉</span>
												</div><!-- /food-details -->
											</div><!-- /food -->
											<div class="food">
												<div class="food-desc">
													<h6 class="food-name">蔬菜拌蛋</h6>
													<div class="dots"></div>
													<div class="food-price">
														<span>22.00</span>
													</div><!-- /food-price -->
												</div><!-- /food-desc -->
												<div class="food-details">
													<span>混合蔬菜</span>
												</div><!-- /food-details -->
											</div><!-- /food -->
											<div class="food">
												<div class="food-desc">
													<h6 class="food-name">Chicken Currey </h6>
													<div class="dots"></div>
													<div class="food-price">
														<span>15.00</span>
													</div><!-- /food-price -->
												</div><!-- /food-desc -->
												<div class="food-details">鸡肉</div><!-- /food-details -->
											</div><!-- /food -->
										</div><!-- /menu-column -->
									</div><!-- /col-md-6 -->
									<div class="col-md-6 wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
										<div class="menu-column">
											<div class="food">
												<div class="food-desc">
													<h6 class="food-name">Pure Veg Salad</h6>
													<div class="dots"></div>
													<div class="food-price">
														<span>5.00</span>
													</div><!-- /food-price -->
												</div><!-- /food-desc -->
												<div class="food-details">
													<span>with all veg</span>
												</div><!-- /food-details -->
											</div><!-- /food -->
											<div class="food">
												<div class="food-desc">
													<h6 class="food-name">Veg Fry Rice</h6>
													<div class="dots"></div>
													<div class="food-price">
														<span>16.00</span>
													</div><!-- /food-price -->
												</div><!-- /food-desc -->
												<div class="food-details">
													<span>with best fry</span>
												</div><!-- /food-details -->
											</div><!-- /food -->
											<div class="food">
												<div class="food-desc">
													<h6 class="food-name">Chines Noodles</h6>
													<div class="dots"></div>
													<div class="food-price">
														<span>22.00</span>
													</div><!-- /food-price -->
												</div><!-- /food-desc -->
												<div class="food-details">
													<span>with all spices</span>
												</div><!-- /food-details -->
											</div><!-- /food -->
											<div class="food">
												<div class="food-desc">
													<h6 class="food-name">Chicken Manchuriah</h6>
													<div class="dots"></div>
													<div class="food-price">
														<span>22.00</span>
													</div><!-- /food-price -->
												</div><!-- /food-desc -->
												<div class="food-details">
													<span>with hot and wet</span>
												</div><!-- /food-details -->
											</div><!-- /food -->
											<div class="food">
												<div class="food-desc">
													<h6 class="food-name">Veg Fry Rice </h6>
													<div class="dots"></div>
													<div class="food-price">
														<span>15.00</span>
													</div><!-- /food-price -->
												</div><!-- /food-desc -->
												<div class="food-details">
													<span>with egg and chicken </span>
												</div><!-- /food-details -->
											</div><!-- /food -->
										</div><!-- /menu-column -->
									</div><!-- /col-md-6 -->
								</div><!-- /row -->
							 </div><!-- /menu-carousel -->
					</div><!-- /menus-container --> 
			</div><!-- /container -->
		</section>


<section id="portfolio" class="bgSection portfolio-section">
	<div class="container">
		<div class="row">

			<!-- Section Header -->
			<div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
				<h2><span class="highlight-text">画廊</span></h2>
			   
				<p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, nam corporis quas, saepe minima error aperiam dolorum aliquam, quis deserunt eos eius quisquam odio itaque.</p>
			</div>
			<!-- Section Header End -->

		</div>
	</div>

	<!-- Works -->
	<div class="portfolio-works wow fadeIn" data-wow-duration="2s">

		<!-- Filter Button Start -->
		<div id="portfolio-filter" class="portfolio-filter-btn-group">
			<ul>
				<li>
					<a href="#" class="selected" data-filter="*">所有</a> 
					<a href="#" data-filter=".web">中国</a> 
					<a href="#" data-filter=".seo">大陆</a> 
					<a href="#" data-filter=".works">亚洲</a> 
					<a href="#" data-filter=".brands">
欧洲</a> 
				</li>
			</ul>
		</div>
		<!-- Filter Button End -->

		<div class="portfolio-items">

			<!-- Portfolio Items -->
			<div class="item portfolio-item web seo">

				<img src="statics/home/images/img-portfolio/portfolio1.jpg" alt="">
				<div class="portfolio-details-wrapper">
					<div class="portfolio-details">
						<div class="portfolio-meta-btn">
							<ul class="work-meta">
								<li class="lighbox"><a href="images/img-portfolio/portfolio1.jpg" class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
			<!-- Portfolio Items End -->

			<!-- Portfolio Items -->
			<div class="item portfolio-item works seo">

				<img src="statics/home/images/img-portfolio/portfolio2.jpg" alt="">
				<div class="portfolio-details-wrapper">
					<div class="portfolio-details">
						<div class="portfolio-meta-btn">
							<ul class="work-meta">
								<li class="lighbox"><a href="images/img-portfolio/portfolio2.jpg" class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
			<!-- Portfolio Items End -->

			<!-- Portfolio Items -->
			<div class="item portfolio-item web">

				<img src="statics/home/images/img-portfolio/portfolio3.jpg" alt="">
				<div class="portfolio-details-wrapper">
					<div class="portfolio-details">
						<div class="portfolio-meta-btn">
							<ul class="work-meta">
								<li class="lighbox"><a href="images/img-portfolio/portfolio3.jpg" class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
			<!-- Portfolio Items End -->

			<!-- Portfolio Items -->
			<div class="item portfolio-item web works brands">

				<img src="statics/home/images/img-portfolio/portfolio4.jpg" alt="">
				<div class="portfolio-details-wrapper">
					<div class="portfolio-details">
						<div class="portfolio-meta-btn">
							<ul class="work-meta">
								<li class="lighbox"><a href="images/img-portfolio/portfolio4.jpg" class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- Portfolio Items -->

			<!-- Portfolio Items -->
			<div class="item portfolio-item web brands">

			   <img src="statics/home/images/img-portfolio/portfolio5.jpg" alt="">
				<div class="portfolio-details-wrapper">
					<div class="portfolio-details">
						<div class="portfolio-meta-btn">
							<ul class="work-meta">
								<li class="lighbox"><a href="images/img-portfolio/portfolio5.jpg" class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
			<!-- Portfolio Items End -->

			<!-- Portfolio Items -->
			<div class="item portfolio-item works seo">

				<img src="statics/home/images/img-portfolio/portfolio6.jpg" alt="">
				<div class="portfolio-details-wrapper">
					<div class="portfolio-details">
						<div class="portfolio-meta-btn">
							<ul class="work-meta">
								<li class="lighbox"><a href="images/img-portfolio/portfolio6.jpg" class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
			<!-- Portfolio Items End -->

			<div class="item portfolio-item brands seo">

				<img src="statics/home/images/img-portfolio/portfolio1.jpg" alt="">
				<div class="portfolio-details-wrapper">
					<div class="portfolio-details">
						<div class="portfolio-meta-btn">
							<ul class="work-meta">
								<li class="lighbox"><a href="images/img-portfolio/portfolio7.jpg" class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
			<!-- Portfolio Items End -->

			<!-- Portfolio Items -->
			<div class="item portfolio-item web seo works">

				<img src="statics/home/images/img-portfolio/portfolio2.jpg" alt="">
				<div class="portfolio-details-wrapper">
					<div class="portfolio-details">
						<div class="portfolio-meta-btn">
							<ul class="work-meta">
								<li class="lighbox"><a href="images/img-portfolio/portfolio8.jpg" class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
			<!-- Portfolio Items End -->

			

		</div>
	</div>
	<!-- Works End -->


</section>
<!-- Portfolio Section End -->


<section id="info" class="info-section">
<div class="container text-xs-center">
	 <!-- Section Header -->
			<div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
				<h2><span class="highlight-text">统计</span></h2>
			   
				<p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, nam corporis quas, saepe minima error aperiam dolorum aliquam, quis deserunt eos eius quisquam odio itaque.</p>
			</div>
			<!-- Section Header End -->
	<div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
		<div class="col-md-3 col-sm-6 col-xs-12 text-xs-center">
			
			<i class="icon_mic_alt wow pulse" style="visibility: visible; animation-name: pulse;"></i>
			<h4>利润</h4>
			<h1 class="text-primary">100,000</h1>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12 text-xs-center">
			
			<i class="icon_gift_alt wow pulse" style="visibility: visible; animation-name: pulse;"></i>
			<h4>已完成</h4>
			<h1 class="text-primary">34201</h1>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12 text-xs-center">
		  
			<i class="icon_mobile wow pulse" style="visibility: visible; animation-name: pulse;"></i>
<h4>菜品</h4>               
		   <h1 class="text-primary">152</h1>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12 text-xs-center">
		   
			<i class="icon_lightbulb_alt wow pulse" style="visibility: visible; animation-name: pulse;"></i>
<h4>顾客</h4>               
		   <h1 class="text-primary">56500</h1>
		</div>
	</div> 
</div>
</section>

<section id="team" class="bgSection teams-section"> 
<div class="parallax-overlay"></div>
	<div class="teams-wrapper wow bounceIn">
		<div class="container">
			<div class="row">

				<!-- Section Header -->
				<div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
					<h2><span class="highlight-text-inverted">厨师</span></h2>
				   
					<p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, nam corporis quas, saepe minima error aperiam dolorum aliquam, quis deserunt eos eius quisquam odio itaque.</p>
				</div>

				<!-- teams Slider -->
				<div id="teams" class="owl-carousel teams">

					<!-- Slides -->
					<div class="teams-slides col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">
						<img src="statics/home/images/img-teams/team1.jpg" alt="">
						<p class="client-info">Chris Willam</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisic</p>
						
					</div>
					<!-- Slides End -->

					<!-- Slides -->
					<div class="teams-slides col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">
						<img src="statics/home/images/img-teams/team2.jpg" alt="">
						<p class="client-info">Randy Dode</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisic</p>
						
					</div>
					<!-- Slides End -->

					<!-- Slides -->
					<div class="teams-slides col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">
						<img src="statics/home/images/img-teams/team3.jpg" alt="">
						 <p class="client-info">Michel Kimte</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisic</p>
					   
					</div>
					<!-- Slides End -->

				</div> 
			</div>
		</div>
	</div>
</section> 


<!-- Clients Section -->
<section id="clients" class="clients-section">
  <!-- Container Ends -->
  <div class="container">
	<div class="row">
	<!-- Section Header -->
		  <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
				<h2><span class="highlight-text">客户的反馈意见</span></h2> 
				</div>
			<!-- Section Header End --> 
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="testimonials">
			<div class="active item">
			  <blockquote><p>Denim you probably haven't heard of. Lorem ipsum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met.</p></blockquote>
			  <div class="carousel-info">
				<img alt="" src="statics/home/images/img1-small.jpg" class="pull-left">
				<div class="pull-left">
				  <span class="testimonials-name">Lina Mars</span>
				  <span class="testimonials-post">Commercial Director</span>
				</div>
			  </div>
			</div>
		</div>
	</div>
</div> 
	 </div>
  </div><!-- Container Ends -->
</section>
<!-- Client Section End -->  

 <section id="contact" class="section-wrapper contact-section" data-stellar-background-ratio="0.5">
<div class="parallax-overlay"></div>
	<div class="container">
		<div class="row">

			<!-- Section Header -->
		  <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
				<h2><span class="highlight-text">联系我们
</span></h2>
			   
				<p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">We love feedback. Fill out the form below and we'll get back to you as soon as possible. in minus distinctio dolores ipsam.</p>
			</div> 
			<!-- Section Header End -->

			<div class="contact-details">


				<!-- Contact Form -->
				<div class="contact-form wow bounceInRight"> 
			
	<!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
	<form name="sentMessage"  id="contactForm"  novalidate>  
	 <div class="col-md-6">
	<input type="text" class="form-control" 
	placeholder="Full Name" id="name" required
	data-validation-required-message="Please enter your name" />
	<p class="help-block"></p>
	</div> 	
	 <div class="col-md-6">
	<input type="email" class="form-control" placeholder="Email" 
	id="email" required
	data-validation-required-message="Please enter your email" />
	</div> 	

	<div class="col-md-12">
	<textarea rows="10" cols="100" class="form-control" 
	placeholder="Message" id="message" required
	data-validation-required-message="Please enter your message" minlength="5" 
	data-validation-minlength-message="Min 5 characters" 
	maxlength="999" style="resize:none"></textarea>
	</div> 	
	 
	<div class="col-md-8 col-md-offset-2"><br><div id="success"> </div><button type="submit" class="btn btn-primary">Submit Message</button></div> 
	</form>
  </div>

		</div>
	</div>
</section>




<!-- Contact Section End -->
<?php include template("content","footer"); ?>
<!-- Footer End -->

<script src="statics/home/js/jquery-1.11.3.min.js"></script>
<script src="statics/home/js/bootstrap.min.js"></script>
<script src="statics/home/js/modernizr.min.js"></script>
<script src="statics/home/js/jquery.easing.1.3.js"></script>
<script src="statics/home/js/jquery.scrollUp.min.js"></script>
<script src="statics/home/js/jquery.easypiechart.js"></script>
<script src="statics/home/js/isotope.pkgd.min.js"></script>
<script src="statics/home/js/jquery.fitvids.js"></script>
<script src="statics/home/js/jquery.stellar.min.js"></script>
<script src="statics/home/js/jquery.waypoints.min.js"></script>
<script src="statics/home/js/wow.min.js"></script>
<script src="statics/home/js/jquery.nav.js"></script>
<script src="statics/home/js/imagesloaded.pkgd.min.js"></script>
<script src="statics/home/js/smooth-scroll.min.js"></script>
<script src="statics/home/js/jquery.magnific-popup.min.js"></script>
<script src="statics/home/js/jquery.sliderPro.min.js"></script>
<script src="statics/home/js/owl.carousel.min.js"></script>
<script src="statics/home/contact/jqBootstrapValidation.js"></script>
<script src="statics/home/contact/contact_me.js"></script>
<script src="statics/home/js/custom.js"></script>

</body>
</html>
