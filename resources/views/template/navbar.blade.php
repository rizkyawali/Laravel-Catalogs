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
                    <li>{!! link_to(route('logout'), 'Logout') !!}</li>
                    <li>Welcome {!! Sentinel::getUser()->email !!}</li>
                @else
                    <li>{!! link_to(route('login'), 'Login') !!}</li>
                    <li>{!! link_to(route('signup'), 'Signup') !!}</li>
            @endif
            </ul>
        </div>
    </div>
</div>