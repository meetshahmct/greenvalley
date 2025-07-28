@extends('layouts.master')
@section('content')

    <section class="page-title">
		<div class="color-one"></div>
		<div class="color-two"></div>
		<div class="color-three"></div>
		<div class="color-four"></div>
        <div class="auto-container">
			<h2>About Us</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="/"><i class="flaticon-home"></i> Green Valley Preschool</a></li>
				<li>About Us</li>
			</ul>
        </div>
		<!--Waves Container-->
        <div>
          <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
          viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
          <defs>
          <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
          </defs>
          <g class="parallaxx">
          <use xlink:href="#gentle-wave" x="148" y="0" fill="rgba(255,255,255,0.7" />
          <use xlink:href="#gentle-wave" x="100" y="3" fill="rgba(255,255,255,0.5)" />
          <use xlink:href="#gentle-wave" x="70" y="5" fill="rgba(255,255,255,0.3)" />
          <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
          </g>
          </svg>
        </div>
        <!--Waves end-->
    </section>
    <!-- End Page Title -->
	
	<!-- About One -->
	<section class="about-one style-four">
		<div class="auto-container">
			<div class="about-one_icon" style="background-image:url(assets/images/icons/icon-3.png)"></div>
			<div class="row clearfix">
				
				<!-- Image Column -->
				<div class="about-one_image-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-one_image-outer">
						
						<div class="about-one_image">
							<div class="about-one_color-one"></div>
							<div class="about-one_color-two"></div>
							<img src="{{asset('assets/images/resource/about-us.png')}}" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="about-one_content-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-one_content-outer">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="sec-title_title">About Our Foundation</div>
							<h2 class="sec-title_heading">Who We <span>Are?</span></h2>
							<div class="sec-title_text">Green Valley Preschool is a leading early childhood education centre designed to offer a happy and holistic
								learning space where children are free to explore, express, and grow. We partner with parents to create a
							joyful early learning experience for their little ones.</div>
							<div class="sec-title_text"><strong>Our Vision</strong>To be the most trusted preschool brand that inspires children to become confident, capable, and
							compassionate individuals who are prepared for a bright future.</div>
							<div class="sec-title_text"><strong>Our Mission</strong> To provide a warm, inclusive, and engaging learning environment where children can discover
								their potential through play, interaction, and discovery. We strive to install values, skills, and a love for
							learning in every child.</div>
						</div>

						
						
					</div>
				</div>
				
			</div>
			<div class="row clearfix mt-5">
								
								<!-- Price Block One -->
								<div class="price-block_one col-lg-6 col-md-6 col-sm-12">
									<div class="price-block_one-inner" style="padding-bottom: 79px!important;">
										<div class="price-block_one-title">Our Pedagogical Approach:</div>
										<ul class="price-block_one-list">
											<li><i class="flaticon-check-mark"></i>Inquiry-Based Learning</li>
											<li><i class="flaticon-check-mark"></i>Experiential and Visual Learning</li>					
											<li><i class="flaticon-check-mark"></i>Integrated Play Activities</li>					
											<li><i class="flaticon-check-mark"></i>Emotional and Social Skill Development</li>					
										</ul>
										
									</div>
								</div>
								
								<!-- Price Block One -->
								<div class="price-block_one col-lg-6 col-md-6 col-sm-12">
									<div class="price-block_one-inner">
										<div class="price-block_one-title">Core Values We Uphold:</div>
										<ul class="price-block_one-list">
											<li><i class="flaticon-check-mark"></i>Child-Centricity</li>
											<li><i class="flaticon-check-mark"></i>Innovation</li>					
											<li><i class="flaticon-check-mark"></i>Inclusivity</li>					
											<li><i class="flaticon-check-mark"></i>Transparency</li>					
											<li><i class="flaticon-check-mark"></i>Parental Engagement</li>					
										</ul>
										
									</div>
								</div>
								
		
								
			</div>
		</div>
	</section>
	<!-- End About One -->
	
	@include('footer')
	
	<!-- Search Popup -->
	<div class="search-popup">
		<div class="color-layer"></div>
		<button class="close-search"><span class="flaticon-close"></span></button>
		<form method="post" action="https://demo.themeim.com/html/kidscamp/blog.html">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Here" required="">
				<button class="fa fa-solid fa-magnifying-glass fa-fw" type="submit"></button>
			</div>
		</form>
	</div>
	<!-- End Search Popup -->
	
</div>
<!-- End PageWrapper -->

<div class="progress-wrap">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
	</svg>
</div>
@endsection