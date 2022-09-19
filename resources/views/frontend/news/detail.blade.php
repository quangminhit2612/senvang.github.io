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
            </div>
        </section>
    </div>

@stop