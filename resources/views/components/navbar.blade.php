    <!-- Navbar STart -->
    <header id="topnav" class="defaultscroll sticky magazine-logo-hight">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="border-bottom">
                        <!-- Logo container-->
                        <a class="logo d-lg-none" href="/index-2.html">
                            <img src="/images/logo.png" height="22" alt="">
                        </a>
                        <!-- End Logo container-->
                        <div class="menu-extras">
                            <div class="menu-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </div>
                        </div>

                        <ul class="buy-button list-inline mb-0">
                            <li class="list-inline-item mb-0">
                                <div class="search-bar">
                                    <div id="search" class="menu-search mb-0">
                                        <form role="search" method="get" id="searchform" class="searchform">
                                            <div>
                                                <input type="text" class="border rounded" name="s"
                                                    id="s" placeholder="جستجو">
                                                <input type="submit" id="searchsubmit" value="Search">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div id="navigation">
                            <!-- Navigation Menu-->
                            <ul class="navigation-menu nav-left">
                                <li><a href="/" class="sub-menu-item ps-lg-0">خانه</a></li>
                                @foreach ($category as $categ)
                                    <li><a href="/javascript:void(0)" class="sub-menu-item">{{ $categ->Name }}</a></li>
                                @endforeach
                            </ul>
                            <!--end navigation menu-->
                        </div>
                        <!--end navigation-->
                    </div>
                </div>
            </div>
        </div>
        <!--end container-->
    </header>
    <!--end header-->
