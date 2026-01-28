<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="{{ asset('assets/images/logo.jpg') }}" alt="" style="width: 50px;" class="rounded">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Beranda</a></li>
                        <li><a href="/tentang" class="{{ Request::is('tentang*') ? 'active' : '' }}">Tentang</a></li>
                        <li><a href="/kontak" class="{{ Request::is('kontak*') ? 'active' : '' }}">Kontak</a></li>
                         <li><a href="/pelaporan/asset" class="{{ Request::is('pelaporan/asset*') ? 'active' : '' }}">Pelaporan Asset</a></li>
                        
                        
                        @auth
                            <li class="dropdown-container">
                                <a href="javascript:void(0)" class="dropdown-trigger">
                                    {{ Auth::user()->name }} <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu-custom">
                                    <li><a href="/profile">My Profile</a></li>
                                    <li>
                                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}" class="{{ Request::is('login') ? 'active' : '' }}">Sign In</a></li>
                        @endauth
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>

<style>
    /* Styling Dropdown Custom */
.dropdown-container {
    position: relative;
}

.dropdown-menu-custom {
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #2a2a2a; /* Warna gelap sesuai tema */
    min-width: 160px;
    box-shadow: 0px 8px 16px rgba(0,0,0,0.5);
    z-index: 1000;
    display: none; /* Sembunyikan default */
    border-radius: 10px;
    padding: 10px 0;
    margin-top: 10px;
}

.dropdown-menu-custom li {
    width: 100%;
    padding: 0 !important;
}

.dropdown-menu-custom li a {
    color: #fff !important;
    padding: 10px 20px !important;
    display: block !important;
    background: transparent !important;
    border-bottom: none !important;
    transition: all 0.3s;
}

.dropdown-menu-custom li a:hover {
    color: #ee626b !important; /* Warna pink saat hover */
    padding-left: 25px !important;
}

/* Munculkan dropdown saat hover di container */
.dropdown-container:hover .dropdown-menu-custom {
    display: block;
}

/* Panah kecil di atas dropdown */
.dropdown-menu-custom::before {
    content: '';
    position: absolute;
    top: -10px;
    left: 20px;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-bottom: 10px solid #2a2a2a;
}
</style>
<!-- ***** Header Area End ***** -->