@extends('frontend.layouts.master')
@section('content')

<!-- Slider -->
<header class="header slider-fade">
    <div class="owl-carousel owl-theme">
        <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
        <div class="text-left item bg-img" data-overlay-dark="3"
            data-background="{!!asset('assets/frontend/img/slider/1.jpg')!!}">
            <div class="v-middle caption mt-30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <h1>Innovate Desing in Toronto</h1>
                            <p>Architecture viverra tellus nec massa dictum the euismoe.
                                <br>Curabitur viverra the posuere aukue velit.
                            </p>
                            <div class="butn-light mt-30 mb-30"> <a href="https://1.envato.market/mDnXD"
                                    target="_blank"><span>Xem thêm</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-left item bg-img" data-overlay-dark="4"
            data-background="{!!asset('assets/frontend/img/slider/2.jpg')!!}">
            <div class="v-middle caption mt-30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <h1>Innovate Desing in Canada</h1>
                            <p>Architecture viverra tellus nec massa dictum the euismoe.
                                <br>Curabitur viverra the posuere aukue velit.
                            </p>
                            <div class="butn-light mt-30 mb-30"> <a href="https://1.envato.market/mDnXD"
                                    target="_blank"><span>Xem thêm</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Content -->
<div class="content-wrapper">
    <!-- Lines -->
    <section class="content-lines-wrapper">
        <div class="content-lines-inner">
            <div class="content-lines"></div>
        </div>
    </section>
    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <h2 class="section-title"><span>Về chúng tôi</span></h2>
                    <p>Architecture viverra tristique justo duis vitae diam neque nivamus aestan ateuene artines
                        aringianu atelit finibus viverra nec lacus. Nedana theme erodino setlie suscipe no curabit
                        tristique.</p>
                    <p>Design inilla duiman at elit finibus viverra nec a lacus themo the drudea seneoice misuscipit
                        non sagie the fermen.</p>
                    <p>Planner inilla duiman at elit finibus viverra nec a lacus themo the drudea seneoice
                        misuscipit non sagie the fermen. Viverra tristique jusio the ivite dianne onen nivami
                        acsestion augue artine.</p>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="about-img">
                        <div class="img"> <img src="{!!asset('assets/frontend/img/about.jpg')!!}" class="img-fluid"
                                alt=""> </div>
                        <div class="about-img-2 about-buro">Canada Office</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Projects -->
    <section class="projects section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title"><span>Dự án nổi bật</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="position-re o-hidden"> <img
                                    src="{!!asset('assets/frontend/img/projects/1.jpg')!!}" alt=""> </div>
                            <div class="con">
                                <h6><a href="cotton-house.html">Interior</a></h6>
                                <h5><a href="cotton-house.html">Cotton House</a></h5>
                                <div class="line"></div> <a href="cotton-house.html"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img
                                    src="{!!asset('assets/frontend/img/projects/2.jpg')!!}" alt=""> </div>
                            <div class="con">
                                <h6><a href="armada-center.html">Exterior</a></h6>
                                <h5><a href="armada-center.html">Armada Center</a></h5>
                                <div class="line"></div> <a href="armada-center.html"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img
                                    src="{!!asset('assets/frontend/img/projects/3.jpg')!!}" alt=""> </div>
                            <div class="con">
                                <h6><a href="stonya-villa.html">Urban</a></h6>
                                <h5><a href="stonya-villa.html">Stonya Villa</a></h5>
                                <div class="line"></div> <a href="stonya-villa.html"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/projects/4.jpg" alt=""> </div>
                            <div class="con">
                                <h6><a href="prime-hotel.html">Interior</a></h6>
                                <h5><a href="prime-hotel.html">Prime Hotel</a></h5>
                                <div class="line"></div> <a href="prime-hotel.html"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->
    <section class="services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title"><span>Dịch vụ của chúng tôi</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="item">
                        <a href="architecture.html"> <img src="{!!asset('assets/frontend/img/icons/icon-1.png')!!}"
                                alt="">
                            <h5>Architecture</h5>
                            <div class="line"></div>
                            <p>Architecture bibendum eros eget lacus the vulputate sit amet vehicuta nibhen ulicera
                                in the vitae miss.</p>
                            <div class="numb">01</div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <a href="interior-design.html"> <img src="{!!asset('assets/frontend/img/icons/icon-2.png')!!}"
                                alt="">
                            <h5>Interior Design</h5>
                            <div class="line"></div>
                            <p>Architecture bibendum eros eget lacus the vulputate sit amet vehicuta nibhen ulicera
                                in the vitae miss.</p>
                            <div class="numb">02</div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <a href="urban-design.html"> <img src="{!!asset('assets/frontend/img/icons/icon-3.png')!!}"
                                alt="">
                            <h5>Urban Design</h5>
                            <div class="line"></div>
                            <p>Architecture bibendum eros eget lacus the vulputate sit amet vehicuta nibhen ulicera
                                in the vitae miss.</p>
                            <div class="numb">03</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog -->
    <section class="bauen-blog section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title"><span>Tin tức tiêu điểm</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="position-re o-hidden"> <img
                                    src="{!!asset('assets/frontend/img/slider/1.jpg')!!}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Architecture </a> - 20.12.2022
                                </span>
                                <h5><a href="post.html">Modern Architectural Structures</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img
                                    src="{!!asset('assets/frontend/img/slider/2.jpg')!!}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Interior</a> - 18.12.2022
                                </span>
                                <h5><a href="post.html">Modernism in Architecture</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img
                                    src="{!!asset('assets/frontend/img/slider/3.jpg')!!}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Urban</a> - 16.12.2022
                                </span>
                                <h5><a href="post.html">Postmodern Architecture</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img
                                    src="{!!asset('assets/frontend/img/slider/4.jpg')!!}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Planing</a> - 14.12.2022
                                </span>
                                <h5><a href="post.html">Modern Architecture Buildings</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>


@stop