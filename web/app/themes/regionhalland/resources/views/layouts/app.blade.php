<!doctype html>
<html data-server="{!! env('SITE_SERVER') !!}" data-version="1.0.0" style="height: 101%;" @php(language_attributes())>
    @include('partials.head')
    <body style="height: 101%" @php(body_class())>
        @include('partials.jump-to-content')
        @include('partials.part-of-region-halland')
        @include('partials.cookie-notice')
        @include('partials.nav-site')

        @yield('content')
        @include('partials.footer')
    </body>
</html>