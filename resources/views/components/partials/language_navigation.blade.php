<header id="header">
    <div class="container d-flex align-items-center justify-content-between position-relative">
        <div class="logo">
            {{-- <h1 class="text-light"><a href="index.html"><span>Squadfree</span></a></h1> --}}
            <a href="{{ route('welcome') }}"><img src="images/logo_top.png" alt="" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                <li><a class="nav-link scrollto" href="#services">Info</a></li>
                <li class="dropdown"><a href="#"><span>Idiomas</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Aymara</a></li>
                        <li><a href="#">Quechua</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
