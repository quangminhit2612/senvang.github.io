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
        <!-- Projects -->
        <section class="projects section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                        <h2 class="section-title"><span>Danh sách dự án</span></h2>
                    </div>
                </div>
                <div class="row">

                    @foreach($records as $key => $record)
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{$record->getImage()}}" alt=""> </div>
                            <div class="con">
                                <h6>Dự án</h6>
                                <h5><a href="{{$record->url()}}">{{$record -> title}}</a></h5>
                                <div class="line"></div> <a href="{{$record->url()}}"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@stop
