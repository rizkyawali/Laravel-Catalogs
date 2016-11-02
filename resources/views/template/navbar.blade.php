<div class="navbar navbar-fixed-top navbar-default" role="navigation">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"/>
                <span class="icon-bar"/>
                <span class="icon-bar"/>
            </button>
            <a href="#" class = "navbar-brand">LaraShop</a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>{!! link_to(route('home'), 'Home') !!}</li>
            @if(Sentinel::check())
                    <li class="dropdown">
                        <a href="index.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Manage Products
                            <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>{!! link_to(route('list_products'), 'List Products') !!}</li>
                            <li>{!! link_to(route('new_product'), 'Add Product') !!}</li>

                        </ul>
                    </li>
                    <li>{!! link_to(route('logout'), 'Logout') !!}</li>
                    <li>Welcome {!! Sentinel::getUser()->first_name !!} {!! Sentinel::getUser()->last_name !!}</li>

                @else
                    <li>{!! link_to(route('login'), 'Login') !!}</li>
                    <li>{!! link_to(route('signup'), 'Signup') !!}</li>
            @endif
            </ul>
        </div>
    </div>
</div>