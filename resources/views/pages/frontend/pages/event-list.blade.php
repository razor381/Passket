@extends('pages.frontend.layouts.master2')

@section('content')

<!-- breadcrumb-section - start
================================================== -->
<section id="breadcrumb-section" class="breadcrumb-section clearfix">
	<div class="jarallax" style="background-image: url(assets/images/breadcrumb/0.breadcrumb-bg.jpg);">
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
								<li class="breadcrumb-item"><a href="{{URL::to('')}}" class="breadcrumb-link">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">event list</li>
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




<!-- event-search-section - start
================================================== -->
<section id="event-search-section" class="event-search-section clearfix" style="background-image: url(images/special-offer-bg.png);">
	<div class="container">
		<div class="row">

			<!-- section-title - start -->
			<div class="col-lg-4 col-md-12 col-sm-12">
				<div class="section-title">
					<small class="sub-title">Find best events on Passket</small>
					<h2 class="big-title">event <strong>Search</strong></h2>
				</div>
			</div>
			<!-- section-title - end -->

			<!-- search-form - start -->
			<div class="col-lg-8 col-md-12 col-sm-12">
				<div class="search-form form-wrapper">
					<form action="#!">

						<ul>
							<li>
								<span class="title">event keyword</span>
								<div class="form-item">
									<input type="search" placeholder="Enter Event Name">
								</div>
							</li>
							<li>
								<span class="title">event category</span>
								<select id="event-category-select">
									<option selected="">Conference</option>
									<option value="1">Sports</option>
									<option value="2">Workshop</option>
									<option value="3">Musics</option>
								</select>
							</li>
							<li>
								<button type="submit" class="submit-btn">search event now</button>
							</li>
						</ul>
						
					</form>
				</div>
			</div>
			<!-- search-form - end -->
			
		</div>
	</div>
</section>
<!-- event-search-section - end
================================================== -->




<!-- event-section - start
================================================== -->
<section id="event-section" class="event-section bg-gray-light sec-ptb-100 clearfix">
	<div class="container">
		<div class="row">

			<!-- sidebar-section - start -->
			<div class="col-lg-3 col-md-12 col-sm-12">
				<div class="sidebar-section">

					<!-- Add to Calendar - start -->
					<!-- <div title="Add to Calendar" class="addeventatc">
						Add to Calendar
						<span class="start">06/18/2015 09:00 AM</span>
						<span class="end">06/18/2015 11:00 AM</span>
						<span class="timezone">Europe/Paris</span>
						<span class="title">Summary of the event</span>
						<span class="description">Description of the event</span>
						<span class="location">Location of the event</span>
						<span class="organizer">Organizer</span>
						<span class="organizer_email">Organizer e-mail</span>
						<span class="all_day_event">false</span>
						<span class="date_format">MM/DD/YYYY</span>
					</div> -->
					<!-- Add to Calendar - end -->

					<!-- map-wrapper - start -->
					<div class="map-wrapper mb-30">

						<h2 class="title-small default-color mb-30">Google Map Search</h2>

						<div id="google-map">
							<div id="googleMaps" class="google-map-container"></div>
						</div>

					</div>
					<!-- map-wrapper - end -->

					<!-- spacial-event-wrapper - start -->
					<div class="spacial-event-wrapper text-center" style="background-image: url(assets/images/spacial-event-bg.jpg);">
						<div class="overlay-black">
							<p class="sub-title white-color mb-30">26 DECEMBER 2018</p>
							<h2 class="title-large white-color mb-30">
								AMSTERDAM
								<strong class="yellow-color">PHP CONFERENCE</strong>
							</h2>
							<a href="#!" class="custom-btn">booking ticket</a>
						</div>
					</div>
					<!-- spacial-event-wrapper - end -->
					
				</div>
			</div>
			<!-- sidebar-section - end -->

			<!-- - start -->
			<div class="col-lg-9 col-md-12 col-sm-12">

				<div class="search-result-form">
					<form action="#!">
						<ul>

							<li>
								<span class="result-text">5 Search results from 20 events</span>
							</li>
							<li>
								<label for="year-select">Years:</label>
								<select id="year-select">
									<option selected="">2018</option>
									<option value="1">2019</option>
									<option value="2">2020</option>
									<option value="3">2021</option>
								</select>
							</li>
							<li>
								<label for="munth-select">Months:</label>
								<select id="munth-select">
									<option selected="">June</option>
									<option value="1">July</option>
									<option value="2">August</option>
								</select>
							</li>

						</ul>
					</form>

					<ul class="nav event-layout-btngroup">
						<li><a class="active" data-toggle="tab" href="#list-style"><i class="fas fa-th-list"></i></a></li>
						<!--<li><a class="active" data-toggle="tab" href="#grid-style"><i class="fas fa-th"></i></a></li> -->
					</ul>
				</div>

				<div class="tab-content">
					<div id="list-style" class="tab-pane fade in active show">

					@if(count($eventLists)>0)
						@foreach($eventLists as $key=>$eventList)
							<!-- event-item - start -->
							<div class="event-list-item clearfix">

								<!-- event-image - start -->
								<div class="event-image">
									<div class="post-date">
									
										<span class="date">{{ date('d', strtotime($eventList->event_started_at))}}</span>
										<small class="month">{{date('M', strtotime($eventList->event_started_at))}}</small>
									</div>
									<img src="assets/images/event/event-1.jpg" alt="Image_not_found">
								</div>
								<!-- event-image - end -->

								<!-- event-content - start -->
								<div class="event-content">
									<div class="event-title mb-15">
										<h3 class="title">
											<strong>{{$eventList->event_name}}</strong>
										</h3>
										<span class="ticket-price yellow-color">Tickets Remainings {{$eventList->ticket_number}}</span>
									</div>
									<p class="discription-text mb-30">
										{{$eventList->event_detail}}
									</p>
									<div class="event-info-list ul-li clearfix">
										<ul>
											<li>
												<span class="icon">
													<i class="fas fa-map-marker-alt"></i>
												</span>
												<div class="info-content">
													<small>Event Venue</small>
													<h3>{{$eventList->event_venue_name}}</h3>
												</div>
											</li>
											<li>
												<span class="icon">
														<i class="fas fa-ticket-alt"></i>
												</span>
												<div class="info-content">
													<small>Ticket Price</small>
													<h3>{{$eventList->ticket_number}}</h3>
												</div>
											</li>
											<li>
												<span class="icon">
														<i class="fas fa-ticket-alt"></i>
												</span>
												<div class="info-content">
													<small>Event Category</small>
													<h3>{{$eventList->event_category}}</h3>
												</div>
											</li>
											<li>
												<a href="{{url('events/eventDetails/'.$eventList->id)}}" class="tickets-details-btn" style="margin:10px;">
													Event Full Details
												</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- event-content - end -->

							</div>
							<!-- event-item - end -->
						@endforeach
						<div class="pagination ul-li clearfix">
							<ul>
								{{ $eventLists->links() }}
							</ul>
						</div>

					@endif
						
					</div>
					<!-- commeting out the grid style -->
					{{--	
					<div id="grid-style" class="tab-pane fade in active show">
						<div class="row justify-content-center">
						@if(count($eventLists)>0)
							@foreach($eventLists as $key=>$eventList)
							<!-- event-grid-item - start -->
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="event-grid-item">
									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">{{ date('d', strtotime($eventList->event_started_at))}}</span>
											<small class="month">{{date('M', strtotime($eventList->event_started_at))}}</small>
										</div>
										<img src="assets/images/event/1.event-grid.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-30">
											<h3 class="title">
												{{$eventList->event_name}}	
											</h3>
											<span class="ticket-price yellow-color">Tickets Remainings {{$eventList->ticket_number}}</span>
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
													{{$eventList->event_venue_name}}
												</li>
											</ul>
										</div>
										<a href="#!" class="custom-btn">
											Event Full Details
										</a>
									</div>
									<!-- event-content - end -->
								</div>
							</div>
							<!-- event-grid-item - end -->
							@endforeach
						@endif
							<!-- pagination - start -->
							<div class="pagination ul-li clearfix">
								<ul>
									<li class="page-item prev-item">
										<a class="page-link" href="#!">Prev</a>
									</li>
									<li class="page-item active"><a class="page-link" href="#!">01</a></li>
									<li class="page-item "><a class="page-link" href="#!">02</a></li>
									<li class="page-item"><a class="page-link" href="#!">03</a></li>
									<li class="page-item"><a class="page-link" href="#!">04</a></li>
									<li class="page-item"><a class="page-link" href="#!">05</a></li>
									<li class="page-item next-item">
										<a class="page-link" href="#!">Next</a>
									</li>
								</ul>
							</div>
							<!-- pagination - end -->

						</div>
					</div>--}}
				</div>
				

			</div>
			<!-- - end -->
			
		</div>
	</div>
</section>
<!-- event-section - end
================================================== -->





@endsection