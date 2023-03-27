<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('slick/slick-theme.css')}}">
    <title>@yield('title')</title>
</head>
<body>
<nav class="navbar fornav navbar-expand-lg fixed-top bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="/img/logo.png" width="48px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">@lang('main.nav_main')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/collection') }}">@lang('main.nav_collection')</a>
                </li>
                <div class="nav-item dropdown" onmouseover="showDropdown()" onmouseout="hideDropdown()">
                    <span class="nav-link">@lang('main.nav_clothes')</span>
                    <div id="dropdown-content" class="dropdown-content">
                        <a href="#">Мужская одежда</a>
                        <a href="#">Женская одежда</a>
                        <a href="#">Детская одежда</a>
                    </div>
                </div>
            </ul>



            <div class="d-flex">
                <ul class="navbar-nav  me-auto mb-2 mb-lg-0">
                    <li class="nav-but">
                        <div class="icon-wrapper">
                            <a class="nav-link" href="{{ route('locale', __('main.set_locale') ) }}" >
                                @lang('main.set_locale')
                            </a>
                        </div>
                    </li>

                    <li class="nav-but">
                        <div class="icon-wrapper">
                            <a href="#">
                                <img src="/img/icon-bag.png" width="40px">
                            </a>
                        </div>
                    </li>
                    <li class="nav-but">
                        <div class="icon-wrapper">
                            <a href="#">
                                <img src="/img/icon-login.png" width="40px">
                            </a>
                        </div>
                    </li>
                </ul>
            </div>




        </div>
    </div>
</nav>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    @yield('content')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>@lang('main.footer_protect')</h4>
                <ul class="list-unstyled">
                    <li><a href="#">@lang('main.delivery')</a></li>
                    <li><a href="#">@lang('main.payment')</a></li>
                    <li><a href="#">@lang('main.return')</a></li>
                    <li><a href="#">@lang('main.size_tables')</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>@lang('main.footer_info')</h4>
                <ul class="list-unstyled">
                    <li><a href="#">@lang('main.section_about')</a></li>
                    <li><a href="#">@lang('main.public_offer')</a></li>
                    <li><a href="#">@lang('main.privacy_policy')</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>@lang('main.footer_account')</h4>
                <ul class="list-unstyled">
                    <li><a href="#">@lang('main.sign_in')</a></li>
                    <li><a href="#">@lang('main.sign_up')</a></li>
                    <li><a href="#">@lang('main.bag')</a></li>
                    <li><a href="#">@lang('main.favorite')</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row d-flex align-items-center">
            <div class="col-md-6">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/1384/1384031.png" width="30px"></a></li>
                    <li class="list-inline-item"><a href="#"><img src="https://play-lh.googleusercontent.com/Ha4YNe5JUyxQQkgWR-3Z8HyNvkbST0lN2OvD914tN9HD5UaAXShqJ1wdPYtgMKI_2w=w240-h480-rw" width="30px"></a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <p class="text-right">© 2023 Anion.ua All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('slick/slick.min.js')}}"></script>
    <script>
        function showDropdown() {
            document.getElementById("dropdown-content").style.display = "block";
        }

        function hideDropdown() {
            document.getElementById("dropdown-content").style.display = "none";
        }

    </script>

</body>
</html>
