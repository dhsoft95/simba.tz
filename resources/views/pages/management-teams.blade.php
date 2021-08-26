
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
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Our Team</a></li>
                        <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
                    </ul>
                    <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- teachers -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- teacher category list -->
                    <ul class="list-inline text-center filter-controls mb-5">
                        <li class="list-inline-item m-3 text-uppercase active" data-filter="all">All</li>
                        <li class="list-inline-item m-3 text-uppercase" data-filter="arts">CHIEF EXECUTIVE OFFICER</li>
                        <li class="list-inline-item m-3 text-uppercase" data-filter="bio-science">CHIEF FINANCIAL OFFICER </li>
                        <li class="list-inline-item m-3 text-uppercase" data-filter="business-study">AML OFFICER & MLRO</li>
                        <li class="list-inline-item m-3 text-uppercase" data-filter="law">CHIEF TECHNOLOGY OFFICER</li>
                        <li class="list-inline-item m-3 text-uppercase" data-filter="pharmacy">DIGITAL MARKETING & SOCIAL MEDIA OFFICER</li>
                        <li class="list-inline-item m-3 text-uppercase" data-filter="science">OFFICE, ADMIN & OPERATIONS OFFICER </li>
                        <li class="list-inline-item m-3 text-uppercase" data-filter="social-science">CUSTOMER CARE OFFICER </li>
                    </ul>
                </div>
            </div>
            <!-- teacher list -->
            <div class="row filtr-container">
                <!-- teacher -->
                <div data-category="arts, law" class="col-lg-4 col-sm-6 mb-5 filtr-item">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="images/teachers/teacher-1.jpg" alt="teacher">
                        <div class="card-body">
                            <a href="teacher-single.html">
                                <h4 class="card-title">Jacke Masito</h4>
                            </a>
                            <p>Member</p>
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
                <div data-category="bio-science" class="col-lg-4 col-sm-6 mb-5 filtr-item">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="images/teachers/teacher-2.jpg" alt="teacher">
                        <div class="card-body">
                            <a href="teacher-single.html">
                                <h4 class="card-title">Clark Malik</h4>
                            </a>
                            <p>Member</p>
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
                <div data-category="business-study" class="col-lg-4 col-sm-6 mb-5 filtr-item">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="images/teachers/teacher-3.jpg" alt="teacher">
                        <div class="card-body">
                            <a href="teacher-single.html">
                                <h4 class="card-title">John Doe</h4>
                            </a>
                            <p>Member</p>
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
                <div data-category="bio-science, science arts" class="col-lg-4 col-sm-6 mb-5 filtr-item">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="images/teachers/teacher-1.jpg" alt="teacher">
                        <div class="card-body">
                            <a href="teacher-single.html">
                                <h4 class="card-title">Alex Rook</h4>
                            </a>
                            <p>Member</p>
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
                <div data-category="law" class="col-lg-4 col-sm-6 mb-5 filtr-item">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="images/teachers/teacher-2.jpg" alt="teacher">
                        <div class="card-body">
                            <a href="teacher-single.html">
                                <h4 class="card-title">Din Martin</h4>
                            </a>
                            <p>Member</p>
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
                <div data-category="science" class="col-lg-4 col-sm-6 mb-5 filtr-item">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="images/teachers/teacher-3.jpg" alt="teacher">
                        <div class="card-body">
                            <a href="teacher-single.html">
                                <h4 class="card-title">Raka Jim</h4>
                            </a>
                            <p>Member</p>
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
                <div data-category="bio-science" class="col-lg-4 col-sm-6 mb-5 filtr-item">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="images/teachers/teacher-1.jpg" alt="teacher">
                        <div class="card-body">
                            <a href="teacher-single.html">
                                <h4 class="card-title">Devid Luis</h4>
                            </a>
                            <p>Member</p>
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
                <div data-category="pharmacy, social-science, arts" class="col-lg-4 col-sm-6 mb-5 filtr-item">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="images/teachers/teacher-2.jpg" alt="teacher">
                        <div class="card-body">
                            <a href="teacher-single.html">
                                <h4 class="card-title">Zim Cook</h4>
                            </a>
                            <p>Member</p>
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
                <div data-category="business-study" class="col-lg-4 col-sm-6 mb-5 filtr-item">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="images/teachers/teacher-3.jpg" alt="teacher">
                        <div class="card-body">
                            <a href="teacher-single.html">
                                <h4 class="card-title">Duis Riu</h4>
                            </a>
                            <p>Member</p>
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
    </section>
    <!-- /teachers -->

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