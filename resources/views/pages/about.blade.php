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

    <!-- page title -->
    <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">About Us</a></li>
                        <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
                    </ul>
                    <p class="text-lighten">SIMBA MONEY LTD its Financial Service Company Co- founded by indeed committed Three Businessman , Registered in Tanzania as Digital/Online Money Remittance Company No 664702. Simba Money Ltd seen the opportunity and advancement of
                        mobile Wallet technology penetration in Africa especially Tanzania and Eastern & Southern Africa,</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- about -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img class="img-fluid w-100 mb-4" src="images/about/about-page.jpg" alt="about image">
                    <h2 class="section-title">ABOUT Simba Money</h2>
                    <p>SIMBA MONEY LTD its Financial Service Company Co- founded by indeed committed Three Businessman , Registered in Tanzania as Digital/Online Money Remittance Company No 664702. Simba Money Ltd seen the opportunity and advancement of
                        mobile Wallet technology penetration in Africa especially Tanzania and Eastern & Southern Africa, Customers don't need to travel distances to receive their Money, decided to develop digital mobile money system to accommodate mobile
                        Application for mobile money remittance to Tanzania and Eastern and Southern Africa (Kenya, Uganda, Rwanda, Burundi, Congo DRC, Zambia , Malawi),</p>
                    <p>Middle East and UAE.The Mobile to mobile application is called Simba Money App, which offer effective, efficient ,cheaper and faster Instant international money transfer service, whereby you can send and receive money from Tanzania
                        to Africa to your family , friends and Business Associate through mobile application in Tanzania (e.g. M-Pesa, EzyPesa, TigoPesa, AirtelMoney, HaloPesa to other Mobile wallet provider in Eastern and Southern African Countries Eg
                        MTN Money, M-Pesa Kenya, M-Pesa Congo, Eco Cash, AirtelMoney Africa and Simba Card for Middle East and UAE</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /about -->

    <!-- funfacts -->
    <section class="section-sm bg-primary">
        <div class="container">
            <div class="row">
                <!-- funfacts item -->
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <div class="text-center">
                        <h2 class="count text-white" data-count="60">0</h2>
                        <h5 class="text-white">TEACHERS</h5>
                    </div>
                </div>
                <!-- funfacts item -->
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <div class="text-center">
                        <h2 class="count text-white" data-count="50">0</h2>
                        <h5 class="text-white">COURSES</h5>
                    </div>
                </div>
                <!-- funfacts item -->
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <div class="text-center">
                        <h2 class="count text-white" data-count="1000">0</h2>
                        <h5 class="text-white">STUDENTS</h5>
                    </div>
                </div>
                <!-- funfacts item -->
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <div class="text-center">
                        <h2 class="count text-white" data-count="3737">0</h2>
                        <h5 class="text-white">SATISFIED CLIENT</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /funfacts -->

    <!-- success story -->
    <section class="section bg-cover" data-background="images/backgrounds/success-story.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-4 position-relative success-video">
                    <a class="play-btn venobox" href="https://youtu.be/nA1Aqp0sPQo" data-vbtype="video">
                        <i class="ti-control-play"></i>
                    </a>
                </div>
                <div class="col-lg-6 col-sm-8">
                    <div class="bg-white p-5">
                        <h2 class="section-title">Success Stories</h2>
                        <p> <strong>OUR VISION</strong> To become number one Digital Money Remittances service provider in Eastern & Southern Africa, Our Motto … efficient, speed and cheaper</p>
                        <p><strong>OUR MISSION</strong>To achieve a market, share of 10% by transaction value to 2025 and gross revenue $1m in 5 years</p>

                        <p><strong>COMPANY OBJECTIVES</strong>The main goal of the company is to become a preferred service provider by being the most convenient and cheaper alternative with the shortest period of sending and receiving money. The six (6)
                            specific objectives for the next five (5) years include; </p>
                        <ul class="list-styled mb-5">
                            <li>To achieve a market share of 10% by transaction value by 2024 </li>
                            <li>To offer 20% lower fee to the current lowest service provider</li>
                            <li>To grow from 30,000 in year one to 62,000 in year five </li>
                            <li>To facilitate transactions of up to USD 55m in year 5 </li>
                            <li>To grow gross revenue to USD 1m in year five</li>
                            <li>To operate in at least 5 markets by 2024</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /success story -->

    <!-- Member -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="section-title">Boards Members</h2>
                </div>
                <!-- Member -->
                <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="images/teachers/teacher-1.jpg" alt="teacher">
                        <div class="card-body">
                            <a href="teacher-single.html">
                                <h4 class="card-title">Mr Farid Nahdi</h4>
                            </a>
                            <div class="d-flex justify-content-between">
                                <span>Member</span>
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
                <!-- Member -->
                <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="images/teachers/teacher-2.jpg" alt="teacher">
                        <div class="card-body">
                            <a href="teacher-single.html">
                                <h4 class="card-title">Mr David Ndelwa</h4>
                            </a>
                            <div class="d-flex justify-content-between">
                                <span>Member</span>
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
                <!-- Member -->
                <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="images/teachers/teacher-3.jpg" alt="teacher">
                        <div class="card-body">
                            <a href="teacher-single.html">
                                <h4 class="card-title">Mr George Kusila</h4>
                            </a>
                            <div class="d-flex justify-content-between">
                                <span>Member</span>
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
    <!-- /Member -->

    <!-- footer -->
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