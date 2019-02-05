@section('header')


<!-- header-section - start
	================================================== -->
    <header id="header-section" class="header-section scrolltop-fixed-header-section not-stuck clearfix">
        <!-- header-bottom - start -->
        <div class="container">
            <div class="header-bottom">
                <div class="row">
                    <!-- site-logo-wrapper - start -->
                    <div class="col-lg-2">
                        <div class="site-logo-wrapper">
                            <a href="index-1.html" class="logo">
                                <!-- <img src="assets/images/0.site-logo.png" alt="logo_not_found"> -->
                                <h2>PASSKET</h2>
                            </a>
                        </div>
                    </div>
                    <!-- site-logo-wrapper - end -->

                    <!-- mainmenu-wrapper - start -->
                    <div class="col-lg-10">
                        <div class="mainmenu-wrapper">
                            <div class="row">
                                <!-- menu-item-list - start -->
                                <div class="col-lg-12">
                                    <div class="menu-item-list ul-li clearfix">
                                        <ul>
                                            <li class="menu-item-has-children active">
                                                <a href="{{url('')}}">home</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#!">about</a>
                                                <ul class="sub-menu">
                                                    <li><a href="about.html">about us</a></li>
                                                    <li><a href='service.html'>service</a></li>
                                                    <li><a href='faq.html'>FAQ</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#!">Pages</a>
                                                <ul class="sub-menu">
                                                    <li><a href='/event-detail'>event details</a></li>
                                                    <li><a href='event-book'>event booking</a></li>
                                                    <li><a href='event-list'>event listing</a></li>
                                                    <li><a href='create-event'>create Event</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a href="blog.html">blogs</a>
<!--                                                 <ul class="sub-menu">
                                                    <li><a href='blog.html'>blog</a></li>
                                                    <li><a href='blog-details.html'>blog details</a></li>
                                                </ul> -->
                                            </li>
                                            <li>
                                                <a href="gallery.html">gallery</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="contact.html">contact</a>
                                                <!-- <ul class="sub-menu">
                                                    <li><a href="contact.html">contact us</a></li>
                                                    <li><a href='404-error.html'>404 Error</a></li>
                                                </ul> -->
                                            </li>
                                            <li class="menu-item-has-children">
                                            	<button class="btn btn-info create-event-button" style="margin-right: 5px;">
                                            		<a href="create-event.html" style="color:#fff; font-weight: 600;"> create Event	</a>
                                            	</button>
                                            </li>
                                            @auth
                                            <li class="menu-item-has-children">
                                                <form action="{{route('logout')}}" method="post">
                                                    {{csrf_field()}}
                                                    <button class="btn btn-info create-event-button"  style="background: #ba4343; border-color: #ba4343">
                                                        Logout
                                                    </button>    
                                                </form>
                                                
                                            </li>
                                            @endauth
                                        </ul>
                                    </div>
                                </div>
                                <!-- menu-item-list - end -->
                                @guest
                                <!-- menu-item-list - start -->
                                <div class="col-lg-2">
                                    <div class="user-search-btn-group ul-li clearfix">
                                        <ul>
                                            <li>
                                                <a href="#login-modal" class="login-modal-btn">
                                                    <i class="fas fa-user"></i>
                                                </a>
                                                <div id="register-modal" class="reglog-modal-wrapper register-modal mfp-hide clearfix" style="background-image: url(assets/images/login-modal-bg.jpg);">
                                                    <div class="overlay-black clearfix">

                                                        <!-- leftside-content - start -->
                                                        <div class="leftside-content">
                                                            <div class="site-logo-wrapper mb-80">
                                                                <a href="#!" class="logo">
                                                                    <img src="assets/images/2.site-logo.png" alt="logo_not_found">
                                                                </a>
                                                            </div>
                                                            <div class="register-login-link mb-80">
                                                                <ul>
                                                                    <li>
                                                                        <a href="#login-modal" class="login-modal-btn">
                                                                            <i class="fas fa-lock"></i> Login
                                                                        </a>
                                                                    </li>
                                                                    <li class="active">
                                                                        <a href="#register-modal" class="register-modal-btn">
                                                                            <i class="fas fa-user"></i> Register
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="copyright-text">
                                                                <p class="m-0">©2019 <a href="#!" class="yellow-color">Passket.com</a> all right reserved, made with <i class="fas fa-heart"></i> Passket</p>
                                                            </div>
                                                        </div>
                                                        <!-- leftside-content - end -->
                                                        <!-- rightside-content - start -->
                                                        <div class="rightside-content text-center">
                                                            <div class="mb-30">
                                                                <h2 class="form-title title-large white-color">Account <strong>Register</strong></h2>
                                                                <span class="form-subtitle white-color">
									                              	Have an account? <a href="#login-modal" class="login-modal-btn">Login</a>
												                </span>
                                                            </div>
                                                            <div id="errorMessageRegister" class="alert alert-danger">
                                                                <span>Something went wrong. Please try again.</span>
                                                            </div>
                                                            <div class="login-form text-center mb-50">
                                                                <div>
                                                                  @if($errors->all() != null)
                                                                    @foreach($errors->all() as $error)
                                                                    <div class="alert alert-danger">
                                                                      {{$error}}
                                                                    </div>
                                                                    @endforeach
                                                                  @endif
                                                                </div>
                                                                <form id="register" action="{{route('register')}}" method="post">
                                                                    {{csrf_field()}}
                                                                    <div class="form-item">
                                                                        <input type="text" id="name" name="name" placeholder="User Name">
                                                                        <span class="text-danger" id="errorName"></span>
                                                                    </div>
                                                                    <div class="form-item">
                                                                        <input type="email" id="email" name="email" placeholder="Email Address">
                                                                        <span class="text-danger" id="errorEmail"></span>

                                                                    </div>
                                                                    <div class="form-item">
                                                                        <input type="number" id="phone" name="phone" placeholder="Phone number">
                                                                        <span class="text-danger" id="errorPhone"></span>

                                                                    </div>
                                                                    <div class="form-item">
                                                                        <input type="password" id="password" name="password" placeholder="Password">
                                                                        <span class="text-danger" id="errorPassword"></span>

                                                                    </div>
                                                                    <div class="form-item">
                                                                        <input type="password" id="confirmPassword" name="password_confirmation" placeholder="Confirm Password">
                                                                    </div>
                                                                    <div class="select-client-type" id="selectClientType">
												                        <input type="checkbox" name="user-type" value="organizer">
									                                    <label for="selectClientType">Please Check for Registering as Organizer</label>
			                                                        </div>
                                                                    <button type="submit" class="passket-btn passket-btn-one">Sign Up</button>
                                                                </form>
                                                            </div>
                                                            <div class="bottom-text white-color">
                                                                <p class="m-0">
                                                                    * Denotes mandatory field.
                                                                </p>
                                                                <p class="m-0">** At least one telephone number is required.</p>
                                                            </div>
                                                        </div>
                                                        <!-- rightside-content - end -->
                                                        <a class="popup-modal-dismiss" href="#!">
                                                            <i class="fas fa-times"></i>
                                                        </a>

                                                    </div>
                                                </div>
                                            </li>
                                            <li>

                                            <div id="login-modal" class="reglog-modal-wrapper mfp-hide clearfix" style="background-image: url(assets/images/login-modal-bg.jpg);">
                                                <div class="overlay-black clearfix">

                                                    <!-- leftside-content - start -->
                                                    <div class="leftside-content">
                                                        <div class="site-logo-wrapper mb-80">
                                                            <a href="#!" class="logo">
                                                                <img src="assets/images/2.site-logo.png" alt="logo_not_found">
                                                            </a>
                                                        </div>
                                                        <div class="register-login-link mb-80">
                                                            <ul>
                                                                <li class="active">
                                                                	<a href="#login-modal" class="login-modal-btn">
                                                                	    <i class="fas fa-lock"></i> Login
                                                                	</a>
                                                                </li>
                                                                <li >
                                                                	<a href="#register-modal" class="register-modal-btn">
                                                                	    <i class="fas fa-user"></i> Register 
                                                                	</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="copyright-text">
                                                            <p class="m-0">©2018 <a href="#!" class="yellow-color">.com</a> all right reserved, made with <i class="fas fa-heart"></i> </p>
                                                        </div>
                                                    </div>
                                                    <!-- leftside-content - end -->

                                                    <!-- rightside-content - start -->
                                                    <div class="rightside-content text-center">

                                                        <div class="mb-30">
                                                            <h2 class="form-title title-large white-color">Account <strong>Login</strong></h2>
                                                            <span class="form-subtitle white-color">Login to our website, or <a href="#register-modal" class="register-modal-btn">Register</a></span>
                                                        </div>

                                                        <div class="fb-login-btn mb-30">
                                                            <a href="#!">
                                                                <span class="icon">
        																<i class="fab fa-facebook-f"></i>
        															</span> login with facebook
                                                            </a>
                                                        </div>

                                                        <div class="or-text mb-30">
                                                            <span>or sign in</span>
                                                        </div>
                                                        <div id="errorMessage" class="alert alert-danger">
                                                            <span>Email or Password does not match.</span>
                                                        </div>
                                                        <div class="login-form text-center mb-50">
                                                            <form id="login" action="" method="post">

                                                                <div class="form-item">
                                                                    <input type="email" id="emailLogin" name="email" placeholder="example@gmail.com">
                                                                        <span class="text-danger" id="errorEmailLogin"></span>

                                                                </div>
                                                                <div class="form-item">
                                                                    <input type="password" id="passwordLogin" name="password" placeholder="Password">
                                                                        <span class="text-danger" id="errorPasswordLogin"></span>

                                                                </div>
                                                                <button type="submit" class="passket-btn passket-btn-one">Sign In</button>
                                                            </form>
                                                        </div>

                                                        <div class="bottom-text white-color">
                                                            <p class="m-0"><a href="">Forget Password</a></p>
                                                        </div>

                                                    </div>
                                                    <!-- rightside-content - end -->

                                                    <a class="popup-modal-dismiss" href="#!">
                                                        <i class="fas fa-times"></i>
                                                    </a>

                                                </div>
                                            </div>
                                          	</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- menu-item-list - end -->
                                @endguest
                            </div>
                        </div>
                    </div>
                    <!-- mainmenu-wrapper - end -->

                </div>
            </div>
        </div>
        <!-- header-bottom - end -->

    </header>
<!-- header-section - end
	================================================== -->




	

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

@endsection

@section('scripts')

    <script type="text/javascript">
        $(document).ready(function(){
            $('#errorMessageRegister').hide();
            $('#errorMessage').hide();

        });
        $('#register').submit(function(e){
            e.preventDefault();
            $.ajax({
                type:'post',
                url:'{{route("register")}}',
                data:{
                    '_token':'{{csrf_token()}}',
                    'name':$('#name').val(),
                    'email':$('#email').val(),
                    'password':$('#password').val(),
                    'password_confirmation':$('#confirmPassword').val(),
                    'phone':$('#phone').val(),
                },
                async:false,
                success:function(data){
                    
                    if(data.status=='success'){
                        window.location.replace("{{url('/')}}");
                    }
                     if(data.status=='failed'){
                        $('#errorMessageRegister').show();
                        // $('#errorMessageRegister').append('Something went wrong. Please try again.');
                    }
                },
                error:function (error) {

                   if (error.status === 413){

                       console.log('unknown error');

                   } else if (error.status === 422){

                       var invalid = JSON.parse(error.responseText);

                       console.log(invalid);

                       if (invalid.name !== 'undefined'){

                           $('#errorName').empty();

                           $('#errorName').append(invalid.errors.name);

                       }

                       if (invalid.email !== 'undefined'){

                           $('#errorEmail').empty();

                           $('#errorEmail').append(invalid.errors.email);

                       }

                       if (invalid.phone !== 'undefined'){

                           $('#errorPhone').empty();

                           $('#errorPhone').append(invalid.errors.phone);

                       }

                       if (invalid.password !== 'undefined'){

                           $('#errorPassword').empty();

                           $('#errorPassword').append(invalid.errors.password);

                       }
                   }

               }

            });
        });

        $('#login').submit(function(e){
            e.preventDefault();
            $.ajax({
                type:'post',
                url:'{{route("login")}}',
                data:{
                    '_token':'{{csrf_token()}}',
                    'email':$('#emailLogin').val(),
                    'password':$('#passwordLogin').val(),
                },
                async:false,
                success:function(data){
                    
                    if(data.status=='success'){
                        window.location.replace("{{url('/')}}");
                    }
                    if(data.status=='failed'){
                        $('#errorMessage').show();
                        // $('#errorMessage').append('Email or Password does not match.');
                    }
                },
                error:function (error) {

                   if (error.status === 413){

                       console.log('unknown error');

                   } else if (error.status === 422){

                       var invalid = JSON.parse(error.responseText);

                       console.log(invalid);

                       if (invalid.email !== 'undefined'){

                           $('#errorEmailLogin').empty();

                           $('#errorEmailLogin').append(invalid.errors.email);

                       }

                       if (invalid.password !== 'undefined'){

                           $('#errorPasswordLogin').empty();

                           $('#errorPasswordLogin').append(invalid.errors.password);

                       }
                   }

               }

            });
        });
    </script>
@endsection