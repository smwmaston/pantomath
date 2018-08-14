<!doctype html>
<html>
<head>
    <title>
        @yield('title','#words')
    </title>

    <meta charset='utf-8'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
    <body>

        <header>
            <h2>Here is the timescaping bar</h2>
        </header>

            <section>
                {{-- Main page content will be yielded here --}}
                @yield('content')
            </section>

        <footer>
            &copy; {{ date('Y') }}
        </footer>

        <script src=""></script>

        {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
        @yield('body')

    </body>
</html>