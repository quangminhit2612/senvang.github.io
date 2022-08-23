<!DOCTYPE html>
<html lang="zxx">
    <head>
        @include('frontend/layouts/__head')
    </head>

    <body>
        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Progress scroll totop -->

        <div class="progress-wrap cursor-pointer">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        @include('frontend/layouts/__header')
        @yield('content')
        @include('frontend/layouts/__footer')
    </body>
    @yield('script')   
</html>

