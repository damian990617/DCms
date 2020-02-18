<section class="sideMenu flex flex-direction-column align-items-center">
            <div class="sideMenuHeader flex align-items-center justify-content-space-between">
                <a href=""><img src="{{ asset('img/logo.png') }}" class="navbar-logo" alt="logo" style="width: 30px; height: 30px;"></a>
                <i class="fa fa-toggle-on toggleSideMenu" aria-hidden="true"></i>
            </div>
            <ul class="sideMenuElements flex flex-direction-column justify-content-center">
                <li class="homeElement"><i class="fa fa-home"></i> <a href="{{ url('/admin') }}"><span class="textElement">Dashboard</span></a></li>
                <li class="sideMenuElement">
                    <div><i class="fas fa-clipboard-list"></i> <span class="textElement">Artykuły <i class="fa fa-angle-right arrowRight"></i></span></div>
                    <ul>
                        <li><a href="{{ url('/admin/article/index') }}">Lista</a></li>
                        <li><a href="{{ url('/admin/article/create') }}">Nowy</a></li>
                    </ul>
                </li>
                <li class="sideMenuElement">
                    <div><i class="fas fa-list"></i> <span class="textElement">Kategorie <i class="fa fa-angle-right arrowRight"></i></span></div>
                    <ul>
                        <li><a href="{{ url('/admin/category/index') }}">Lista</a></li>
                        <li><a href="{{ url('/admin/category/create') }}">Nowa</a></li>
                    </ul>
                </li>
                <li class="sideMenuElement">
                    <div><i class="fa fa-user"></i> <span class="textElement">Użytkownicy <i class="fa fa-angle-right arrowRight"></i></span></div>
                    <ul>
                        <li><a href="{{ url('/admin/user/index') }}">Lista</a></li>
                        <li><a href="{{ url('/admin/user/create') }}">Nowy</a></li>
                    </ul>
                </li>
                <li class="sideMenuElement">
                    <div><i class="fa fa-users"></i> <span class="textElement">Grupy</span></div>
                </li>
                <li class="sideMenuElement">
                    <div><i class="fa fa-tools"></i> <span class="textElement">Ustawienia <i class="fa fa-angle-right arrowRight"></i></span></div>
                    <ul>
                        <li><a href="{{ url('/admin/settings/website') }}">Strony</a></li>
                        <li><a href="{{ url('/admin/settings/account') }}">Konta</a></li>
                    </ul>
                </li>
                <li class="sideMenuElement logout" style="">
                <div><i class="fas fa-sign-out-alt"></i> <a href="{{ route('logout') }}" class="textElement">Wyloguj</a></div>
                </li>
            </ul>
    </section>