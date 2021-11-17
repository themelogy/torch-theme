@extends('layouts.master')

@section('content')
        @component('partials.components.title', ['breadcrumbs' => 'contact'])
            @lang('themes::contact.title')
        @endcomponent
        @includeIf('contact::map')
        <section class="section">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h2 class="font-weight-bold appear-animation" data-appear-animation="fadeInUpShorter">@lang('themes::contact.contact us')</h2>
                        <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">@lang('themes::contact.messages.info')</p>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-12 col-md-4 col-lg-12 mb-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter">
                                <div class="icon-box icon-box-style-1">
                                    <div class="icon-box-icon">
                                        <i class="lnr lnr-apartment text-color-primary"></i>
                                    </div>
                                    <div class="icon-box-info mt-1">
                                        <div class="icon-box-info-title">
                                            <h3 class="font-weight-bold text-4 mb-0">@lang('themes::contact.address')</h3>
                                        </div>
                                        <p>@setting('theme::address')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-12 mb-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                                <div class="icon-box icon-box-style-1">
                                    <div class="icon-box-icon icon-box-icon-no-top">
                                        <i class="lnr lnr-envelope text-color-primary"></i>
                                    </div>
                                    <div class="icon-box-info mt-1">
                                        <div class="icon-box-info-title">
                                            <h3 class="font-weight-bold text-4 mb-0">@lang('themes::contact.email')</h3>
                                        </div>
                                        <p><a href="mailto:@setting('theme::email')">@setting('theme::email')</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-12 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                                <div class="icon-box icon-box-style-1">
                                    <div class="icon-box-icon">
                                        <i class="lnr lnr-phone-handset text-color-primary"></i>
                                    </div>
                                    <div class="icon-box-info mt-1">
                                        <div class="icon-box-info-title">
                                            <h3 class="font-weight-bold text-4 mb-0">@lang('themes::contact.phone')</h3>
                                        </div>
                                        <p><a href="tel:@setting('theme::phone')">@setting('theme::phone')</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <a href="https://www.google.com/maps/dir/Current+Location/{{ setting('contact::contact-map-lat').','.setting('contact::contact-map-lng') }}" class="btn btn-primary btn-rounded btn-4 font-weight-semibold text-0" target="_blank">YOL TARİFİ AL</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 appear-animation" data-appear-animation="fadeInRightShorter">
                        @includeIf('contact::form')
                    </div>
                </div>
            </div>
        </section>
@endsection