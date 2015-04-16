<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

    <link href="{{ asset('/css/uikit.almost-flat.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
	<nav class="uk-navbar uk-navbar-attached">
        <a href="#api-offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas>
            {{--<i class="uk-icon-bars"></i>--}}
        </a>
        <div class="uk-container uk-container-center">
            <ul class="uk-navbar-nav">
                <li>
                    <a class="navbar-brand" href="{{ url('/home') }}"> <img src="{{asset('/images/logo.png')}}"></a>
                </li>
            </ul>

            <div class="uk-navbar-flip">
                <ul class="uk-navbar-nav uk-hidden-small">
                    @if (Auth::guest())
                        <li><a href="{{ url('/auth/login') }}">登录</a></li>
                        <li><a href="{{ url('/auth/register') }}">注册</a></li>
                    @else
                        <li class="uk-parent" data-uk-dropdown="{mode:'click'}">
                            <a href="">
                                <i class="uk-icon-user uk-icon-cubes"></i>  素材库
                                <i class="uk-icon-caret-down"></i>
                            </a>
                            <div class="uk-dropdown uk-dropdown-navbar" role="menu">
                                <ul class="uk-nav uk-nav-navbar">
                                    <li>
                                        <a href="{{ url('/resource/image') }}">
                                            <i class="uk-icon-image uk-icon-small"></i> 图片库
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="uk-parent" data-uk-dropdown="{mode:'click'}">
                            <a href=""  >
                                <i class="uk-icon-user uk-icon-small"></i>  {{ Auth::user()->name }}
                                <i class="uk-icon-caret-down"></i>
                            </a>
                            <div class="uk-dropdown uk-dropdown-navbar" role="menu">
                                <ul class="uk-nav uk-nav-navbar">
                                    <li><a href="{{ url('/auth/logout') }}">登出</a>
                                </ul>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
	</nav>
	@yield('content')

    <div id="api-offcanvas" class="uk-offcanvas">
        <div class="uk-offcanvas-bar">
            <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav>
                @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}">登录</a></li>
                    <li><a href="{{ url('/auth/register') }}">注册</a></li>
                @else
                    <li class="uk-parent">
                        <a href="#">
                            <i class="uk-icon-cubes uk-icon-small"></i> 素材库
                        </a>
                        <ul class="uk-nav-sub">
                            <li>
                                <a href="{{ url('/resource/image') }}">
                                    <i class="uk-icon-image uk-icon-small"></i> 图片库
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="uk-nav-divider"></li>
                    <li class="uk-parent">
                        <a href="#">
                            <i class="uk-icon-user uk-icon-small"></i>  {{ Auth::user()->name }}
                        </a>
                        <ul class="uk-nav-sub">
                            <li><a href="{{ url('/auth/logout') }}">登出</a>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
    <script src="http://cdn.bootcss.com/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{ asset('/js/uikit.min.js') }}"></script>
    @yield('js')
</body>
</html>
