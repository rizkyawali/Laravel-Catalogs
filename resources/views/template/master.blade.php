<!DOCTYPE html>
<html>
    <head>
        <title>LaraShop</title>

        {{--CSS--}}
        <link href="/css/bootstrap/bootstrap.css" rel="stylesheet">
        <link href="/css/material/bootstrap-material-design.css" rel="stylesheet">
        <link href="/css/material/ripples.css" rel="stylesheet">
        <link href="/css/custom.css" rel="stylesheet">
        {{--CSS--}}

        {{--JS--}}
        <script src="/js/javascript2.1.js"></script>
        <script src="/js/bootstrap/bootstrap.js"></script>
        <script src="/js/material/material.js"></script>
        <script src="/js/material/ripples.js"></script>
        <script src="/js/materialcustom.js"></script>
        {{--JS--}}
    </head>
    <body>
    @include('template.navbar')

    <div class="container clearfix">
        <div class="row row-offcanvas row-offcanvas-left ">
            <div id="main-content" class="col-xs-12 col-sm-6 main pull-right">
                <div class="panel-body">
                    @if (Session::has('error'))
                        <div class="session-flash alert-danger">
                            {{Session::get('error')}}
                        </div>
                    @endif
                    @if (Session::has('notice'))
                        <div class="session-flash alert-info">
                            {{Session::get('notice')}}
                        </div>
                    @endif

                    @yield("content")
                </div>
            </div>
        </div>
    </div>

    </body>
</html>