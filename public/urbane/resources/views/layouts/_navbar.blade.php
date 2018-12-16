    <!--Navigation-->
    <section id="menu-9" data-rv-view="0">
        <nav class="navbar navbar-dropdown transparent navbar-fixed-top bg-color">
            <div class="container">
                <div class="mbr-table">
                    <div class="mbr-table-cell">
                        <div class="navbar-brand">
                            <a href="/" class="navbar-logo"><img src="{{ asset('assets/img/logo.png')}}" alt="Urbane'90"></a>
                        </div>
                    </div>
                    <div class="mbr-table-cell">
                        <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse"
                            data-target="#exCollapsingNavbar">
                            <div class="hamburger-icon"></div>
                        </button>
                        <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                            <li class="nav-item"><a class="nav-link link" href="/">Home</a></li>
                            <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu"
                                    href="/about">Collection</a>
                                <div class="dropdown-menu">
                                    @foreach(\App\Category::get() as $product)
                                        <a class="dropdown-item" href="/collection/{{$product->dirName}}">{{ $product->name }}</a>
                                    @endforeach
                                </div>
                            </li>
                            <li class="nav-item"><a class="nav-link link" href="/gallery">Gallery</a></li>
                            <li class="nav-item"><a class="nav-link link" href="/clothing">Clothing</a></li>
                            <li class="nav-item"><a class="nav-link link" href="/exports">Exports</a></li>
                            <li class="nav-item"><a class="nav-link link" href="/about">About Us</a></li>
                            <li class="nav-item"><a class="nav-link link" href="/contact">Contact Us</a></li>
                        </ul>
                        <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse"
                            data-target="#exCollapsingNavbar">
                            <div class="close-icon"></div>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <!--Navigation-->


<!--
<a class="dropdown-item" href="/collection/bags">Bags</a>
                                    <a class="dropdown-item" href="/collection/cardholder">Card Holders</a>
                                    <a href="/collection/cigarcase" class="dropdown-item">Cigar Case</a>
                                    <a href="/collection/corporategift" class="dropdown-item">Corporate Gifts</a>
                                    <a href="/collection/jackets" class="dropdown-item">Jackets</a>
                                    <a href="/collection/laptopbags" class="dropdown-item">Laptop Bags</a>
                                    <a href="/collection/passport" class="dropdown-item">Passport</a>
                                    <a href="/collection/travelbag" class="dropdown-item">Travel Bag</a>
                                    <a href="/collection/travelshavekit" class="dropdown-item">Travel Shaving Kit</a>
                                    <a class="dropdown-item" href="/collection/wallet">Wallets</a>
-->