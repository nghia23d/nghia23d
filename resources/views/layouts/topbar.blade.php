<header>
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="{{ config('app.url') }}"><img src="/themes/{{ $theme }}/assets/img/logo/nghia23d.png" alt="" /></a>
                    </div>
                    <!-- Main-menu -->
                    <div class="main-menu d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a href="{{ config('app.url') }}">Trang chủ</a></li>
                                <li class="hot">
                                    <a href="#">Dự án đã làm</a>
                                    <ul class="submenu">
                                        <li><a href="#">Website giới thiệu</a></li>
                                        <li><a href="#">Website bản hàng</a></li>
                                        <li><a href="#">CRM</a></li>
                                    </ul>
                                </li>
                                <li><a href="/blog.html">Blog</a></li>
                                <li><a href="/ve-toi.html">Về tôi</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Right -->
                    <div class="header-right">
                        <ul>
                            {{-- <li>
                                <div class="nav-search search-switch">
                                    <span class="flaticon-search"></span>
                                </div>
                            </li> --}}
                            <li>
                                <a href="#"><span class="flaticon-user"></span></a>
                            </li>
                            {{-- <li>
                                <a href="cart.html"><span class="flaticon-shopping-cart"></span></a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
</header>
