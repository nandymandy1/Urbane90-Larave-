<!--Navbar-->
<nav class="blue darken-2">
        <div class="container">
            <div class="nav-wrapper">
                <a href="/home" class="brand-logo">U'90-Admin</a>
                @guest
                @else
                <a href="#" data-activates="side-nav" class="button-collapse show-on-large right">
                    <i class="material-icons">menu</i>
                </a>
                @endguest
                <!--Main Nav-->
                <ul class="right hide-on-med-and-down">
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li><a href="/home">Dashboard</a></li>
                        <li><a href="/admin/products">Products</a></li>
                        <li><a href="/admin/collections">Collection</a></li>
                        <li><a href="/admin/contacts">Contacts</a></li>
                        <li><a href="/admin/subscribers">Subscription</a></li>
                    @endguest
                </ul>
                <!--Main Nav-->
                @guest

                @else
                <!--Side Nav-->
                <ul id="side-nav" class="side-nav">
                    <li>
                        <div class="user-view">
                            <div class="background">
                                <img src="{{ asset('./admin/img/ocean.jpg')}}" alt="" srcset="">
                            </div>
                            <a href="#">
                                <img src="./img/person1.jpg" class="circle" alt="" srcset="">
                            </a>
                            <a href="#"><span class="name white-text">{{ Auth::user()->name }}</span></a>
                            <a href="#"><span class="email white-text">{{ Auth::user()->email }}</span></a>
                        </div>
                    </li>
                    <li><a href="/home"><i class="material-icons">dashboard</i> Dashboard</a></li>
                    <li><a href="/admin/products">Products</a></li>
                    <li><a href="/admin/collections">Collection</a></li>
                    <li><a href="/admin/contacts">Contacts</a></li>
                    <li><a href="/admin/subscribers">Subscription</a></li>
                    <li>
                        <div class="divider"></div>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                    </li>
                </ul>
                <!--Side Nav-->
                @endguest
            </div>
        </div>
    </nav>
    <!--Navbar-->