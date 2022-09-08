@extends('frontend.layouts.master')
@section('content')

    <!-- Content -->
    <div class="content-wrapper">
        <!-- Lines -->
        <section class="content-lines-wrapper">
            <div class="content-lines-inner">
                <div class="content-lines"></div>
            </div>
        </section>
        <!-- Header Banner -->
        <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-light="3" data-background="img/banner.jpg"> </section>
        <!-- Blog  -->
        <section class="bauen-blog section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title"><span>Tin tức</span></h2>
                    </div>
                </div>
                <div class="row">
                    @foreach($records as $key => $record)
                    <div class="col-md-6">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{$record->getImage()}}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Architecture </a> - {{$record -> getPostSchedule()}}
                                </span>
                                <h5><a href="post.html">{{$record -> title}}</a></h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-md-6">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{!!asset('assets/frontend/img/slider/2.jpg')!!}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Interior</a> - 18.12.2022
                                </span>
                                <h5><a href="post2.html">Modernism in Architecture</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{!!asset('assets/frontend/img/slider/3.jpg')!!}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Urban</a> - 16.12.2022
                                </span>
                                <h5><a href="post3.html">Postmodern Architecture</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{!!asset('assets/frontend/img/slider/4.jpg')!!}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Planing</a> - 14.12.2022
                                </span>
                                <h5><a href="post4.html">Modern Architecture Buildings</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <!-- Pagination -->
                        <ul class="bauen-pagination-wrap align-center mb-30 mt-30">
                            <li><a href="blog.html#"><i class="ti-angle-left"></i></a></li>
                            <li><a href="blog.html#">1</a></li>
                            <li><a href="blog.html#" class="active">2</a></li>
                            <li><a href="blog.html#">3</a></li>
                            <li><a href="blog.html#"><i class="ti-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer -->
        <footer class="main-footer dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-30">
                        <div class="item fotcont">
                            <div class="fothead">
                                <h6>Phone</h6>
                            </div>
                            <p>+1 203-123-0606</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-30">
                        <div class="item fotcont">
                            <div class="fothead">
                                <h6>Email</h6>
                            </div>
                            <p>architecture@bauen.com</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-30">
                        <div class="item fotcont">
                            <div class="fothead">
                                <h6>Our Address</h6>
                            </div>
                            <p>24 King St, Charleston, SC 29401 USA</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-left">
                                <p>© 2022 Bauen. All right reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-4 abot">
                            <div class="social-icon"> <a href="index.html"><i class="ti-facebook"></i></a> <a href="index.html"><i class="ti-twitter"></i></a> <a href="index.html"><i class="ti-instagram"></i></a> <a href="index.html"><i class="ti-pinterest"></i></a> </div>
                        </div>
                        <div class="col-md-4">
                            <p class="right"><a href="#">Terms &amp; Conditions</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@stop