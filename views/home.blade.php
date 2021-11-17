@extends('layouts.master')

@section('content')
    @themeSlide('anasayfa', 'slide3')
    @include('page::widgets.home.services.slider-bottom-box-3')
    @include('page::widgets.home.process.process-1')
    @portfolioLatest(10, 'home.latest-2')
    @portfolioBrands()
{{--    @include('page::widgets.home.about.about-1')--}}
{{--    @include('page::widgets.home.counters.counter-1')--}}
{{--    @include('page::widgets.home.testimonials.testimonial-1')--}}
{{--    @include('page::widgets.home.services.box-6-icon')--}}
    @include('page::widgets.home.call.call-1')
@endsection