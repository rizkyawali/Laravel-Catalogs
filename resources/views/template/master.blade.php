<!DOCTYPE html>
<html>
    <head>
        <title>LaraCatalogs</title>

        {{--CSS--}}
        <link href="/css/bootstrap/bootstrap.css" rel="stylesheet">
        <link href="/css/material/bootstrap-material-design.css" rel="stylesheet">
        <link href="/css/material/ripples.css" rel="stylesheet">
        <link href="/css/pinterest.css" rel="stylesheet">
        <link href="/css/navigation.css" rel="stylesheet">
        {{--<link href="/css/comments.css" rel="stylesheet">--}}
        {{--CSS--}}

        {{--JS--}}
        <script src="/js/javascript2.1.js"></script>
        <script src="/js/bootstrap/bootstrap.js"></script>
        <script src="/js/material/material.js"></script>
        <script src="/js/material/ripples.js"></script>
        <script src="/js/materialcustom.js"></script>
        <script src="/js/pinterest.js"></script>
        <script src="/js/navigation.js"></script>
        {{--JS--}}
    </head>
    <body>
    <div id="wrapper">
        <div class="overlay"></div>
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                @if (Sentinel::check())
                    <li class="sidebar-brand">
                        <a>{!! Sentinel::getUser()->first_name !!} {!! Sentinel::getUser()->last_name !!}</a>
                    </li>
                    <div class="dropdown-header">{!! Sentinel::getUser()->email !!}</div><br/>


                    <li>{!! link_to(route('home'), 'Home') !!}</li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Product<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>{!! link_to(route('list_products'), 'List Products') !!}</li>
                            <li>{!! link_to(route('new_product'), 'Add Product') !!}</li>
                        </ul>
                    </li>
                    <li>{!! link_to(route('logout'), "Logout") !!}</li>
                @else
                    <li>
                        <div class="sidebar-brand"><h4>{!! link_to(route('home'), 'LaraCatalogs') !!}</h4></div>
                    <li>{!! link_to(route('home'), 'Home') !!}</li>
                    <li>{!! link_to(route('login'), 'Login') !!}</li>
                    <li>{!! link_to(route('signup'), 'Signup') !!}</li>
                    </li>
                @endif
            </ul>
        </nav>
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
            </button>
        </div>


        <div id="page-content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        @yield ("content")
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br>

    <div class="panel-footer">
        <p><center>Created By Rizky Awali</center></p>
    </div>

    </body>
</html>