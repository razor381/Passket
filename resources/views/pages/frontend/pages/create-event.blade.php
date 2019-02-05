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
			                            <h2 class="big-title"><strong></strong></h2>
			                        </div>
			                        <!-- breadcrumb-title - end -->

			                        <!-- breadcrumb-list - start -->
			                        <div class="breadcrumb-title text-center mb-50">
			                        	<h2 class="big-title">Passket</h2>
			                        </div>
			                        <div class="breadcrumb-list">
			                            <ul>
			                                <li class="breadcrumb-item"><a href="index-1.html" class="breadcrumb-link">Home</a></li>
			                                <li class="breadcrumb-item active" aria-current="page">create events</li>
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

			<!-- booking-section - start
					================================================== -->
			<section id="booking-section" class="booking-section bg-gray-light sec-ptb-100 clearfix">
			    <div class="container">
			        <div class="row">

			            <!-- booking-content-wrapper - start -->
			            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			                <div class="booking-content-wrapper">
			                    <div class="col-md-2"></div>
			                    <div class="col-lg-8 col-md-12 col-sm-12">
			                        <!-- billing-info - start -->
			                        <div class="billing-info mb-50">

			                            <!-- section-title - start -->
			                            <div class="section-title mb-30">
			                                <h2 class="big-title">basic details about your <strong class="yellow-color">event.</strong></h2>
			                            </div>
			                            <!-- section-title - end -->

			                            <!-- billing-form - start -->
			                            <div class="billing-form form-wrapper mb-50">
			                                <form method="POST" action="{{url('/create-event')}}" enctype="multipart/form-data">
			                                	@csrf
			                                    <div class="form-group mb-30">
			                                        <div class="form-label-group">
			                                            <label for="name">Event Title</label>
			                                            <input type="text" id="name" name="event_name" class="form-control" placeholder="Enter name">
			                                        </div>
			                                    </div>
			                                    <div class="form-group mb-30">
			                                        <div class="form-label-group">
			                                            <label for="name">Address</label>
			                                            <input type="text" id="name" name="event_address" class="form-control" placeholder="Enter Address">
			                                        </div>
			                                    </div>
			                                    <div class="form-group mb-30">
			                                        <div class="form-label-group">
			                                            <label for="name">Venue Name</label>
			                                            <input type="text" id="name" name="event_venue_name" class="form-control" placeholder="Enter venue name">
			                                        </div>
			                                    </div>
			                                    <!-- form-item-group - start -->
			                                    <div class="form-item-group mb-12">
			                                        <ul>
			                                            {{-- <li>
			                                                <div class="form-item">
			                                                    <select class="country-select">
			                                                        <option selected="">Type</option>
			                                                        <option>option 1</option>
			                                                        <option>option 2</option>
			                                                        <option>option 3</option>
			                                                        <option>option 4</option>
			                                                        <option>option 5</option>
			                                                    </select>
			                                                </div>
			                                            </li> --}}
			                                            <li>
			                                                <div class="form-item">
			                                                    <select name="event_category" class="country-select">
			                                                        <option selected="">Category</option>
			                                                        <option>Musical</option>
			                                                        <option>Workshop</option>
			                                                        <option>Technological</option>
			                                                        <option>Seminar</option>
			                                                        <option>Performance</option>
			                                                    </select>
			                                                </div>
			                                            </li>
			                                        </ul>
			                                    </div>
			                                    <!-- form-item-group - end -->
			                                    <div class="form-group mb-30">
			                                        <div class="form-label-group">
			                                            <label for="name">Event Details</label>
			                                            <textarea type="text" id="name" name="event_detail" class="form-control" style="resize: none;" placeholder="Enter your name"></textarea>
			                                        </div>
			                                    </div>
			                                    <div class="form-item-group mb-12">
			                                        <ul>
			                                            <div class="form-group-item">
			                                                <label>Event start</label>
			                                            </div>
			                                            <li>
			                                                <div class="form-item">
			                                                    <input type="date" id="name" name="event_start_year" class="form-control" placeholder="Year">
			                                                </div>
			                                            </li>
			                                        </ul>
			                                    </div>
			                                    <div class="form-item-group mb-12">
			                                        <ul>
			                                            <div class="form-group-item">
			                                                <label>Event end</label>
			                                            </div>
			                                            <li>
			                                                <div class="form-item">
			                                                    <input type="date" id="name" name="event_ends_year" class="form-control" placeholder="Year">
			                                                </div>
			                                            </li>
			                                        </ul>
			                                    </div>

			                                    <br>

			                                    <div class="section-title mb-30">
			                                        <h2 class="big-title"><strong class="yellow-color">Organizer</strong> Information</h2>
			                                    </div>
			                                    <div class="form-group mb-30">
			                                        <div class="form-label-group">
			                                            <label for="name">Name</label>
			                                            <input type="text" id="name" name="organizer_name" class="form-control" placeholder="Enter organizer name">
			                                        </div>
			                                    </div>
			                                    <div class="form-group mb-30">
			                                        <div class="form-group col-xs-6 mb-30" style="padding: 0 5px 0 0;">
			                                            <div class="form-label-group">
			                                                <label for="name">Email</label>
			                                                <input type="text" id="name" name="organizer_email" class="form-control" placeholder="Enter organizer email">
			                                            </div>
			                                        </div>
			                                        <div class="form-group col-xs-6 mb-30" style="padding: 0 0;">
			                                            <div class="form-label-group">
			                                                <label for="name">Contact Number</label>
			                                                <input type="text" id="name" name="organizer_contact_number" class="form-control" placeholder="Enter organizer contact number">
			                                            </div>
			                                        </div>
			                                       {{--  <div class="form-group mb-30">
			                                            <div class="form-label-group">
			                                                <label for="name">Contact Number</label>
			                                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name">
			                                            </div>
			                                        </div> --}}
			                                        <div class="form-group mb-30">
			                                            <div class="form-label-group">
			                                                <label for="name">Organizer Details</label>
			                                                <textarea type="text" id="name" name="organizer_detail" class="form-control" style="resize: none;" placeholder="Enter Organizer Detail"></textarea>
			                                            </div>
			                                        </div>
			                                        {{-- </form> --}}
			                                </div>
			                                <!-- billing-form - end -->
			                                <!-- reg-info - start -->

			                                <div class="reg-info mb-50">

			                                    <!-- section-title - start -->
			                                    <div class="section-title mb-30">
			                                        <h2 class="big-title">Details about <strong class="yellow-color">Ticket</strong></h2>
			                                    </div>
			                                    <!-- section-title - end -->

			                                    <!-- row - start -->
			                                    <div class="row">

			                                        <!-- ticket-buying-form - start -->
			                                        <div class="col-lg-6 col-md-6 col-sm-12">
			                                            <div class="ticket-buying-form form-wrapper">
			                                                {{--
			                                                <form action="#"> --}}
			                                                    <div class="col-xs-12 mb-30" style="padding: 0;">
			                                                        <label for="ex3">Ticket Name</label>
			                                                        <input class="form-control" name="ticket_name" id="ex3" type="text" placeholder="Enter Ticket Name">
			                                                    </div>

			                                                    <div class="col-xs-5 mb-30" style="padding: 0; margin-right: 20px;">
			                                                        <label for="ex3"> Maximum number</label>
			                                                        <input class="form-control" name="ticket_max_number" id="ex3" type="text" placeholder="Maximum tickets one can buy">
			                                                    </div>
			                                                    <div class="col-xs-5 mb-30" style="padding: 0;">
			                                                        <label for="ex3"> Minimum number</label>
			                                                        <input class="form-control" name="ticket_min_number" nameid="ex3" type="text" placeholder="Minimum tickets one can buy">
			                                                    </div>
			                                                    <div class="form-group mb-50">
			                                                        <div class="form-label-group">
			                                                            <label>Picture</label>
			                                                            <input type="file" id="name" name="photo">
			                                                        </div>
			                                                    </div>

			                                                    {{-- </form> --}}

			                                            </div>
			                                        </div>
			                                        <!-- ticket-buying-form - end -->

			                                        <!-- payment-form - start -->
			                                        <div class="col-lg-6 col-md-6 col-sm-12">
			                                            <div class="payment-form form-wrapper">
			                                                {{--
			                                                <form action="#"> --}}
			                                                    <div class="col-xs-6 mb-30" style="padding: 0;">
			                                                        <label for="ex3">Number of tickets</label>
			                                                        <input class="form-control" id="ex3" name="ticket_total_number" type="text" placeholder="Enter total ticket numbers">
			                                                    </div>
			                                                    <div class="form-group mb-30">
			                                                        <div class="form-item">
			                                                            <label>Category</label>
			                                                            <select name="ticket_category" class="cradit-card-select">
			                                                                <option selected="">Select ticket category number</option>
			                                                                <option>1</option>
			                                                                <option>2</option>
			                                                                <option>3</option>
			                                                                <option>4</option>
			                                                                <option>5</option>
			                                                            </select>
			                                                        </div>
			                                                    </div>
			                                                    <br>
			                                                    <div class="expired-date-form">
			                                                        <label for="">Ticket expiry</label>
			                                                        <ul>

			                                                            <li>
			                                                                <div class="form-item">
			                                                                    {{-- <select class="month-select">
			                                                                        <option selected="">Year</option>
			                                                                        <option>option 1</option>
			                                                                        <option>option 2</option>
			                                                                        <option>option 3</option>
			                                                                        <option>option 4</option>
			                                                                        <option>option 5</option>
			                                                                    </select> --}}

			                                                                    <input type="date" id="name" name="ticket_expiry_date" class="form-control" placeholder="Year">

			                                                                </div>
			                                                            </li>

			                                                            <li>
			                                                                <div class="form-item">
			                                                                    {{-- <select class="year-select">
			                                                                        <option selected="">Month</option>
			                                                                        <option>option 1</option>
			                                                                        <option>option 2</option>
			                                                                        <option>option 3</option>
			                                                                        <option>option 4</option>
			                                                                        <option>option 5</option>
			                                                                    </select> --}}

			                                                                    {{-- <input type="date" id="name" name="ticket_expiry_month" class="form-control" placeholder="Month"> --}}

			                                                                </div>
			                                                            </li>
			                                                            <li>
			                                                                <div class="form-item">
			                                                                    {{-- <select class="year-select">
			                                                                        <option selected="">Day</option>
			                                                                        <option>option 1</option>
			                                                                        <option>option 2</option>
			                                                                        <option>option 3</option>
			                                                                        <option>option 4</option>
			                                                                        <option>option 5</option>
			                                                                    </select> --}}

			                                                                    {{-- <input type="date" id="name" name="ticket_expiry_day" class="form-control" placeholder="Day"> --}}

			                                                                </div>
			                                                            </li>

			                                                        </ul>
			                                                    </div>
			                                                    {{-- </form> --}}
			                                            </div>
			                                        </div>
			                                        <!-- payment-form - end -->

			                                    </div>
			                                    <!-- row - end -->

			                                </div>
			                                <!-- reg-info - end -->
			                                <div class="text-center">
			                                    {{--
			                                    <button class="w3-button w3-grey w3-round-xxlarge" style="padding: 14px 32px;">
			                                        Back
			                                    </button> --}}

			                                    <input type="submit" class="custom-btn" name="create-form-submit-button" value="Submit"> {{--
			                                    <button type="submit" class="custom-btn">
			                                        Continue
			                                    </button> --}}

			                                </div>
			                                </form>

			                            </div>
			                            <!-- billing-info - end -->
			                        </div>
			                    </div>
			                </div>
			                <!-- booking-content-wrapper - end -->

			                </form>
			            </div>
			        </div>
			    </div>
			    </div>
			    </div>
			    </div>
			    </div>
			</section>

@endsection