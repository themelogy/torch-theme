<div class="header-top">
    <div class="header-top-container container">
        <div class="header-row">
            <div class="header-column justify-content-start">
                <ul class="list-infos">
                    <li class="list-info-item-increase-size d-lg-flex">
                        <i class="lnr lnr-phone-handset text-color-primary font-weight-semibold me-1"></i>
                        <a href="tel:@setting('theme::phone')" class="text-color-primary"><strong>@setting('theme::phone')</strong></a>
                    </li>
                    <li class="list-info-item-increase-icon-size d-none d-lg-flex">
                        <i class="lnr lnr-envelope me-1"></i>
                        <a href="mailto:{!! Html::email(setting('theme::email')) !!}">{!! Html::email(setting('theme::email')) !!}</a>
                    </li>
{{--                    <li class="list-info-item-increase-icon-size">--}}
{{--                        <i class="icon icon-location-pin text-2 position-relative top-1 me-1"></i>--}}
{{--                        @setting('theme::address')--}}
{{--                    </li>--}}
                </ul>
            </div>
            <div class="header-column justify-content-end">
                @include('partials.components.socials')
                <a href="{{ route('contact') }}" class="btn btn-primary btn-3 font-weight-bold text-1 rounded-0 ms-3">@lang('themes::contact.contact us')</a>
            </div>
        </div>
    </div>
</div>