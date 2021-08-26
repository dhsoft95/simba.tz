
@extends('layouts.master')

@section('content')

<!-- preloader start -->
<div class="preloader">
    <img src="images/preloader.gif" alt="preloader">
</div>
<!-- preloader end -->

<!-- header -->
<header class="fixed-top header">
    <!-- top header -->
    <div class="top-header py-2 bg-white">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4 text-center text-lg-left">
                    <a class="text-color mr-3" href="callto:+443003030266"><strong>CALL</strong> +255 757 010101</a>
                    <ul class="list-inline d-inline">
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-facebook"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-linkedin"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-8 text-center text-lg-right">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="notice.html">notice</a></li>
                        <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="research.html">research</a></li>
                        <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="/management">Management teams</a></li>
                        <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#loginModal">login</a></li>
                        <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupModal">register</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- navbar -->
    <div class="navigation w-100">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a class="navbar-brand" href="/"><img src="images/logoo.png" alt="logo"></a>
                <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item @@about">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        {{-- <li class="nav-item @@events">
                            <a class="nav-link" href="/events">EVENTS</a>
                        </li> --}}
                        <li class="nav-item dropdown view">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              More
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/management">Management teams</a>
                                <a class="dropdown-item" href="/member_single">members</a>

                            </div>
                        </li>
                        <li class="nav-item @@contact">
                            <a class="nav-link" href="/contact">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- /header -->
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- hero slider -->
<section class="hero-section overlay bg-cover" data-background="images/banner/banner-01.jpg">
    <div class="container">
        <div class="hero-slider">
            <!-- slider item -->
            <div class="hero-slider-item">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">African Money Transfers</h1>
                        <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">Send instant money to your family and friends with Simba Money Instant, money transfer system , allowing user to receive money from across the globe</p>
                        <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Apply now</a>
                    </div>
                </div>
            </div>
            <!-- slider item -->
            <div class="hero-slider-item">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Your bright future is our mission</h1>
                        <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
                        <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Apply now</a>
                    </div>
                </div>
            </div>
            <!-- slider item -->
            <!-- <div class="hero-slider-item">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Your bright future is our mission</h1>
                        <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
                        <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Apply now</a>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</section>
<!-- /hero slider -->

<!-- banner-feature -->
<section class="bg-gray overflow-md-hidden">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-xl-4 col-lg-5 align-self-end">
                <img class="img-fluid w-100" src="images/banner/banner-feature.png" alt="banner-feature">
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="row feature-blocks bg-gray justify-content-between">
                    <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                        <i class="ti-book mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                        <h3 class="mb-xl-4 mb-lg-3 mb-4">More Good Security</h3>
                        <p>Your personal information is protected and confidential!</p>
                    </div>
                    <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                        <i class="ti-location-arrow mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                        <h3 class="mb-xl-4 mb-lg-3 mb-4">Easy to Use</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
                    </div>
                    <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                        <i class="ti-wallet mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                        <h3 class="mb-xl-4 mb-lg-3 mb-4">Low cost</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
                    </div>
                    <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                        <i class="ti-lock mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                        <h3 class="mb-xl-4 mb-lg-3 mb-4">Safe and secure</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /banner-feature -->

<!-- about us -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-2 order-md-1">
                <h2 class="section-title">About Simba Money</h2>
                <p>SIMBA MONEY LTD its Financial Service Company Co- founded by indeed committed Three Businessman , Registered in Tanzania as Digital/Online Money Remittance Company No 664702. Simba Money Ltd seen the opportunity and advancement of
                    mobile Wallet technology penetration in Africa especially Tanzania and Eastern & Southern Africa, Customers don't need to travel distances to receive their Money, decided to develop digital mobile money system to accommodate mobile
                    Application for mobile money remittance to Tanzania and Eastern and Southern Africa (Kenya, Uganda, Rwanda, Burundi, Congo DRC, Zambia ,, Malawi) </p>
                <p>Middle East and UAE.The Mobile to mobile application is called Simba Money App, which offer effective, efficient ,cheaper</p>
                <a href="/about" class="btn btn-primary-outline">Learn more</a>
            </div>
            <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
                <img class="img-fluid w-100" src="images/about/about-us.png" alt="about image">
            </div>
        </div>
    </div>
</section>
<!-- /about us -->

<!-- cta -->
<section class="section bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                
                
                <img class="img-fluid w-100" src="images/partiners.png" alt="about image">
               
            </div>
        </div>
    </div>
</section>
<!-- /cta -->

<!-- success story -->
<section class="section bg-cover" data-background="images/backgrounds/success-story.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-8">
                <div class="bg-white p-5">
                    <h2 class="section-title"><span><i class="ti-eye  mb-xl-4 mb-lg-3 mb-4 feature-icon"></i></span> VISION</h2>
                    <p> To become number one Digital Money Remittances service provider in Eastern & Southern Africa, Our Motto … efficient, speed and cheaper</p>
                    

                </div>

            </div>
            <div class="col-lg-6 col-sm-8">
                <div class="bg-white p-5">
                    <h2 class="section-title"><span><i class="ti-shine  mb-xl-4 mb-lg-3 mb-4 feature-icon"></i></span> OUR MISSION</h2>
                    <p><strong></strong>To achieve a market, share of 10% by transaction value to 2025 and gross revenue $1m in 5 years efficient, speed and cheaper</p>

                </div>

            </div>
        </div>
    </div>
</section>
<!-- /success story -->

<!-- events -->
<section class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center section-title justify-content-between">
                    <h2 class="mb-0 text-nowrap mr-3">exchange rates</h2>
                    <div class="border-top w-100 border-primary d-none d-sm-block"></div>
                    <div>
                        <a href="events.html" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">see all</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- event -->
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card border-0 rounded-0 hover-shadow">
                    <div class="card-img position-relative">
                        <!-- Please do not edit this code - https://xeconvert.com/currency-converter-widget starts here -->
                        <iframe src="https://xeconvert.com/widget1?from=usd&to=eur&lang=&theme=yellow&font=12" width="100%" height="300" frameborder="0" scrolling="no"></iframe>
                        <div style="font-size:12px;font-family:arial;text-align:right;">
                        </div><!-- https://xeconvert.com/currency-converter-widget ends here -->
                    </div>
                    <div class="card-body">
                        <!-- location -->
                        
                    </div>
                </div>
            </div>
            <!-- event -->
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card border-0 rounded-0 hover-shadow">
                    <div class="card-img position-relative">
                    </div>
                    <div class="card-body">
                        <!-- location -->
                        <p><i class="text-primary mr-2"></i>
                            Our calculator will help you find the current exchange rate and the transaction fee applicable to the amount you want to transfer. It will also let you know how much your beneficiary will receive in his/her local currency.
                        </p></p>
                        <a href="event-single.html">
                            <h4 class="card-title">Save money by getting the best daily exchange rates from us.</h4>
                        </a>
                    </div>
                </div>
            </div>
            <!-- event -->
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card border-0 rounded-0 hover-shadow">
                    <div class="card-img position-relative">
                    <form action="">
                        <label for="">country</label>
                        <select class=" form-control form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Receiver</label>
                            <input class="form-control" type="file" id="formFile">
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Sender</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1">
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Amount</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1">
                          </div>
                        
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Reason</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1">
                          </div>
                          <input type="button" class="btn btn-warning"  name="send" value="send">
                    </form>
                    </div>
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile see all button -->
        <div class="row">
            <div class="col-12 text-center">
                <a href="course.html" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
            </div>
        </div>
    </div>
</section>
<!-- /events -->

<!-- teachers -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="section-title">Boards Members</h2>
            </div>
            <!-- teacher -->
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card border-0 rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="images/teachers/teacher-1.jpg" alt="teacher">
                    <div class="card-body">
                        <a href="teacher-single.html">
                            <h4 class="card-title">Mr Farid Nahdi</h4>
                        </a>
                        <p>Chairman</p>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
                            <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                            <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
                            <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- teacher -->
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card border-0 rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="images/teachers/teacher-2.jpg" alt="teacher">
                    <div class="card-body">
                        <a href="teacher-single.html">
                            <h4 class="card-title">David Ndelwa</h4>
                        </a>
                        <p>vice chairman & executive director</p>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
                            <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                            <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
                            <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- teacher -->
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card border-0 rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="images/teachers/teacher-3.jpg" alt="teacher">
                    <div class="card-body">
                        <a href="teacher-single.html">
                            <h4 class="card-title">Mr George Kusila </h4>
                        </a>
                        <p>CEO</p>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
                            <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                            <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
                            <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="images/teachers/teacher-3.jpg" alt="teacher">
                        <div class="card-body">
                            <a href="teacher-single.html">
                                <h4 class="card-title">Mr George Kusila </h4>
                            </a>
                            <p>CEO</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="images/teachers/teacher-3.jpg" alt="teacher">
                        <div class="card-body">
                            <a href="teacher-single.html">
                                <h4 class="card-title">Mr George Kusila </h4>
                            </a>
                            <p>CEO</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
        

        

            </div>
        </div>
    </div>
    
</section>
<!-- /teachers -->

<!-- blog -->
<section class="section pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title">Latest News</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- blog post -->
            <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="images/blog/post-1.jpg" alt="Post thumb">
                    <div class="card-body">
                        <!-- post meta -->
                        <ul class="list-inline mb-3">
                            <!-- post date -->
                            <li class="list-inline-item mr-3 ml-0">August 28, 2018</li>
                            <!-- author -->
                            <li class="list-inline-item mr-3 ml-0">By Somrat Sorkar</li>
                        </ul>
                        <a href="blog-single.html">
                            <h4 class="card-title">Lorem ipsum dolor amet, adipisicing eiusmod tempor.</h4>
                        </a>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
                        <a href="blog-single.html" class="btn btn-primary btn-sm">read more</a>
                    </div>
                </div>
            </article>
            <!-- blog post -->
            <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="images/blog/post-2.jpg" alt="Post thumb">
                    <div class="card-body">
                        <!-- post meta -->
                        <ul class="list-inline mb-3">
                            <!-- post date -->
                            <li class="list-inline-item mr-3 ml-0">August 13, 2018</li>
                            <!-- author -->
                            <li class="list-inline-item mr-3 ml-0">By Jonathon Drew</li>
                        </ul>
                        <a href="blog-single.html">
                            <h4 class="card-title">Lorem ipsum dolor amet, adipisicing eiusmod tempor.</h4>
                        </a>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
                        <a href="blog-single.html" class="btn btn-primary btn-sm">read more</a>
                    </div>
                </div>
            </article>
            <!-- blog post -->
            <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="images/blog/post-3.jpg" alt="Post thumb">
                    <div class="card-body">
                        <!-- post meta -->
                        <ul class="list-inline mb-3">
                            <!-- post date -->
                            <li class="list-inline-item mr-3 ml-0">August 24, 2018</li>
                            <!-- author -->
                            <li class="list-inline-item mr-3 ml-0">By Alex Pitt</li>
                        </ul>
                        <a href="blog-single.html">
                            <h4 class="card-title">Lorem ipsum dolor amet, adipisicing eiusmod tempor.</h4>
                        </a>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
                        <a href="blog-single.html" class="btn btn-primary btn-sm">read more</a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
<!-- /blog -->

<!-- footer -->
<footer>
    <!-- newsletter -->
    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-9 ml-auto bg-primary py-5 newsletter-block">
                    <h3 class="text-white">Subscribe Now</h3>
                    <form action="#">
                        <div class="input-wrapper">
                            <input type="email" class="form-control border-0" id="newsletter" name="newsletter" placeholder="Enter Your Email...">
                            <button type="submit" value="send" class="btn btn-primary">Join</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- footer content -->
    <div class="footer bg-footer section border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
                    <!-- logo -->
                    <a class="logo-footer" href="index.html"><img class="img-fluid mb-4" src="images/logoo.png" alt="logo"></a>
                    <ul class="list-unstyled">
                        <li class="mb-2">23621 15 Mile Rd #C104, Clinton MI, 48035, New York, USA</li>
                        <li class="mb-2">+1 (2) 345 6789</li>
                        <li class="mb-2">+1 (2) 345 6789</li>
                        <li class="mb-2">contact@yourdomain.com</li>
                    </ul>
                </div>
                <!-- company -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                    <h4 class="text-white mb-5">COMPANY</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a class="text-color" href="about.html">Simba Courier</a></li>
                        <li class="mb-3"><a class="text-color" href="teacher.html">Simba Foods</a></li>
                        <li class="mb-3"><a class="text-color" href="contact.html">Simba Logistic</a></li>
                        <li class="mb-3"><a class="text-color" href="blog.html">Simba Oil</a></li>
                    </ul>
                </div>
                <!-- links -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                    <h4 class="text-white mb-5">LINKS</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a class="text-color" href="courses.html">Courses</a></li>
                        <li class="mb-3"><a class="text-color" href="event.html">Events</a></li>
                        <li class="mb-3"><a class="text-color" href="gallary.html">Gallary</a></li>
                        <li class="mb-3"><a class="text-color" href="faqs.html">FAQs</a></li>
                    </ul>
                </div>
                <!-- support -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                    <h4 class="text-white mb-5">SERVICE COUNTRIES</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a class="text-color" href="#">Congo DRC</a></li>
                        <li class="mb-3"><a class="text-color" href="#">Kenya</a></li>
                        <li class="mb-3"><a class="text-color" href="#">Rwanda</a></li>
                        <li class="mb-3"><a class="text-color" href="#">Burundi</a></li>
                        <li class="mb-3"><a class="text-color" href="#">Malawi</a></li>
                        <li class="mb-3"><a class="text-color" href="#">Uganda</a></li>
                        <li class="mb-3"><a class="text-color" href="#">Zambia</a></li>
                    </ul>
                </div>
                <!-- support -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                    <h4 class="text-white mb-5">PRODUCT & SERVICE</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a class="text-color" href="#">Simba money App</a></li>
                        <li class="mb-3"><a class="text-color" href="#">Simba Money Ussd Code</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright -->
    <div class="copyright py-4 bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 text-sm-left text-center">
                    <p class="mb-0">Copyright
                        <script>
                            var CurrentYear = new Date().getFullYear()
                            document.write(CurrentYear)
                        </script>
                        © SimbaMoney</p>
                </div>
                <div class="col-sm-5 text-sm-right text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-facebook text-primary"></i></a></li>
                        <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-twitter-alt text-primary"></i></a></li>
                        <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-linkedin text-primary"></i></a></li>
                        <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-instagram text-primary"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
    
@endsection