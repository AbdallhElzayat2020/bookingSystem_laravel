@extends('frontend.layouts.master')

@section('title', 'Home')
@section('content')

    <!--==========================
    BANNER PART START
===========================-->
    @include('frontend.home.sections.banner')
    <!--==========================
        BANNER PART END
    ===========================-->

    <!--==========================
        CATEGORY SLIDER START
    ===========================-->
    @include('frontend.home.sections.category-slider-section')
    <!--==========================
        CATEGORY SLIDER END
    ===========================-->


    <!--==========================
        FEATURES PART START
    ===========================-->
    @include('frontend.home.sections.features-section')
    <!--==========================
        FEATURES PART END
    ===========================-->


    <!--==========================
        COUNTER PART START
    ===========================-->

    <!--==========================
        COUNTER PART END
    ===========================-->


    <!--==========================
        OUR CATEGORY START
    ===========================-->
    @include('frontend.home.sections.featured-category-section')
    <!--==========================
        OUR CATEGORY END
    ===========================-->


    <!--==========================
        OUR LOCATION START
    ===========================-->
    @include('frontend.home.sections.featuredLocation-section')
    <!--==========================
        OUR LOCATION END
    ===========================-->


    <!--==========================
        FEATURED LISTING START
    ===========================-->

    <!--==========================
        FEATURED LISTING END
    ===========================-->
    @include('frontend.home.sections.featuredListing-section')

    <!--==========================
        OUR PACKAGE START
    ===========================-->
    @include('frontend.home.sections.featuredPackage-section')

    <!--==========================
        OUR PACKAGE END
    ===========================-->


    <!--============================
        TESTIMONIAL PART START
    ==============================-->
    @include('frontend.home.sections.testimonials-section')
    <!--============================
        TESTIMONIAL PART END
    ==============================-->


    <!--==========================
        BLOG PART START
    ===========================-->
  @include('frontend.home.sections.featuredBlogs-section')
    <!--==========================
        BLOG PART END
    ===========================-->

@endsection