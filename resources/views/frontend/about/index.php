@extends('frontend.layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="zxx">

<head>
</head>
<body>
    <!-- Preloader -->
    <div id="preloader"></div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="index.html"> <img src="img/logo.png" alt=""> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="ti-line-double"></i></span> </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link nav-color" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="about.html">About</a></li>
                    <li class="nav-item dropdown"> <span class="nav-link nav-color"> Services <i class="ti-angle-down"></i></span>
                        <ul class="dropdown-menu last">
                            <li class="dropdown-item"><a href="services.html">Services 01</a></li>
                            <li class="dropdown-item"><a href="services2.html">Services 02</a></li>
                            <li class="dropdown-item"><a href="services3.html">Services 03</a></li>
                            <li class="dropdown-item"><a href="services4.html">Services 04</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"> <span class="nav-link nav-color"> Projects <i class="ti-angle-down"></i></span>
                        <ul class="dropdown-menu last">
                            <li class="dropdown-item"><a href="projects.html">Projects 01</a></li>
                            <li class="dropdown-item"><a href="projects2.html">Projects 02</a></li>
                            <li class="dropdown-item"><a href="projects3.html">Projects 03</a></li>
                            <li class="dropdown-item"><a href="projects4.html">Projects 04</a></li>
                            <li class="dropdown-item"><a href="project-gallery.html">Project Gallery</a></li>
                            <li class="dropdown-item"><a href="project-page.html">Project Page</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"> <span class="nav-link nav-color"> Pages <i class="ti-angle-down"></i></span>
                        <ul class="dropdown-menu last">
                            <li class="dropdown-item"><a href="video.html">Video Background</a></li>
                            <li class="dropdown-item"><a href="before-after.html">Before After</a></li>
                            <li class="dropdown-item"><a href="pricing.html">Pricing</a></li>
                            <li class="dropdown-item"><a href="team.html">Team</a></li>
                            <li class="dropdown-item"><a href="careers.html">Careers</a></li>
                            <li class="dropdown-item"><a href="testimonials.html">Testimonials</a></li>
                            <li class="dropdown-item"><a href="faqs.html">Faqs</a></li>
                            <li class="dropdown-item"><a href="gallery.html">Gallery</a></li>
                            <li class="dropdown-item"><a href="video-gallery.html">Video Gallery</a></li>
                            <li class="dropdown-item"><a href="process.html">Process</a></li><li class="dropdown-item"><a href="parallax-home.html">Parallax Home</a></li>
                            <li class="dropdown-item"><a href="coming-soon.html">Coming Soon</a></li>
                            <li class="dropdown-item"><a href="not-found-404.html">404 Page</a></li>
                            <!-- Dropdown 3. level
						<li class="dropdown-item"><span>Dropdown 2 <i class="ti-angle-right"></i></span>
                            <ul class="sub-menu">
                                <li class="dropdown-item"><a href="#">Dropdown 3</a></li>
                                <li class="dropdown-item"><a href="#">Dropdown 3</a></li>
                            </ul>
                        </li>
                        -->
                        </ul>
                    </li>
                    <li class="nav-item dropdown"> <span class="nav-link nav-color"> Blog <i class="ti-angle-down"></i></span>
                        <ul class="dropdown-menu last">
                            <li class="dropdown-item"><a href="blog.html">Blog 01</a></li>
                            <li class="dropdown-item"><a href="blog2.html">Blog 02</a></li>
                            <li class="dropdown-item"><a href="blog3.html">Blog 03</a></li>
                            <li class="dropdown-item"><a href="blog4.html">Blog 04</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link nav-color" href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Content -->
    <div class="content-wrapper">
        <!-- Lines -->
        <section class="content-lines-wrapper">
            <div class="content-lines-inner">
                <div class="content-lines"></div>
            </div>
        </section>
        <!-- Header Banner -->
        <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-light="3" data-background="img/banner.jpg"></section>
        <!-- About -->
        <section class="about section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <h2 class="section-title">About <span>Bauen</span></h2>
                        <p>Architecture viverra tristique justo duis vitae diam neque nivamus aestan ateuene artines aringianu atelit finibus viverra nec lacus. Nedana theme erodino setlie suscipe no curabit tristique.</p>
                        <p>Design inilla duiman at elit finibus viverra nec a lacus themo the drudea seneoice misuscipit non sagie the fermen.</p>
                        <p>Planner inilla duiman at elit finibus viverra nec a lacus themo the drudea seneoice misuscipit non sagie the fermen.</p>
                    </div>
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                        <div class="about-img">
                            <div class="img"> <img src="img/about.jpg" class="img-fluid" alt=""> </div>
                            <div class="about-img-2 about-buro">Canada Office</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team -->
        <section class="team section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title">Our <span>Team</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 owl-carousel owl-theme">
                        <div class="item">
                            <div class="img">
                                <a href="team-details.html"><img src="img/team/1.jpg" alt=""></a>
                            </div>
                            <div class="info">
                                <h6>Jason Brown</h6>
                                <p>Architect</p>
                                <div class="social valign">
                                    <div class="full-width">
                                        <p>dipl. Arch ETH/SIA</p> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter-alt"></i></a> <a href="#"><i class="ti-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <a href="team-details.html"><img src="img/team/2.jpg" alt=""></a>
                            </div>
                            <div class="info">
                                <h6>Emily White</h6>
                                <p>Architect</p>
                                <div class="social valign">
                                    <div class="full-width">
                                        <p>dipl. Arch FH</p> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter-alt"></i></a> <a href="#"><i class="ti-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <a href="team-details.html"><img src="img/team/3.jpg" alt=""></a>
                            </div>
                            <div class="info">
                                <h6>Enrico Samara</h6>
                                <p>Architect</p>
                                <div class="social valign">
                                    <div class="full-width">
                                        <p>M.A. FH in Architecture</p> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter-alt"></i></a> <a href="#"><i class="ti-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <a href="team-details.html"><img src="img/team/4.jpg" alt=""></a>
                            </div>
                            <div class="info">
                                <h6>Jesica Smith</h6>
                                <p>Architect</p>
                                <div class="social valign">
                                    <div class="full-width">
                                        <p>M.A. FH in Architecture</p> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter-alt"></i></a> <a href="#"><i class="ti-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <a href="team-details.html"><img src="img/team/5.jpg" alt=""></a>
                            </div>
                            <div class="info">
                                <h6>Olivia Brown</h6>
                                <p>Architect</p>
                                <div class="social valign">
                                    <div class="full-width">
                                        <p>dipl. Arch FH</p> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter-alt"></i></a> <a href="#"><i class="ti-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <a href="team-details.html"><img src="img/team/6.jpg" alt=""></a>
                            </div>
                            <div class="info">
                                <h6>Fredia Martin</h6>
                                <p>Architect</p>
                                <div class="social valign">
                                    <div class="full-width">
                                        <p>M.A. FH in Architecture</p> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter-alt"></i></a> <a href="#"><i class="ti-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Career -->
        <section class="positions section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 mb-30 text-center">
                        <h2 class="section-title">Job <span>Opening</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-60">
                        <div class="position"><a class="position-link" href="contact.html"></a>
                            <div class="position-title">Project Manager <span>Development</span></div>
                            <div class="position-location"><span>Location</span> New York, NY</div>
                            <div class="position-time">Employment Type <span>Full-time</span></div>
                            <div class="position-icon"><i class="ti-arrow-top-right"></i></div>
                        </div>
                        <div class="position"><a class="position-link" href="contact.html"></a>
                            <div class="position-title">Staff Design Architect <span>Development</span></div>
                            <div class="position-location"><span>Location</span> San Francisco, CA</div>
                            <div class="position-time">Employment Type <span>Full-time</span></div>
                            <div class="position-icon"><i class="ti-arrow-top-right"></i></div>
                        </div>
                        <div class="position"><a class="position-link" href="contact.html"></a>
                            <div class="position-title">Senior Exhibit Designer <span>Development</span></div>
                            <div class="position-location"><span>Location</span> New York, NY</div>
                            <div class="position-time">Employment Type <span>Full-time</span></div>
                            <div class="position-icon"><i class="ti-arrow-top-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p><small>Please submit a resume and cover letter with compensation history to <b>architecture[at]bauen.com</b>.</small></p>
                    </div>
                </div>
            </div>
        </section>
        
    </div>

</body>

</html>
@stop