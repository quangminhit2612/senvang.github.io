    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="index.html"> <img src="{!!asset('assets/frontend/img/logo.png')!!}" alt=""> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="icon-bar"><i class="ti-line-double"></i></span> </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" href="/">Trang chủ</a></li>
                    <li class="nav-item"><a class="nav-link @if(\Request::is('') != 1) nav-color @endif " href="{{route('product.index')}}">Dịch vụ</a></li>
                    <li class="nav-item"><a class="nav-link @if(\Request::is('') != 1) nav-color @endif" href="{{route('product.index')}}">Dự án</a></li>
                    <li class="nav-item"><a class="nav-link @if(\Request::is('') != 1) nav-color @endif" href="{{route('news.index')}}">Tin tức</a></li>
                    <li class="nav-item"><a class="nav-link @if(\Request::is('') != 1) nav-color @endif" href="{{route('contact.index')}}">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </nav>