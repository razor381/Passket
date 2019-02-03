@extends('pages.frontend.layouts.master')

@section('content')




	

<!-- slide-section - start
	================================================== -->

	<section id="slide-section" class="slide-section clearfix">
		<div id="main-carousel1" class="main-carousel1 owl-carousel owl-theme">

			<div class="item" style="background-image: url(images/slider.jpg);">
				<div class="overlay-black">
					<div class="container">
						<div class="slider-item-content">

							<span class="medium-text">one stop</span>
							<h1 class="big-text">Event Planner</h1>
							<small class="small-text">every event sould be perfect</small>

							<div class="link-groups">
								<a href="#!" class="start-btn">get started!</a>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="item" style="background-image: url(images/tech_slider.jpg);">
				<div class="overlay-black">
					<div class="container">
						<div class="slider-item-content">

							<span class="medium-text">one stop</span>
							<h1 class="big-text">Event Planner</h1>
							<small class="small-text">every event sould be perfect</small>

							<div class="link-groups">
								<a href="about.html" class="about-btn custom-btn">about us</a>
								<a href="#!" class="start-btn">get started!</a>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="item" style="background-image: url(images/sports_slider.jpg);">
				<div class="overlay-black">
					<div class="container">
						<div class="slider-item-content">

							<span class="medium-text">one stop</span>
							<h1 class="big-text">Event Planner</h1>
							<small class="small-text">every event sould be perfect</small>

							<div class="link-groups">
								<a href="about.html" class="about-btn custom-btn">about us</a>
								<a href="#!" class="start-btn">get started!</a>
							</div>

						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
<!-- slide-section - end
	================================================== -->



<!-- absolute-eventmake-section - start
================================================== -->
<div id="absolute-eventmake-section" class="absolute-eventmake-section sec-ptb-100 bg-gray-light clearfix">
	<div class="eventmaking-wrapper">

		<ul class="nav eventmake-tabs">
			<li>
				<a class="active" data-toggle="tab" href="#conference">
					<i class="fas fa-check-square"></i>
					Filter-events
				</a>
			</li>
			<!-- <li>
				<a data-toggle="tab" href="#musical">
					<i class="fas fa-music"></i>
					musical
				</a>
			</li>
			<li>
				<a data-toggle="tab" href="#playground">
					<i class="fas fa-birthday-cake"></i>
					play ground
				</a>
			</li> -->
		</ul>

		<div class="tab-content">
			<div id="conference" class="tab-pane fade in active show">
				<form action="#">
					<ul>

						<li>
							<input type="text" placeholder="Type event name">
						</li>
						<li>
							<select class="country-select">
								<option selected="">select Category</option>
								<option>Tech</option>
								<option>Musical</option>
								<option>Science</option>
								<option>Seminar</option>
								<option>Sports</option>
							</select>
						</li>
						<li>
							<select class="capital-select">
								<option selected="">select Location</option>
								<option>Kathmandu</option>
								<option>Bhaktapur</option>
								<option>Biratnagar</option>
								<option>Pokhara</option>
								<option>Butwal</option>
							</select>
						</li>
						<li>
							<!-- <input type="text" class="date-select" placeholder="Time" name=""> -->
							<select class="date-select">
								<option selected="">select Time</option>
								<option>Today</option>
								<option>Tomorrow</option>
								<option>This Week</option>
								<option>This Month</option>
								<option>next Month</option>
								<option>within 4 months</option>
							</select>
						</li>
						<li>
							<button type="submit" class="custom-btn">search event</button>
						</li>

					</ul>
				</form>
			</div>

			<!-- <div id="musical" class="tab-pane fade">
				<form action="#">
					<ul>

						<li>
							<input type="text" placeholder="Type event name">
						</li>
						<li>
							<select class="country-select">
								<option selected="">select Country</option>
								<option>option 1</option>
								<option>option 2</option>
								<option>option 3</option>
								<option>option 4</option>
								<option>option 5</option>
							</select>
						</li>
						<li>
							<select class="capital-select">
								<option selected="">select capital</option>
								<option>option 1</option>
								<option>option 2</option>
								<option>option 3</option>
								<option>option 4</option>
								<option>option 5</option>
							</select>
						</li>
						<li>
							<select class="date-select">
								<option selected="">select date</option>
								<option>option 1</option>
								<option>option 2</option>
								<option>option 3</option>
								<option>option 4</option>
								<option>option 5</option>
							</select>
						</li>
						<li>
							<button type="submit" class="custom-btn">search event</button>
						</li>

					</ul>
				</form>
			</div> -->
			<!-- <div id="playground" class="tab-pane fade">
				<form action="#">
					<ul>

						<li>
							<input type="text" placeholder="Type event name">
						</li>
						<li>
							<select class="country-select">
								<option selected="">select Category</option>
								<option>option 1</option>
								<option>option 2</option>
								<option>option 3</option>
								<option>option 4</option>
								<option>option 5</option>
							</select>
						</li>
						<li>
							<select class="capital-select">
								<option selected="">select Location</option>
								<option>option 1</option>
								<option>option 2</option>
								<option>option 3</option>
								<option>option 4</option>
								<option>option 5</option>
							</select>
						</li>
						<li>
							<select class="date-select">
								<option selected="">select date</option>
								<option>option 1</option>
								<option>option 2</option>
								<option>option 3</option>
								<option>option 4</option>
								<option>option 5</option>
							</select>
						</li>
						<li>
							<button type="submit" class="custom-btn">search event</button>
						</li>

					</ul>
				</form>
			</div> -->

			<div class="top-event-location">
				<span class="title-text">TOP SEARCH <strong>EVENT LOCATION:</strong></span>
				<ul>

					<li><strong>Locus</strong> IOE, Pulchowk</li>
					<li><strong>LITE</strong> KEC, Dhapakhel</li>
					<li><strong>Sabin Rai</strong> DejaVu, Narayanhiti</li>
					
				</ul>
			</div>
		</div>
		
	</div>
</div>
<!-- absolute-eventmake-section - end
================================================== -->



<!-- event-section - start
================================================== -->
<section id="event-section" class="event-section sec-ptb-100 bg-gray-light clearfix">
	<div class="container">

		<div class="mb-50">
			<div class="row">

				<!-- section-title - start -->
				<div class="col-lg-3 col-md-12 col-sm-12">
					<div class="section-title text-left">
						<span class="line-style"></span>
						<h2 class="big-title"><strong>event</strong> listing</h2>
						<small class="sub-title">Most Recent events</small>
					</div>
				</div>
				<!-- section-title - end -->

				<!-- event-tab-menu - start -->
				<div class="col-lg-8 col-md-12 col-sm-12">
					<div class="event-tab-menu clearfix">
						<ul class="nav">
							<li>
								<a data-toggle="tab" href="#conference-event">
									<strong><i class="fas fa-microchip"></i> Technical</strong> event
								</a>
							</li>
							<li>
								<a data-toggle="tab" href="#playground-event">
									<strong><i class="fas fa-futbol"></i> Sports</strong> event
								</a>
							</li>
							<li>
								<a class="active" data-toggle="tab" href="#musical-event">
									<strong><i class="fas fa-music"></i> musical</strong> event
								</a>
							</li>
							<li>
								<a data-toggle="tab" href="#other-event">
									<strong><i class="far fa-check-square"></i> other</strong> event
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- event-tab-menu - end -->

			</div>
		</div>

		<!-- tab-content - start -->
		<div class="tab-content">

			<!-- conference-event - start -->
			<div id="conference-event" class="tab-pane fade">
				<div class="row">

					<!-- event-item - start -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="event-item2 clearfix">

							<!-- event-image - start -->
							<div class="event-image">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
								<img src="assets/images/event/1.event-grid.jpg" alt="Image_not_found">
							</div>
							<!-- event-image - end -->

							<!-- event-content - start -->
							<div class="event-content">
								<div class="event-title mb-15">
									<h3 class="title">
										Barcelona Food truck Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="tickets-details-btn">
									tickets & details
								</a>
							</div>
							<!-- event-content - end -->

						</div>
					</div>
					<!-- event-item - end -->

					<!-- event-item - start -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="event-item2 clearfix">

							<!-- event-image - start -->
							<div class="event-image">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
								<img src="assets/images/event/2.event-grid.jpg" alt="Image_not_found">
							</div>
							<!-- event-image - end -->

							<!-- event-content - start -->
							<div class="event-content">
								<div class="event-title mb-15">
									<h3 class="title">
										Barcelona Food truck Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="tickets-details-btn">
									tickets & details
								</a>
							</div>
							<!-- event-content - end -->

						</div>
					</div>
					<!-- event-item - end -->

					<!-- event-item - start -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="event-item2 clearfix">

							<!-- event-image - start -->
							<div class="event-image">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
								<img src="assets/images/event/3.event-grid.jpg" alt="Image_not_found">
							</div>
							<!-- event-image - end -->

							<!-- event-content - start -->
							<div class="event-content">
								<div class="event-title mb-15">
									<h3 class="title">
										Barcelona Food truck Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="tickets-details-btn">
									tickets & details
								</a>
							</div>
							<!-- event-content - end -->

						</div>
					</div>
					<!-- event-item - end -->

					<!-- event-item - start -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="event-item2 clearfix">

							<!-- event-image - start -->
							<div class="event-image">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
								<img src="assets/images/event/4.event-grid.jpg" alt="Image_not_found">
							</div>
							<!-- event-image - end -->

							<!-- event-content - start -->
							<div class="event-content">
								<div class="event-title mb-15">
									<h3 class="title">
										Barcelona Food truck Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="tickets-details-btn">
									tickets & details
								</a>
							</div>
							<!-- event-content - end -->

						</div>
					</div>
					<!-- event-item - end -->

					<!-- event-item - start -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="event-item2 clearfix">

							<!-- event-image - start -->
							<div class="event-image">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
								<img src="assets/images/event/5.event-grid.jpg" alt="Image_not_found">
							</div>
							<!-- event-image - end -->

							<!-- event-content - start -->
							<div class="event-content">
								<div class="event-title mb-15">
									<h3 class="title">
										Barcelona Food truck Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="tickets-details-btn">
									tickets & details
								</a>
							</div>
							<!-- event-content - end -->

						</div>
					</div>
					<!-- event-item - end -->

					<!-- event-item - start -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="event-item2 clearfix">

							<!-- event-image - start -->
							<div class="event-image">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
								<img src="assets/images/event/6.event-grid.jpg" alt="Image_not_found">
							</div>
							<!-- event-image - end -->

							<!-- event-content - start -->
							<div class="event-content">
								<div class="event-title mb-15">
									<h3 class="title">
										Barcelona Food truck Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="tickets-details-btn">
									tickets & details
								</a>
							</div>
							<!-- event-content - end -->

						</div>
					</div>
					<!-- event-item - end -->

					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="pagination ul-li clearfix">
							<ul>
								<li class="page-item prev-item">
									<a class="page-link" href="#">Prev</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">01</a></li>
								<li class="page-item active"><a class="page-link" href="#">02</a></li>
								<li class="page-item"><a class="page-link" href="#">03</a></li>
								<li class="page-item"><a class="page-link" href="#">04</a></li>
								<li class="page-item"><a class="page-link" href="#">05</a></li>
								<li class="page-item next-item">
									<a class="page-link" href="#">Next</a>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
			<!-- conference-event - end -->

			<!-- playground-event - start -->
			<div id="playground-event" class="tab-pane fade">
				<div class="row">

					<!-- event-item - start -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="event-item2 clearfix">

							<!-- event-image - start -->
							<div class="event-image">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
								<img src="assets/images/event/7.event-grid.jpg" alt="Image_not_found">
							</div>
							<!-- event-image - end -->

							<!-- event-content - start -->
							<div class="event-content">
								<div class="event-title mb-15">
									<h3 class="title">
										Barcelona Food truck Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="tickets-details-btn">
									tickets & details
								</a>
							</div>
							<!-- event-content - end -->

						</div>
					</div>
					<!-- event-item - end -->

					<!-- event-item - start -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="event-item2 clearfix">

							<!-- event-image - start -->
							<div class="event-image">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
								<img src="assets/images/event/8.event-grid.jpg" alt="Image_not_found">
							</div>
							<!-- event-image - end -->

							<!-- event-content - start -->
							<div class="event-content">
								<div class="event-title mb-15">
									<h3 class="title">
										Barcelona Food truck Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="tickets-details-btn">
									tickets & details
								</a>
							</div>
							<!-- event-content - end -->

						</div>
					</div>
					<!-- event-item - end -->

					<!-- event-item - start -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="event-item2 clearfix">

							<!-- event-image - start -->
							<div class="event-image">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
								<img src="assets/images/event/1.event-grid.jpg" alt="Image_not_found">
							</div>
							<!-- event-image - end -->

							<!-- event-content - start -->
							<div class="event-content">
								<div class="event-title mb-15">
									<h3 class="title">
										Barcelona Food truck Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="tickets-details-btn">
									tickets & details
								</a>
							</div>
							<!-- event-content - end -->

						</div>
					</div>
					<!-- event-item - end -->

					<!-- event-item - start -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="event-item2 clearfix">

							<!-- event-image - start -->
							<div class="event-image">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
								<img src="assets/images/event/2.event-grid.jpg" alt="Image_not_found">
							</div>
							<!-- event-image - end -->

							<!-- event-content - start -->
							<div class="event-content">
								<div class="event-title mb-15">
									<h3 class="title">
										Barcelona Food truck Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="tickets-details-btn">
									tickets & details
								</a>
							</div>
							<!-- event-content - end -->

						</div>
					</div>
					<!-- event-item - end -->

					<!-- event-item - start -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="event-item2 clearfix">

							<!-- event-image - start -->
							<div class="event-image">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
								<img src="assets/images/event/3.event-grid.jpg" alt="Image_not_found">
							</div>
							<!-- event-image - end -->

							<!-- event-content - start -->
							<div class="event-content">
								<div class="event-title mb-15">
									<h3 class="title">
										Barcelona Food truck Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="tickets-details-btn">
									tickets & details
								</a>
							</div>
							<!-- event-content - end -->

						</div>
					</div>
					<!-- event-item - end -->

					<!-- event-item - start -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="event-item2 clearfix">

							<!-- event-image - start -->
							<div class="event-image">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
								<img src="assets/images/event/4.event-grid.jpg" alt="Image_not_found">
							</div>
							<!-- event-image - end -->

							<!-- event-content - start -->
							<div class="event-content">
								<div class="event-title mb-15">
									<h3 class="title">
										Barcelona Food truck Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="tickets-details-btn">
									tickets & details
								</a>
							</div>
							<!-- event-content - end -->

						</div>
					</div>
					<!-- event-item - end -->

					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="pagination ul-li clearfix">
							<ul>
								<li class="page-item prev-item">
									<a class="page-link" href="#">Prev</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">01</a></li>
								<li class="page-item active"><a class="page-link" href="#">02</a></li>
								<li class="page-item"><a class="page-link" href="#">03</a></li>
								<li class="page-item"><a class="page-link" href="#">04</a></li>
								<li class="page-item"><a class="page-link" href="#">05</a></li>
								<li class="page-item next-item">
									<a class="page-link" href="#">Next</a>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
			<!-- playground-event - end -->

			<!-- musical-event - start -->
			<div id="musical-event" class="tab-pane fade in active show">
				<div class="row">

					<!-- event-item - start -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="event-item2 clearfix">

							<!-- event-image - start -->
							<div class="event-image">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
								<img src="assets/images/event/5.event-grid.jpg" alt="Image_not_found">
							</div>
							<!-- event-image - end -->

							<!-- event-content - start -->
							<div class="event-content">
								<div class="event-title mb-15">
									<h3 class="title">
										Barcelona Food truck Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="tickets-details-btn">
									tickets & details
								</a>
							</div>
							<!-- event-content - end -->

						</div>
					</div>
					<!-- event-item - end -->

					<!-- event-item - start -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="event-item2 clearfix">

							<!-- event-image - start -->
							<div class="event-image">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
								<img src="assets/images/event/6.event-grid.jpg" alt="Image_not_found">
							</div>
							<!-- event-image - end -->

							<!-- event-content - start -->
							<div class="event-content">
								<div class="event-title mb-15">
									<h3 class="title">
										Barcelona Food truck Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="tickets-details-btn">
									tickets & details
								</a>
							</div>
							<!-- event-content - end -->

						</div>
					</div>
					<!-- event-item - end -->

					<!-- event-item - start -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="event-item2 clearfix">

							<!-- event-image - start -->
							<div class="event-image">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
								<img src="assets/images/event/7.event-grid.jpg" alt="Image_not_found">
							</div>
							<!-- event-image - end -->

							<!-- event-content - start -->
							<div class="event-content">
								<div class="event-title mb-15">
									<h3 class="title">
										Barcelona Food truck Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="tickets-details-btn">
									tickets & details
								</a>
							</div>
							<!-- event-content - end -->

						</div>
					</div>
					<!-- event-item - end -->

					<!-- event-item - start -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="event-item2 clearfix">

							<!-- event-image - start -->
							<div class="event-image">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
								<img src="assets/images/event/8.event-grid.jpg" alt="Image_not_found">
							</div>
							<!-- event-image - end -->

							<!-- event-content - start -->
							<div class="event-content">
								<div class="event-title mb-15">
									<h3 class="title">
										Barcelona Food truck Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="tickets-details-btn">
									tickets & details
								</a>
							</div>
							<!-- event-content - end -->

						</div>
					</div>
					<!-- event-item - end -->

					<!-- event-item - start -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="event-item2 clearfix">

							<!-- event-image - start -->
							<div class="event-image">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
								<img src="assets/images/event/1.event-grid.jpg" alt="Image_not_found">
							</div>
							<!-- event-image - end -->

							<!-- event-content - start -->
							<div class="event-content">
								<div class="event-title mb-15">
									<h3 class="title">
										Barcelona Food truck Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="tickets-details-btn">
									tickets & details
								</a>
							</div>
							<!-- event-content - end -->

						</div>
					</div>
					<!-- event-item - end -->

					<!-- event-item - start -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="event-item2 clearfix">

							<!-- event-image - start -->
							<div class="event-image">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
								<img src="assets/images/event/2.event-grid.jpg" alt="Image_not_found">
							</div>
							<!-- event-image - end -->

							<!-- event-content - start -->
							<div class="event-content">
								<div class="event-title mb-15">
									<h3 class="title">
										Barcelona Food truck Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="tickets-details-btn">
									tickets & details
								</a>
							</div>
							<!-- event-content - end -->

						</div>
					</div>
					<!-- event-item - end -->

					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="pagination ul-li clearfix">
							<ul>
								<li class="page-item prev-item">
									<a class="page-link" href="#">Prev</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">01</a></li>
								<li class="page-item active"><a class="page-link" href="#">02</a></li>
								<li class="page-item"><a class="page-link" href="#">03</a></li>
								<li class="page-item"><a class="page-link" href="#">04</a></li>
								<li class="page-item"><a class="page-link" href="#">05</a></li>
								<li class="page-item next-item">
									<a class="page-link" href="#">Next</a>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
			<!-- musical-event - end -->

			<!-- other-event - start -->
			<div id="other-event" class="tab-pane fade">
				<div class="row">

					<!-- event-item - start -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="event-item2 clearfix">

							<!-- event-image - start -->
							<div class="event-image">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
								<img src="assets/images/event/3.event-grid.jpg" alt="Image_not_found">
							</div>
							<!-- event-image - end -->

							<!-- event-content - start -->
							<div class="event-content">
								<div class="event-title mb-15">
									<h3 class="title">
										Barcelona Food truck Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="tickets-details-btn">
									tickets & details
								</a>
							</div>
							<!-- event-content - end -->

						</div>
					</div>
					<!-- event-item - end -->

					<!-- event-item - start -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="event-item2 clearfix">

							<!-- event-image - start -->
							<div class="event-image">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
								<img src="assets/images/event/4.event-grid.jpg" alt="Image_not_found">
							</div>
							<!-- event-image - end -->

							<!-- event-content - start -->
							<div class="event-content">
								<div class="event-title mb-15">
									<h3 class="title">
										Barcelona Food truck Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="tickets-details-btn">
									tickets & details
								</a>
							</div>
							<!-- event-content - end -->

						</div>
					</div>
					<!-- event-item - end -->

					<!-- event-item - start -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="event-item2 clearfix">

							<!-- event-image - start -->
							<div class="event-image">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
								<img src="assets/images/event/5.event-grid.jpg" alt="Image_not_found">
							</div>
							<!-- event-image - end -->

							<!-- event-content - start -->
							<div class="event-content">
								<div class="event-title mb-15">
									<h3 class="title">
										Barcelona Food truck Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="tickets-details-btn">
									tickets & details
								</a>
							</div>
							<!-- event-content - end -->

						</div>
					</div>
					<!-- event-item - end -->

					<!-- event-item - start -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="event-item2 clearfix">

							<!-- event-image - start -->
							<div class="event-image">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
								<img src="assets/images/event/6.event-grid.jpg" alt="Image_not_found">
							</div>
							<!-- event-image - end -->

							<!-- event-content - start -->
							<div class="event-content">
								<div class="event-title mb-15">
									<h3 class="title">
										Barcelona Food truck Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="tickets-details-btn">
									tickets & details
								</a>
							</div>
							<!-- event-content - end -->

						</div>
					</div>
					<!-- event-item - end -->

					<!-- event-item - start -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="event-item2 clearfix">

							<!-- event-image - start -->
							<div class="event-image">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
								<img src="assets/images/event/7.event-grid.jpg" alt="Image_not_found">
							</div>
							<!-- event-image - end -->

							<!-- event-content - start -->
							<div class="event-content">
								<div class="event-title mb-15">
									<h3 class="title">
										Barcelona Food truck Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="tickets-details-btn">
									tickets & details
								</a>
							</div>
							<!-- event-content - end -->

						</div>
					</div>
					<!-- event-item - end -->

					<!-- event-item - start -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="event-item2 clearfix">

							<!-- event-image - start -->
							<div class="event-image">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
								<img src="assets/images/event/8.event-grid.jpg" alt="Image_not_found">
							</div>
							<!-- event-image - end -->

							<!-- event-content - start -->
							<div class="event-content">
								<div class="event-title mb-15">
									<h3 class="title">
										Barcelona Food truck Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="tickets-details-btn">
									tickets & details
								</a>
							</div>
							<!-- event-content - end -->

						</div>
					</div>
					<!-- event-item - end -->

					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="pagination ul-li clearfix">
							<ul>
								<li class="page-item prev-item">
									<a class="page-link" href="#">Prev</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">01</a></li>
								<li class="page-item active"><a class="page-link" href="#">02</a></li>
								<li class="page-item"><a class="page-link" href="#">03</a></li>
								<li class="page-item"><a class="page-link" href="#">04</a></li>
								<li class="page-item"><a class="page-link" href="#">05</a></li>
								<li class="page-item next-item">
									<a class="page-link" href="#">Next</a>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
			<!-- other-event - end -->

		</div>
		<!-- tab-content - end -->

	</div>
</section>
<!-- event-section - end
================================================== -->


	<!-- event-section - start
		================================================== -->
		<section id="event-section" class="event-section sec-ptb-100 bg-gray-light clearfix">
			<div class="container">

				<div class="mb-50">
					<div class="row">

						<!-- section-title - start -->
						<div class="col-lg-3 col-md-12 col-sm-12">
							<div class="section-title text-left">
								<span class="line-style"></span>
								<h2 class="big-title"><strong>Trending</strong> Events</h2>
								<!-- <small class="sub-title">Trending Events</small> -->
							</div>
						</div>
						<!-- section-title - end -->

						<!-- event-tab-menu - start -->
						<div class="col-lg-8 col-md-12 col-sm-12">
							<div class="event-tab-menu clearfix">
								<ul class="nav">
									<li>
										<a data-toggle="tab" href="#conference-event">
											<strong><i class="fas fa-microchip"></i> Technical</strong> event
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#playground-event">
											<strong><i class="fas fa-futbol"></i> Sports</strong> event
										</a>
									</li>
									<li>
										<a class="active" data-toggle="tab" href="#musical-event">
											<strong><i class="fas fa-music"></i> musical</strong> event
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#other-event">
											<strong><i class="far fa-check-square"></i> other</strong> event
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- event-tab-menu - end -->

					</div>
				</div>

				<!-- tab-content - start -->
				<div class="tab-content">

					<!-- conference-event - start -->
					<div id="conference-event" class="tab-pane fade">
						<div class="row">

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-1.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-2.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-3.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-4.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-5.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-6.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="pagination ul-li clearfix">
									<ul>
										<li class="page-item prev-item">
											<a class="page-link" href="#">Prev</a>
										</li>
										<li class="page-item"><a class="page-link" href="#">01</a></li>
										<li class="page-item active"><a class="page-link" href="#">02</a></li>
										<li class="page-item"><a class="page-link" href="#">03</a></li>
										<li class="page-item"><a class="page-link" href="#">04</a></li>
										<li class="page-item"><a class="page-link" href="#">05</a></li>
										<li class="page-item next-item">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					<!-- conference-event - end -->

					<!-- playground-event - start -->
					<div id="playground-event" class="tab-pane fade">
						<div class="row">

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-1.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-2.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-3.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-4.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-5.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-6.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="pagination ul-li clearfix">
									<ul>
										<li class="page-item prev-item">
											<a class="page-link" href="#">Prev</a>
										</li>
										<li class="page-item"><a class="page-link" href="#">01</a></li>
										<li class="page-item active"><a class="page-link" href="#">02</a></li>
										<li class="page-item"><a class="page-link" href="#">03</a></li>
										<li class="page-item"><a class="page-link" href="#">04</a></li>
										<li class="page-item"><a class="page-link" href="#">05</a></li>
										<li class="page-item next-item">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					<!-- playground-event - end -->

					<!-- musical-event - start -->
					<div id="musical-event" class="tab-pane fade in active show">
						<div class="row">

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-1.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-2.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-3.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="images/lite.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-5.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-6.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="pagination ul-li clearfix">
									<ul>
										<li class="page-item prev-item">
											<a class="page-link" href="#">Prev</a>
										</li>
										<li class="page-item"><a class="page-link" href="#">01</a></li>
										<li class="page-item active"><a class="page-link" href="#">02</a></li>
										<li class="page-item"><a class="page-link" href="#">03</a></li>
										<li class="page-item"><a class="page-link" href="#">04</a></li>
										<li class="page-item"><a class="page-link" href="#">05</a></li>
										<li class="page-item next-item">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					<!-- musical-event - end -->

					<!-- other-event - start -->
					<div id="other-event" class="tab-pane fade">
						<div class="row">

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-1.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-2.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-3.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-4.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-5.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-6.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="pagination ul-li clearfix">
									<ul>
										<li class="page-item prev-item">
											<a class="page-link" href="#">Prev</a>
										</li>
										<li class="page-item"><a class="page-link" href="#">01</a></li>
										<li class="page-item active"><a class="page-link" href="#">02</a></li>
										<li class="page-item"><a class="page-link" href="#">03</a></li>
										<li class="page-item"><a class="page-link" href="#">04</a></li>
										<li class="page-item"><a class="page-link" href="#">05</a></li>
										<li class="page-item next-item">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					<!-- other-event - end -->

				</div>
				<!-- tab-content - end -->

			</div>
		</section>
	<!-- event-section - end
		================================================== -->

	<!-- recommended-event-section - start
		================================================== -->
		<section id="event-section" class="event-section sec-ptb-100 bg-gray-light clearfix">
			<div class="container">

				<div class="mb-50">
					<div class="row">

						<!-- section-title - start -->
						<div class="col-lg-6 col-md-12 col-sm-12">
							<div class="section-title text-left">
								<span class="line-style"></span>
								<h2 class="big-title"><strong>Recommended</strong>Events</h2>
							</div>
						</div>
						<!-- section-title - end -->

						<!-- event-tab-menu - start -->
						<!-- <div class="col-lg-8 col-md-12 col-sm-12">
							<div class="event-tab-menu clearfix">
								<ul class="nav">
									<li>
										<a data-toggle="tab" href="#conference-event">
											<strong><i class="fas fa-check-square"></i> conference</strong> event
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#playground-event">
											<strong><i class="fas fa-check-square"></i> </strong> event
										</a>
									</li>
									<li>
										<a class="active" data-toggle="tab" href="#musical-event">
											<strong><i class="fas fa-check-square"></i> musical</strong> event
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#other-event">
											<strong><i class="far fa-check-square"></i> other</strong> event
										</a>
									</li>
								</ul>
							</div>
						</div> -->
						<!-- event-tab-menu - end -->

					</div>
				</div>

				<!-- tab-content - start -->
				<div class="tab-content">

					
					<!-- recommended-event - start -->
					<div id="musical-event" class="tab-pane fade in active show">
						<div class="row">

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-1.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-2.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-3.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="event-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-6.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2018
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="pagination ul-li clearfix">
									<ul>
										<li class="page-item prev-item">
											<a class="page-link" href="#">Prev</a>
										</li>
										<li class="page-item"><a class="page-link" href="#">01</a></li>
										<li class="page-item active"><a class="page-link" href="#">02</a></li>
										<li class="page-item"><a class="page-link" href="#">03</a></li>
										<li class="page-item"><a class="page-link" href="#">04</a></li>
										<li class="page-item"><a class="page-link" href="#">05</a></li>
										<li class="page-item next-item">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					<!-- recommended-event - end -->

				</div>
				<!-- tab-content - end -->

			</div>
		</section>
	<!-- recommended-event-section - end
		================================================== -->




		<!-- event-gallery-section - start
			================================================== -->
			<section id="event-gallery-section" class="event-gallery-section sec-ptb-100 clearfix">

				<!-- section-title - start -->
				<div class="section-title text-center mb-50">
					<small class="sub-title">Categories</small>
					<h2 class="big-title">Explore your <strong>interest</strong></h2>
				</div>
				<!-- section-title - end -->

			<!-- 	<div class="button-group filters-button-group mb-30">
					<button class="button is-checked" data-filter="*">
						<i class="fas fa-star"></i>
						<strong>all</strong> gallery
					</button>
					<button class="button" data-filter=".video-gallery">
						<i class="fas fa-play-circle"></i>
						<strong>video</strong> gallery
					</button>
					<button class="button" data-filter=".photo-gallery">
						<i class="far fa-image"></i>
						<strong>photo</strong> gallery
					</button>
				</div> -->

				<div class="grid clearfix mb-80" data-isotope="{ &quot;masonry&quot;: { &quot;columnWidth&quot;: 0 } }">
					<div class="grid-item grid-item--height2" data-category="photo-gallery">
						<a class="popup-link" href="assets/images/gallery/1.image.jpg" data-rel="lightcase:photoGallery">
							<img src="assets/images/gallery/1.image.jpg" alt="Image_not_found">
						</a>
						<div class="item-content">
							<h1 class="white-text">Talk Shows</h1>
						</div>
					</div>
					<div class="grid-item grid-item--width2" data-category="video-gallery">
						<a class="" href="#!" data-rel="lightcase:videoGallery">
							<img src="assets/images/gallery/2.image.jpg" alt="Image_not_found">
						</a>
						<div class="item-content">
							<h1 class="white-text">Musical shows</h1>
						</div>
					</div>

					<div class="grid-item" data-category="photo-gallery">
						<a class="popup-link" href="assets/images/gallery/8.image.jpg" data-rel="lightcase:photoGallery">
							<img src="images/category_sports.jpg" alt="Image_not_found">
						</a>
						<div class="item-content">
							<h1 class="white-text">Sports</h1>
						</div>
					</div>					

					<!-- <div class="grid-item" data-category="photo-gallery">
						<a class="popup-link" href="#!" data-rel="lightcase:photoGallery">
							<img src="assets/images/gallery/3.image.jpg" alt="Image_not_found">
						</a>
						<div class="item-content">
							<h3></h3>
							<span>Food Festival, 24 June 2016</span>
						</div>
					</div> -->

					<div class="grid-item" data-category="photo-gallery">
						<a class="popup-link" href="#!" data-rel="lightcase:photoGallery">
							<img src="assets/images/gallery/4.image.jpg" alt="Image_not_found">
						</a>
						<div class="item-content">
							<h1 class="white-text">Tech</h1>
						</div>
					</div>
					<div class="grid-item grid-item--width2" data-category="photo-gallery">
						<a class="popup-link" href="#!" data-rel="lightcase:photoGallery">
							<img src="assets/images/gallery/6.image.jpg" alt="Image_not_found">
						</a>
						<div class="item-content">
							<h1 class="white-text">Concerts</h1>
						</div>
					</div>
					<!-- <div class="grid-item grid-item--width2" data-category="video-gallery">
						<a class="" href="#!" data-rel="lightcase:videoGallery">
							<img src="assets/images/gallery/5.image.jpg" alt="Image_not_found">
						</a>
						<div class="item-content">
							<h1 class="white-text">Celebrations</h1>
						</div>
					</div> -->

					<!-- <div class="grid-item video-gallery " data-category="video-gallery">
						<a class="" href="https://www.youtube.com/embed/2vhBU0-KlNQ" data-rel="lightcase:videoGallery">
							<img src="assets/images/gallery/7.image.jpg" alt="Image_not_found">
						</a>
						<div class="item-content">
							<h3>New Year Celebration</h3>
							<span>Food Festival, 24 June 2016</span>
						</div>
					</div>
					<div class="grid-item photo-gallery " data-category="photo-gallery">
						<a class="popup-link" href="assets/images/gallery/8.image.jpg" data-rel="lightcase:photoGallery">
							<img src="assets/images/gallery/8.image.jpg" alt="Image_not_found">
						</a>
						<div class="item-content">
							<h3>Envato Author Fun Hiking</h3>
							<span>Food Festival, 24 June 2016</span>
						</div>
					</div> -->
				</div>

				<div class="text-center">
					<a href="#!" class="custom-btn">view all categories</a>
				</div>


			</section>
		<!-- event-gallery-section - end
			================================================== -->



<!-- testimonial5-section - start
================================================== -->
<section id="testimonial5-section" class="testimonial5-section clearfix">
	<div class="jarallax" style="background-image: url(assets/images/testimonial-bg.jpg);">
		<div class="overlay-black sec-ptb-100">
			<div class="container">

				testimonial5-carousel - start
				<div id="testimonial5-carousel" class="testimonial5-carousel owl-carousel owl-theme">
				<div id="testimonial5-carousel" class="testimonial5-carousel owl-theme">

					<div class="item text-center">
						<span class="quote-icon">
							<i class="fas fa-quote-right"></i>
						</span>
						<p class="clients-comment white-text">
							“Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet. Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet.”
						</p>
						<div class="client-info">
							<h3 class="client-name theme-color">Jenni Hernandes</h3>
							<span class="client-sub-title white-text">Graphic Designer</span>
						</div>
					</div>

					<!-- <div class="item text-center">
						<span class="quote-icon">
							<i class="fas fa-quote-right"></i>
						</span>
						<p class="clients-comment">
							“Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet. Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet.”
						</p>
						<div class="client-info">
							<h3 class="client-name">Jenni Hernandes</h3>
							<span class="client-sub-title">Graphic Designer</span>
						</div>
					</div> -->

					<!-- <div class="item text-center">
						<span class="quote-icon">
							<i class="fas fa-quote-right"></i>
						</span>
						<p class="clients-comment">
							“Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet. Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet.”
						</p>
						<div class="client-info">
							<h3 class="client-name">Jenni Hernandes</h3>
							<span class="client-sub-title">Graphic Designer</span>
						</div>
					</div> -->

					<!-- <div class="item text-center">
						<span class="quote-icon">
							<i class="fas fa-quote-right"></i>
						</span>
						<p class="clients-comment">
							“Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet. Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet.”
						</p>
						<div class="client-info">
							<h3 class="client-name">Jenni Hernandes</h3>
							<span class="client-sub-title">Graphic Designer</span>
						</div>
					</div> -->

				</div>
				<!-- testimonial5-carousel - end -->

			</div>
		</div>
	</div>
</section>
<!-- testimonial5-section - end
================================================== -->




<!-- about-section - start
	================================================== -->
	<section id="about-section" class="about-section sec-ptb-100 clearfix">
		<div class="container">
			<div class="row">

				<!-- section-title - start -->
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="section-title text-left mb-30">
						<span class="line-style"></span>
						<small class="sub-title">We are Passket</small>
						<h2 class="big-title"><strong>No.1</strong> Events Management</h2>
						<p class="black-color mb-50">
							Your one stop solution for event management as well as event ticketing and attending.
						</p>
						<a href="#!" class="custom-btn">
							about Passket
						</a>
					</div>
				</div>
				<!-- section-title - end -->

				<!-- about-item-wrapper - start -->
				<div class="col-lg-8 col-md-12 col-sm-12">
					<div class="about-item-wrapper ul-li">
						<ul>

							<li>
								<a href="#!" class="about-item">
									<span class="icon">
										<i class="flaticon-handshake"></i>
									</span>
									<strong class="title">
										Friendly Team
									</strong>
									<small class="sub-title">
										Sound relationship history
									</small>
								</a>
							</li>
							<li>
								<a href="#!" class="about-item">
									<span class="icon">
										<i class="flaticon-two-balloons"></i>
									</span>
									<strong class="title">
										Successful events
									</strong>
									<small class="sub-title">
										perfact venues
									</small>
								</a>
							</li>
							<li>
								<a href="#!" class="about-item">
									<span class="icon">
										<i class="flaticon-cheers"></i>
									</span>
									<strong class="title">
										Unique Scenario
									</strong>
									<small class="sub-title">
										We thinking out of the box
									</small>
								</a>
							</li>

							<li>
								<a href="#!" class="about-item">
									<span class="icon">
										<i class="flaticon-clown-hat"></i>
									</span>
									<strong class="title">
										Unforgettable Time
									</strong>
									<small class="sub-title">
										We make business worth it
									</small>
								</a>
							</li>
							<li>
								<a href="#!" class="about-item">
									<span class="icon">
										<i class="flaticon-speech-bubble"></i>
									</span>
									<strong class="title">
										24/7 Hours Support
									</strong>
									<small class="sub-title">
										Anytime anywhere
									</small>
								</a>
							</li>
							<li>
								<a href="#!" class="about-item">
									<span class="icon">
										<i class="flaticon-light-bulb"></i>
									</span>
									<strong class="title">
										Briliant Ideas
									</strong>
									<small class="sub-title">
										We have million ideas
									</small>
								</a>
							</li>

						</ul>
					</div>
				</div>
				<!-- about-item-wrapper - end -->
				
			</div>
		</div>
	</section>
<!-- about-section - end
	================================================== -->



<!-- default-sponsor-section - start
================================================== -->
<div id="default-sponsor-section" class="default-sponsor-section clearfix" style="background-image: url(images/special-offer-bg.png);">
	<div class="container">
		<ul>

			<li>
				<a href="#!">
					<img src="assets/images/partners/image1.png" alt="Image_not_found">
				</a>
			</li>
			<li>
				<a href="#!">
					<img src="assets/images/partners/image2.png" alt="Image_not_found">
				</a>
			</li>
			<li>
				<a href="#!">
					<img src="assets/images/partners/image4.png" alt="Image_not_found">
				</a>
			</li>
			<li>
				<a href="#!">
					<img src="assets/images/partners/image6.png" alt="Image_not_found">
				</a>
			</li>

		</ul>
	</div>
</div>
<!-- default-sponsor-section - end
================================================== -->




	<!-- news-update-section - start
		================================================== -->
		<section id="news-update-section" class="news-update-section sec-ptb-100 clearfix">
			<div class="container">
				<div class="row">

					<!-- faq-accordion - start -->
					<div class="col-lg-6 col-md-12 col-sm-12">
						<!-- section-title - start -->
						<div class="section-title mb-30">
							<span class="line-style"></span>
							<h2 class="big-title">Any <strong>questions?</strong></h2>
							<small class="sub-title">find your answer</small>
						</div>
						<!-- section-title - end -->
						<div id="faq-accordion" class="faq-accordion">

							<div class="card">
								<div class="card-header" id="headingone">
									<button class="btn collapsed" data-toggle="collapse" data-target="#collapseone" aria-expanded="true" aria-controls="collapseone">
										<span>01.</span> How to join Passket Event Management?
									</button>
								</div>

								<div id="collapseone" class="collapse" aria-labelledby="headingone" data-parent="#faq-accordion">
									<div class="card-body">
										<h3>answer</h3>
										Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header" id="headingtwo">
									<button class="btn" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
										<span>02.</span> How to make my own event?
									</button>
								</div>
								<div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo" data-parent="#faq-accordion">
									<div class="card-body">
										<h3>answer</h3>
										Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header" id="headingthree">
									<button class="btn collapsed" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
										<span>03.</span> About the price to make new event?
									</button>
								</div>
								<div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#faq-accordion">
									<div class="card-body">
										<h3>answer</h3>
										Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header" id="headingfour">
									<button class="btn collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
										<span>04.</span> How to become an Event Organizer?
									</button>
								</div>
								<div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#faq-accordion">
									<div class="card-body">
										<h3>answer</h3>
										Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet.
									</div>
								</div>
							</div>

						</div>
					</div>
					<!-- faq-accordion - end -->

					<!-- latest-blog-wrapper - start -->
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="latest-blog-wrapper">

							<!-- section-title - start -->
							<div class="section-title mb-30">
								<span class="line-style"></span>
								<small class="sub-title">our blog</small>
								<h2 class="big-title">latest <strong>news</strong></h2>
							</div>
							<!-- section-title - end -->

							<!-- latest-blog - start -->
							<div class="latest-blog clearfix">
								<div class="blog-image">
									<img src="images/blog_latest.jpg" alt="Image_not_found">
									<a href="#!" class="plus-effect"></a>
								</div>
								<div class="blog-content">
									<div class="blog-title mb-30">
										<h3>Barcelona Friday Food Truck Festival 26 Mei 2019</h3>
										<span>26 June 2018</span>
									</div>
									<p class="m-0">
										Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet.
									</p>
								</div>
							</div>
							<!-- latest-blog - end -->

							<!-- latest-blog - start -->
							<div class="latest-blog clearfix">
								<div class="blog-image">
									<img src="images/lite.jpg" alt="Image_not_found">
									<a href="#!" class="plus-effect"></a>
								</div>
								<div class="blog-content">
									<div class="blog-title mb-30">
										<h3>Barcelona Friday Food Truck Festival 26 Mei 2019</h3>
										<span>26 June 2018</span>
									</div>
									<p class="m-0">
										Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet.
									</p>
								</div>
							</div>
							<!-- latest-blog - end -->

						</div>
					</div>
					<!-- latest-blog-wrapper - end -->
					
				</div>
			</div>
		</section>
	<!-- news-update-section - end
		================================================== -->





@endsection