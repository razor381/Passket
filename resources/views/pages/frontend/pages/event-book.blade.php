@extends('pages.frontend.layouts.master2')

@section('content') 






<!-- breadcrumb-section - start
================================================== -->
<section id="breadcrumb-section" class="breadcrumb-section clearfix">
	<div class="jarallax" style="background-image: url(assets/images/breadcrumb/10.breadcrumb-bg.jpg);">
		<div class="overlay-black">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-12 col-sm-12">

						<!-- breadcrumb-title - start -->
						<div class="breadcrumb-title text-center mb-50">
							<span class="sub-title"></span>
							<h2 class="big-title"> <strong></strong></h2>
						</div>
						<!-- breadcrumb-title - end -->

						<!-- breadcrumb-list - start -->
						<div class="breadcrumb-title text-center mb-50">
							<h2 class="big-title">Passket</h2>
						</div>
						<div class="breadcrumb-list">
							<ul>
								<li class="breadcrumb-item"><a href="index-1.html" class="breadcrumb-link">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">booking</li>
							</ul>
						</div>
						<!-- breadcrumb-list - end -->

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- breadcrumb-section - end
================================================== -->




<!-- booking-timeout-section - start
================================================== -->
<section id="booking-timeout-section" class="booking-timeout-section clearfix" style="background-image: url(images/special-offer-bg.png);">
	<div class="container">
		<div class="row">

			<!-- leftside-wrapper - start -->
			<div class="col-lg-7 col-md-12 col-sm-12">
				<div class="leftside-wrapper">
					<h3 class="white-color">Please complete registration <strong class="white-color">within 12:00 Minutes.</strong></h3>
				<!-- 	<p class="m-0">After 12:00 hours, the reservation we’re holding will be released to others.</p> -->
				</div>
			</div>
			<!-- leftside-wrapper - end -->

			<!-- rightside-wrapper - start -->
			<div class="col-lg-5 col-md-12 col-sm-12">
				<div class="rightside-wrapper">

					<div class="clock-wrapper">
						<ul class="countdown-list" data-countdown="2019/01/01"></ul>
					</div>
					
				</div>
			</div>
			<!-- rightside-wrapper - end -->

		</div>
	</div>
</section>
<!-- booking-timeout-section - end
================================================== -->



<!-- booking-section - start
================================================== -->
<section id="booking-section" class="booking-section bg-gray-light sec-ptb-100 clearfix">
	<div class="container">
		<div class="row">

			<!-- booking-content-wrapper - start -->
			<div class="col-lg-8 col-md-12 col-sm-12">
				<div class="booking-content-wrapper">

					<!-- order-summary - start -->
					<div class="order-summary mb-50">
						<!-- section-title - start -->
						<div class="section-title mb-30">
							<h2 class="big-title">order <strong>summary</strong></h2>
						</div>
						<!-- section-title - end -->
						<div class="order-summary-table table-responsive">

							<table class="table text-center">
								<thead>
									<tr>
										<th scope="col">ticket type</th>
										<th scope="col">price</th>
										<th scope="col">fee</th>
										<th scope="col">quantity</th>
										<th scope="col">subtotal</th>
									</tr>
								</thead>
								<tbody>
									<tr class="bg-gray-light">
										<th scope="row">Passket Package 1</th>
										<td>$120.00</td>
										<td>$5.00</td>
										<td><input type="text" value="5"></td>
										<td>$675.00</td>
									</tr>
									<tr>
										<th scope="row">Passket Package 2</th>
										<td>$120.00</td>
										<td>$5.00</td>
										<td><input type="text" value="5"></td>
										<td>$675.00</td>
									</tr>
									<tr class="tfooter">
										<th colspan="4" class="text-left">order total</th>
										<td>$2,575.00</td>
									</tr>
								</tbody>
							</table>

						</div>
					</div>
					<!-- order-summary - end -->



					<!-- reg-info - start -->
					<div class="reg-info mb-50">

						<!-- section-title - start -->
						<div class="section-title mb-30">
							<h2 class="big-title">registration <strong>information</strong></h2>
						</div>
						<!-- section-title - end -->

						<!-- row - start -->
						<div class="row">

							<!-- ticket-buying-form - start -->
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="ticket-buying-form form-wrapper">
									<h3 class="form-title">ticket buyer</h3>

									<form method="post" action="{{url('/ticket-booking')}}">
										@csrf
										<div class="form-item">
											<input type="text" id="name" name="name" placeholder="Name">
										</div>
										<div class="form-item">
											<input type="text" id="address" name="address" placeholder="Address">
										</div>
										<div class="form-item">
											<input type="email" id="email" name="email" placeholder="Email Address">
										</div>
										<div class="form-item">
											<input type="number" id="mobile" name="mobile" placeholder="Mobile number">
										</div>

								</div>
							</div>
							<!-- ticket-buying-form - end -->

							<!-- payment-form - start -->
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="payment-form form-wrapper">
									<h3 class="form-title">ticket details</h3>

									
										<div class="form-item">
											<select name="ticket_category" class="cradit-card-select">
												<option selected="">Select Ticket Category</option>
												<option>Bronze</option>
												<option>Silver</option>
												<option>Gold</option>
												<option>Platinum</option>
												<option>VIP</option>
											</select>
										</div>
										<div class="form-item">
											<input type="text" id="ticket_number" name="ticket_number" placeholder="Number of tickets">
										</div>

										<!-- <div class="expired-date-form">
											<h3 class="title-text">expired date</h3>
											<ul>

												<li>
													<div class="form-item">
														<select class="month-select">
															<option selected="">Month</option>
															<option>option 1</option>
															<option>option 2</option>
															<option>option 3</option>
															<option>option 4</option>
															<option>option 5</option>
														</select>
													</div>
												</li>

												<li>
													<div class="form-item">
														<select class="year-select">
															<option selected="">Year</option>
															<option>option 1</option>
															<option>option 2</option>
															<option>option 3</option>
															<option>option 4</option>
															<option>option 5</option>
														</select>
													</div>
												</li>

												<li>
													<div class="form-item">
														<input type="text" placeholder="CSC">
													</div>
												</li>

											</ul>
										</div> -->
										<div class="form-item">
											<span></span>
										</div>
										<div class="text-center">
											<button type="submit" class="custom-btn">
												book now
											</button>
										</div>

									</form>
								</div>
							</div>
							<!-- payment-form - end -->

						</div>
						<!-- row - end -->

					</div>
					<!-- reg-info - end -->



					<!-- reg-info - start -->
					<!-- <div class="reg-info mb-50"> -->

						<!-- section-title - start -->
						<!-- <div class="section-title mb-30">
							<h2 class="big-title">Questions <strong>Survey</strong></h2>
						</div> -->
						<!-- section-title - end -->

						<!-- row - start -->
						<!-- <div class="row"> -->

							<!-- ticket-buying-form - start -->
							<!-- <div class="col-lg-12 col-md-12 col-sm-12">
								<div class="ticket-buying-form form-wrapper">

									<form action="#">
										<p class="big-title">How about some random question?</p>
										<div class="form-item">
											<input type="text" placeholder="Answer">
										</div>

										<p class="big-title">How about some random question?</p>
										<div class="form-item">
											<input type="text" placeholder="Answer">
										</div>

										<p class="big-title">How about some random question?</p>
										<div class="form-item">
											<input type="text" placeholder="Answer">
										</div>
									</form>

								</div>
							</div> -->
							<!-- ticket-buying-form - end -->

							

						<!-- </div> -->
						<!-- row - end -->

					<!-- </div> -->
					<!-- reg-info - end -->


					<!-- billing-info - start -->
					<!-- <div class="billing-info mb-50"> -->

						<!-- section-title - start -->
						<!-- <div class="section-title mb-30">
							<h2 class="big-title">billing <strong>information</strong></h2>
						</div> -->
						<!-- section-title - end -->

						<!-- billing-form - start -->
						<!-- <div class="billing-form form-wrapper">
							<form action="#">

								<div class="form-item">
									<select class="country-select">
										<option selected="">Select Country</option>
										<option>option 1</option>
										<option>option 2</option>
										<option>option 3</option>
										<option>option 4</option>
										<option>option 5</option>
									</select>
								</div>
								<div class="form-item">
									<input type="text" placeholder="Address">
								</div>
								<div class="form-item">
									<input type="text" placeholder="Altranative Address">
								</div> -->

								<!-- form-item-group - start -->
								<!-- <div class="form-item-group mb-50">
									<ul>

										<li>
											<div class="form-item">
												<input type="text" placeholder="City">
											</div>
										</li>
										<li>
											<div class="form-item">
												<select class="country-select">
													<option selected="">States</option>
													<option>option 1</option>
													<option>option 2</option>
													<option>option 3</option>
													<option>option 4</option>
													<option>option 5</option>
												</select>
											</div>
										</li>
										<li>
											<div class="form-item">
												<input type="text" placeholder="Zip Code">
											</div>
										</li>
										
									</ul>
								</div> -->
								<!-- form-item-group - end -->

								<!-- <div class="text-center">
									<button type="submit" class="custom-btn">
										pay now
									</button>
								</div>

							</form>
						</div> -->
						<!-- billing-form - end -->

					<!-- </div> -->
					<!-- billing-info - end -->
					
				</div>
			</div>
			<!-- booking-content-wrapper - end -->

			<!-- sidebar-section - start -->
			<div class="col-lg-4 col-md-12 col-sm-12">
				<div class="sidebar-section">

					<!-- section-title - start -->
					<div class="section-title mb-30">
						<h2 class="big-title">ticket <strong>info</strong></h2>
					</div>
					<!-- section-title - end -->

					<!-- location-wrapper - start -->
					<div class="location-wrapper bg-white">

						<div class="title-wrapper">
							<small class="up-arrow-icon">
								<i class="fas fa-chevron-circle-up"></i>
							</small>
							<span class="icon">
								<i class="fas fa-map-marker-alt"></i>
							</span>
							<div class="title-content">
								<small>event location</small>
								<h3>vanila hotel</h3>
							</div>
						</div>
						<div class="location-info-list ul-li-block clearfix">
							<span class="area-name">Istanbul Turkey</span>
							<ul>
								<li><i class="fas fa-arrow-circle-right"></i> Bayezid II Mosque and Beyazid Square</li>
								<li><i class="fas fa-arrow-circle-right"></i> Istanbul, IS 240012</li>
								<li><i class="fas fa-arrow-circle-right"></i> Thursday, December 26, 2018</li>
								<li><i class="fas fa-arrow-circle-right"></i> From <strong>15.00 PM</strong> to <strong>20.00 PM</strong> (EST)</li>
							</ul>
						</div>
						<div class="button">
							<a href="#!" class="custom-btn">ADD TO MY CALENDAR</a>
						</div>
						<div class="title-wrapper">
							<small class="up-arrow-icon">
								<i class="fas fa-chevron-circle-up"></i>
							</small>
							<span class="icon">
								<i class="fas fa-link"></i>
							</span>
							<div class="title-content">
								<small>contact information</small>
								<h3>Passket staff</h3>
							</div>
						</div>
						<div class="contact-links ul-li-block clearfix">
							<p class="black-color mb-30">
								Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant. Proin gravida nibh vel velit auctor aliquet. sollicitudin, lorem quis more...
							</p>
							<ul>
								<li>
									<a href="#!" target="_blank">
										<span class="icon">
											<i class="fab fa-facebook-f"></i>
										</span>
										facebook.com/Passket
									</a>
								</li>
								<li>
									<a href="#!" target="_blank">
										<span class="icon">
											<i class="fab fa-twitter"></i>
										</span>
										twitter.com@Passket
									</a>
								</li>
								<li>
									<a href="#!" target="_blank">
										<span class="icon">
											<i class="fas fa-link"></i>
										</span>
										http://www.Passket.com
									</a>
								</li>
							</ul>
							<a href="#!" class="custom-btn">CONTACT US NOW</a>
						</div>
					</div>
					<!-- location-wrapper - end -->
					
				</div>
			</div>
			<!-- sidebar-section - end -->
			
		</div>
	</div>
</section>
<!-- booking-section - end
================================================== -->




@endsection