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
        <!-- Post -->
        <section class="section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> <img src="{{$record->getImage()}}" class="mb-30" alt="">
                        <h2 class="section-title2">{{$record->title}}</h2>
                        {!! $record->content !!}
                    </div>
                </div>
                <div class="bauen-comment-section">
                    <div class="row">
                        <!-- Comment -->
                        <div class="col-md-7">
                            <div class="bauen-post-comment-wrap">
                                <div class="bauen-user-comment"> <img src="img/team/1.jpg" alt=""> </div>
                                <div class="bauen-user-content">
                                    <h3>Robert Misse<span> 29 October 2022</span></h3>
                                    <p>Photography ultricies nibh non dolor maximus sceleue inte molliser faubs neque nec tincidunte aliquam erat volutpat. Praeser tempor malade yap. </p> <a class="bauen-repay" href="#">Reply<i class="ti-back-left"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Contact Form -->
                        <div class="col-md-4 offset-md-1">
                            <h3>Leave a Reply</h3>
                            <form method="post" class="row">
                                <div class="col-md-12">
                                    <input type="text" name="name" id="name" placeholder="Full Name *" required="">
                                </div>
                                <div class="col-md-12">
                                    <input type="email" name="email" id="email" placeholder="Email Address *" required="">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" id="message" cols="40" rows="4" placeholder="Your Comment *" required=""></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button class="butn-dark mt-15"><a href="#0"><span>Send</span></a></button>
                                </div>
                            </form>
                        </div>
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