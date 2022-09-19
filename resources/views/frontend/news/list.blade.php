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
                                    <a href="blog.html">Tin tức </a> - {{$record -> getPostSchedule()}}
                                </span>
                                <h5><a href="{{$record->url()}}">{{$record -> title}}</a></h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
    </div>
@stop