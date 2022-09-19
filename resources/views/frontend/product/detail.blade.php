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
        <section class="banner-header banner-img bg-img bg-fixed pb-0" data-background="img/banner.jpg" data-overlay-light="3"></section>
        <!-- Project Page -->
        <section class="project-page section-padding2">
            <div class="container">
                <!-- project slider -->
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            <div class="portfolio-item"> <img class="img-fluid" src="{!! $record->getImage() !!}" alt=""> </div>
                            <!-- <div class="portfolio-item"> <img class="img-fluid" src="img/slider/2.jpg" alt=""> </div>
                            <div class="portfolio-item"> <img class="img-fluid" src="img/slider/3.jpg" alt=""> </div> -->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="project-bar">
                                    <div class="row justify-content-between align-items-center text-left text-lg-start">
                                        <div class="col-md-3 mb-15">
                                            <h5>Tên dự án</h5>
                                            <h6>{!! $record->title !!}</h6>
                                        </div>
                                        <div class="col-md-2 mb-15">
                                            <h5>Giá</h5>
                                            <h6>45 - 85tr/m²</h6>
                                        </div>
                                        <div class="col-md-1 mb-15">
                                            <h5>Quy mô</h5>
                                            <h6>9,55 ha</h6>
                                        </div>
                                        <div class="col-md-4 mb-15">
                                            <h5>Vị trí</h5>
                                            <h6>VSIP Thủy Nguyên - Hải Phòng</h6>
                                        </div>
                                        <div class="col-md-2 mb-15">
                                            <h5>Trạng thái</h5>
                                            <h6>Đã bàn giao</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- project content -->
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title2">{!! $record->title !!}</h2>
                        <p class="mb-30">{!! $record->content !!}</p>
                        <!-- <ul class="list-unstyled page-list mb-30">
                            <li>
                                <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                <div class="page-list-text">
                                    <p>Over 15 years of experience</p>
                                </div>
                            </li>
                            <li>
                                <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                <div class="page-list-text">
                                    <p>200+ successfully executed projects</p>
                                </div>
                            </li>
                            <li>
                                <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                <div class="page-list-text">
                                    <p>Exceptional work quality</p>
                                </div>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Prev-Next Projects -->
        <section class="projects-prev-next">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <div class="projects-prev-next-left">
                                <a href="#"> <i class="ti-arrow-left"></i> Previous Project</a>
                            </div> <a href="#"><i class="ti-layout-grid3-alt"></i></a>
                            <div class="#"> <a href="armada-center.html">Next Project <i class="ti-arrow-right"></i></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
