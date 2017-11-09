<link rel="stylesheet" href="/css/navbar.css">

<header>
    <div class="blog-masthead">
        <div class="container">
            <div class="row">
                <div class="col-md-2" >
                    <a class="nav-link active" href="#">Tournaments</a>
                </div>
                <div class="offset-md-7 col-md-3">
                    <div class="row right">
                        @guest
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                            @else
                                <a class="nav-link ml-auto" href="/me"> {{ Auth::user() -> name}} </a>
                                <a class="nav-link ml-auto" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>