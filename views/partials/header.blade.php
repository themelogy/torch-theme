<header id="header" class="header-effect-shrink"
        data-plugin-options="
            {
                'stickyEnabled': true,
                'stickyEnableOnBoxed': true,
                'stickyEnableOnMobile': true,
                'stickyStartAt': 120
            }">
    <div class="header-body">
        @includeIf('partials.header.top')
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column justify-content-start">
                    <div class="header-logo">
                        <a href="@homepage">
                            <img alt="@setting('theme::company-name')" src="{{ Theme::url('images/logos/logo-default.svg') }}">
                        </a>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    @includeIf('partials.header.search')
                    @includeIf('partials.header.nav')
                </div>
            </div>
        </div>
    </div>
</header>