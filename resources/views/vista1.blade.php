<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $metaTitle ?? 'Default title' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default description' }}" />

    {{-- ============================== google fonts  ============================== --}}
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    {{-- ============================== bootstrap styles  ============================== --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- ============================== bootstrap icons  ============================== --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    {{-- Recursos propios --}}
    @vite(['resources/css/style2.css', 'resources/js/main.js', 'resources/js/app.js'])
</head>

<body>

    {{-- ***************************** HEADER (navigation) ***************************** --}}

    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center justify-content-between position-relative">
            <div class="logo">
                {{-- <h1 class="text-light"><a href="index.html"><span>Squadfree</span></a></h1> --}}
                <a href="/"><img src="images/logo_top.png" alt="" class="img-fluid"></a>
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
                    <li><a class="nav-link scrollto" href="{{ route('castellanoIndex') }}">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>

    {{-- ****************************** TOP-CONTAINER ****************************** --}}
    <section id="hero" style="background-image: url('{{ asset('images/f1.jpg') }}');">
        <div class="hero-container" data-aos="fade-up">
            <div class="container h-100 d-flex flex-column justify-content-center align-items-center">
                <div class="d-flex recuadros-container">
                    <div class="recuadro recuadro-izquierda">
                        <div class="container-sm">
                            <h2>Matrix</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nihil minus cum tempore
                                est, numquam rerum ipsam nam. Saepe distinctio sed quas non soluta. Sint cum ipsum
                                corporis fugit impedit!</p>
                        </div>
                    </div>
                    <div class="recuadro recuadro-medio">
                        <div class="container-sm">
                            <h2>Matrix</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nihil minus cum tempore
                                est, numquam rerum ipsam nam. Saepe distinctio sed quas non soluta. Sint cum ipsum
                                corporis fugit impedit!</p>
                        </div>
                    </div>
                    <div class="recuadro recuadro-derecha">
                        <div class="container-sm">
                            <h2>Matrix</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nihil minus cum tempore
                                est, numquam rerum ipsam nam. Saepe distinctio sed quas non soluta. Sint cum ipsum
                                corporis fugit impedit!</p>
                        </div>
                    </div>
                </div>
                <div class="search-bar">
                    <form action="" method="post">
                        <input type="text" name="text">{{-- <input type="submit" value="Buscar"> --}}
                    </form>
                </div>
            </div>
            <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
        </div>
    </section>

    <main id="main">

        {{-- About Section --}}
        <section id="about" class="about">

            <div class="container">
                <div class="row no-gutters">
                    <h1 class="text-center mb-4">Proyecto K'ente</h1>
                    <div class="col-md-6">
                        <img src="{{ asset('images/about.jpg') }}" class="img-fluid rounded" alt="Project Image">
                    </div>
                    <div class="col-md-6">
                        <h2>Our Story</h2>
                        <p>Since our inception, we've been committed to delivering cutting-edge solutions that transform
                            industries and empower businesses. Our journey began with a vision to simplify complex
                            processes
                            and
                            drive innovation.</p>
                        <h2>Our Mission</h2>
                        <p>We aim to revolutionize the industry by providing tools that simplify technology adoption and
                            enhance
                            operational efficiency. Our mission is to deliver scalable and secure solutions that drive
                            business
                            growth.</p>
                        <h2>Our Team</h2>
                        <p>We are a team of dedicated professionals with diverse expertise, united by our passion for
                            technology
                            and innovation. Meet the brilliant minds behind our success.</p>
                    </div>
                </div>

            </div>
        </section>

        {{-- Information Section --}}
        <section id="services" class="services">
            <div class="container-sm" id="info">
                <div class="information">
                    <h1 class="text-center mb-4">Who am I?</h1>
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <h3>Jhon Alberth Quispe Quispe </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui deserunt consequatur fugit
                                repellendus
                                illo voluptas?</p>
                            <a href="#" class="btn btn-outline-danger">Download My CV</a>
                        </div>
                        <div class="col-md-4">
                            <h3>My Expertise</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, minima eum obcaecati vel
                                molestias eos et provident fuga facilis dolore laudantium recusandae tempora dolor ipsam
                                illum nihil praesentium! Eaque, aut.</p>
                        </div>
                        <div class="col-md-4">
                            <h3>Personal Info</h3>
                            <p><strong>Birthdate:</strong> 09/13/1996</p>
                            <p><strong>Email:</strong> info@website.com</p>
                            <p><strong>Phone:</strong> + (123) 456-7890</p>
                            <p><strong>Skype:</strong> John_Doe</p>
                            <p><strong>Address:</strong> 12345 Fake ST NoWhere AB Country.</p>
                            <div class="social-icons">
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-google"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>Squadfree</h3>
                            <p class="pb-3"><em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam
                                    excepturi quod.</em></p>
                            <p>
                                A108 Adam Street <br>
                                NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Squadfree</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
