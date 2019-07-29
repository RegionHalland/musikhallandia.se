<!doctype html>
<html data-server="{!! env('SITE_SERVER') !!}" data-version="1.0.0" style="height: 101%;" @php(language_attributes())>
    @include('partials.sitewide.html-head')
    <body style="height: 101%" @php(body_class())>

        <header>
            @include('partials.sitewide.jump-to-content')
            @include('partials.sitewide.part-of-region-halland')
            @include('partials.messages.cookie-notice')
            @include('partials.navigation.nav-site')
        </header>

        <main id="main">
            @yield('content')
        </main>

        <section role="complementary">
            @include('partials.content.newsletter')
        </section>

        <footer>
            @include('partials.sitewide.footer')
        </footer>

    </body>
</html>