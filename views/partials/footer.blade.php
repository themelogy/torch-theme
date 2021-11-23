@inject("menuService", "Modules\Menu\Services\MenuService")
<footer id="footer" class="footer bg-light mt-0">
    <div class="container">
        <div class="footer-top-featured-boxes featured-boxes">
            <div class="row">
                <div class="featured-box col-lg-4">
                    <a class="text-decoration-none" href="#">
                        <img src="{{ Theme::url('img/icons/home-construction.svg') }}" class="img-responsive appear-animation"
                             data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100" style="filter: invert(50%)"
                             alt="İnşaat"/>
                        <div class="d-inline-block appear-animation p-md-2" data-appear-animation="fadeInLeftShorter"
                             data-appear-animation-delay="150">
                            <h2 class="font-weight-bold text-4 mb-0">İNŞAAT</h2>
                            <p>Anahtar teslim tadilat olarak ev ve iş yeri</p>
                        </div>
                    </a>
                </div>
                <div class="featured-box col-lg-4">
                    <a class="text-decoration-none" href="#">
                        <img src="{{ Theme::url('img/icons/home.svg') }}" class="img-responsive appear-animation mr-2"
                             data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300" style="filter: invert(50%)"
                             alt="Emlak"/>
                        <div class="d-inline-block appear-animation p-md-2" data-appear-animation="fadeInLeftShorter"
                             data-appear-animation-delay="350">
                            <h2 class="font-weight-bold text-4 mb-0">EMLAK</h2>
                            <p>Villa, konut, arsa alım, satım ve kiralama</p>
                        </div>
                    </a>
                </div>
                <div class="featured-box col-lg-4">
                    <a class="text-decoration-none" href="#">
                        <img src="{{ Theme::url('img/icons/car.svg') }}" class="img-responsive appear-animation mr-2"
                             data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500" style="filter: invert(50%)"
                             alt="Otomotiv"/>
                        <div class="d-inline-block appear-animation p-md-2" data-appear-animation="fadeInLeftShorter"
                             data-appear-animation-delay="550">
                            <h2 class="font-weight-bold text-4 mb-0">OTOMOTİV</h2>
                            <p>Tüm marka araçların satış ve kiralanması</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 align-self-center text-center mb-5 mb-lg-0">
                <a href="@homepage" class="logo">
                    <img src="{{ Theme::url('images/logo/logo-icon-dark.svg') }}" class="img-responsive mb-lg-5" alt="@setting('theme::company-name')" style="width: 100%;">
                </a>
            </div>
            <div class="col-lg-3 text-center text-lg-start mb-5 mb-lg-0">
                <h4 class="font-weight-bold text-4-5 pb-1 mb-3">@lang('themes::contact.contact us')</h4>
                <ul class="list list-unstyled">
                    <li class="pb-1 mb-2">
                        <span class="d-block font-weight-semibold line-height-1">@lang('themes::contact.address')</span>
                        @setting('theme::address')
                    </li>
                    <li class="text-color-light pb-1 mb-2">
                        <span class="d-block font-weight-semibold line-height-1">@lang('themes::contact.phone')</span>
                        <a href="tel:@setting('theme::phone')">@setting('theme::phone')</a>
                    </li>
                    <li class="pb-1 mb-2">
                        <a href="mailto:{!! Html::email(setting('theme::email')) !!}">{!! Html::email(setting('theme::email')) !!}</a>
                    </li>
                </ul>
                @include('partials.components.socials')
            </div>
            <div class="col-lg-3 text-center text-lg-start mb-5 mb-lg-0">
                <h4 class="font-weight-bold text-4-5 pb-1 mb-3">{{ $menuService->title('services') }}</h4>
                {!! Menu::render('services', \Themes\Torch\Presenter\FooterMenuLinksPresenter::class) !!}
            </div>
            <div class="col-lg-3 text-center text-lg-start">
                <h4 class="font-weight-bold text-4-5 pb-1 mb-3">{{ $menuService->title('corporate') }}</h4>
                {!! Menu::render('corporate', \Themes\Torch\Presenter\FooterMenuLinksPresenter::class) !!}
            </div>
        </div>
    </div>
    <div class="footer-copyright footer-copyright-container-border-top footer-copyright-container-border-top-opacity bg-light border-top">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <p>@lang('themes::theme.footer.copyright', ['date' => \Carbon\Carbon::now()->year, 'company' => setting('theme::company-name')])</p>
                </div>
            </div>
        </div>
    </div>
</footer>