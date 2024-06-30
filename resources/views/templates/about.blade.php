<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tooplate's Little Fashion - About Page</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link href="{{ asset('css/tooplate-little-fashion.css') }}" rel="stylesheet">
</head>
    
    <body>
        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <a class="navbar-brand" href="\">
                        <strong><span>Little</span> Fashion</strong>
                    </a>

                    <div class="d-lg-none">
                        <a href="sign-in" class="bi-person custom-icon me-3"></a>

                        <a href="product-detail" class="bi-bag custom-icon"></a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="\">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="about">Story</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="products">Products</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="category?id=1">Category</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="faq">FAQs</a>
                            </li>
                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="sign-in" class="bi-person custom-icon me-3"></a>

                            <a href="cartpage" class="bi-bag custom-icon"></a>
                        </div>
                    </div>
                </div>
            </nav>

            <header class="site-header section-padding-img site-header-image">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 header-info">
                            <h1>
                                <span class="d-block text-primary">Company</span>
                                <span class="d-block text-dark">Fashion</span>
                            </h1>
                        </div>
                    </div>
                </div>

                <img src="images/header/businesspeople-meeting-office-working.jpg" class="header-image img-fluid" alt="">
            </header>

            <section class="team section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-5">Meet our <span>team</span></h2>
                        </div>

                        <div class="col-lg-4 mb-4 col-12">
                            <div class="team-thumb d-flex align-items-center">
                                <img src="/images/team/abdo.jpg" class="img-fluid custom-circle-image team-image me-4" alt="">

                                <div class="team-info">
                                    <h5 class="mb-0">Abdelrahman</h5>
                                    <strong class="text-muted">Manager</strong>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn custom-modal-btn" data-bs-toggle="modal" data-bs-target="#abdo">
                                      <i class="bi-plus-circle-fill"></i>
                                    </button>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-lg-0 mb-4 col-12">
                            <div class="team-thumb d-flex align-items-center">
                                <img src="/images/team/raafat.jpg" class="img-fluid custom-circle-image team-image me-4" alt="">

                                <div class="team-info">
                                    <h5 class="mb-0">Mohamed</h5>
                                    <strong class="text-muted">Assistant</strong>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn custom-modal-btn" data-bs-toggle="modal" data-bs-target="#mohamed">
                                      <i class="bi-plus-circle-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-4 col-12">
                            <div class="team-thumb d-flex align-items-center">
                                <img src="/images/team/WhatsApp Image 2024-05-07 at 02.16.23_4938363a.jpg" class="img-fluid custom-circle-image team-image me-4" alt="">

                                <div class="team-info">
                                    <h5 class="mb-0">Manar</h5>
                                    <strong class="text-muted">Co-assistant</strong>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn custom-modal-btn" data-bs-toggle="modal" data-bs-target="#manar">
                                      <i class="bi-plus-circle-fill"></i>
                                    </button>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-4 col-12">
                            <div class="team-thumb d-flex align-items-center">
                                <img src="/images/team/hagar.png" class="img-fluid custom-circle-image team-image me-4" alt="">

                                <div class="team-info">
                                    <h5 class="mb-0">Hagar</h5>
                                    <strong class="text-muted">Marketing</strong>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn custom-modal-btn" data-bs-toggle="modal" data-bs-target="#hagar">
                                      <i class="bi-plus-circle-fill"></i>
                                    </button>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-4 col-12">
                            <div class="team-thumb d-flex align-items-center">
                                <img src="/images/team/omar.jpg" class="img-fluid custom-circle-image team-image me-4" alt="">

                                <div class="team-info">
                                    <h5 class="mb-0">Omar</h5>
                                    <strong class="text-muted">Public Relations</strong>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn custom-modal-btn" data-bs-toggle="modal" data-bs-target="#omar">
                                      <i class="bi-plus-circle-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="testimonial section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-9 mx-auto col-11">
                            <h2 class="text-center">Customer love, <br> <span>Little</span> Fashion</h2>

                            <div class="slick-testimonial">
                                <div class="slick-testimonial-caption">
                                    <p class="lead">"Absolutely thrilled with my purchases! The variety and quality exceeded my expectations. Thank you for the fantastic service!"</p>

                                    <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                        <img src="/images/comments/sameh.png" class="img-fluid custom-circle-image me-3" alt="">

                                        <span>Mohamed Sameh, <strong class="text-muted">GYM Captin</strong></span>
                                    </div>
                                </div>

                                <div class="slick-testimonial-caption">
                                    <p class="lead">"Impressed by the personalized styling advice I received. It made my shopping experience so much more enjoyable and successful!"</p>

                                    <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                        <img src="/images/comments/samy.png" class="img-fluid custom-circle-image me-3" alt="">

                                        <span>Ahmed Samy, <strong class="text-muted">Banhawe</strong></span>
                                    </div>
                                </div>

                                <div class="slick-testimonial-caption">
                                    <p class="lead">"Couldn't be happier with the efficiency of the delivery and the quality of the items received. Will definitely be coming back for more!"</p>

                                    <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                        <img src="/images/comments/hkaled.png" class="img-fluid custom-circle-image me-3" alt="">

                                        <span>Khaled El-Nhas, <strong class="text-muted">Domyati</strong></span>
                                    </div>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-10 me-auto mb-4">
                        <h4 class="text-white mb-3"><a href="\">Little</a> Fashion</h4>
                        <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0"><strong>Little Fashion</strong></p>
                        <br>
                        
                    </div>

                    <div class="col-lg-5 col-8">
                        <h5 class="text-white mb-3">Sitemap</h5>

                        <ul class="footer-menu d-flex flex-wrap">
                            <li class="footer-menu-item"><a href="about" class="footer-menu-link">Story</a></li>

                            <li class="footer-menu-item"><a href="products" class="footer-menu-link">Products</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Privacy policy</a></li>

                            <li class="footer-menu-item"><a href="faq" class="footer-menu-link">FAQs</a></li>
                            
                            <li class="footer-menu-item"><a href="category?id=1" class="footer-menu-link">Category</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-4">
                        <h5 class="text-white mb-3">Social</h5>

                        <ul class="social-icon">

                            <li><a href="https://www.linkedin.com/in/abdelrahman-mohamed-167915271/" class="social-icon-link bi-linkedin"></a></li>
                            <li><a href="https://www.instagram.com/abdo__muhamedd/" class="social-icon-link bi-instagram"></a></li>
                            
                        </ul>
                    </div>

                </div>
            </div>
        </footer>

        <!-- TEAM MEMBER MODAL -->
        <div class="modal fade" id="abdo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column">
                        <h3 class="modal-title" id="exampleModalLabel">Abdelrahman Mohamed</h3>

                        <h6 class="text-muted">ID: 202101081</h6>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <h5 class="mb-4">Backend Developer</h5>

                        <div class="row mb-4">
                            <div class="col-lg-12 col-12">
                                <p>Collaborated on constructing backend architecture, including models, routes, controllers, and PHP files.</p>
                            </div>

                            <div class="col-lg-12 col-12">
                                <p>Implemented intricate business logic, ensuring seamless communication between frontend and backend components.</p>
                            </div>

                            <div class="col-lg-12 col-12">
                                <p>Implemented user authentication using Laravel's built-in feature auth UI.</p>
                            </div>
                        </div>

                        <ul class="social-icon">
                            <li class="me-3"><strong>Where to find?</strong></li>

                            <li><a href="https://www.linkedin.com/in/abdelrahman-mohamed-167915271/" class="social-icon-link bi-linkedin"></a></li>
                            <li><a href="https://www.instagram.com/abdo__muhamedd/" class="social-icon-link bi-instagram"></a></li>
                        
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- TEAM MEMBER MODAL -->
        <div class="modal fade" id="mohamed" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column">
                        <h3 class="modal-title" id="exampleModalLabel">Mohamed Raafat</h3>

                        <h6 class="text-muted">ID: 202101006</h6>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <h5 class="mb-4">Backend Developer</h5>

                        <div class="row mb-4">
                            <div class="col-lg-12 col-12">
                                <p>Collaborated on constructing backend architecture, including models, routes, controllers, and PHP files.</p>
                            </div>

                            <div class="col-lg-12 col-12">
                                <p>Implemented intricate business logic, ensuring seamless communication between frontend and backend components.</p>
                            </div>
                        </div>

                        <ul class="social-icon">
                            <li class="me-3"><strong>Where to find?</strong></li>

                            <li><a href="https://www.linkedin.com/in/mohamed-raafat-30a639273/" class="social-icon-link bi-linkedin"></a></li>
                            <li><a href="https://www.instagram.com/mohamed__.raafat/" class="social-icon-link bi-instagram"></a></li>
                        
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- TEAM MEMBER MODAL -->
        <div class="modal fade" id="manar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column">
                        <h3 class="modal-title" id="exampleModalLabel">Manar Mohamed</h3>

                        <h6 class="text-muted">ID: 202300398</h6>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <h5 class="mb-4">Testing and Backend Support</h5>

                        <div class="row mb-4">
                            <div class="col-lg-12 col-12">
                                <p>Assisted in crafting unit tests and conducting integration testing for backend functionality.</p>
                            </div>

                            <div class="col-lg-12 col-12">
                                <p>Collaborated with frontend developer to validate user-facing features and provided support in debugging backend issues.</p>
                            </div>
                        </div>

                        <ul class="social-icon">
                            <li class="me-3"><strong>Where to find?</strong></li>

                            <li><a href="https://www.linkedin.com/in/hager-seyam-33961a24b/" class="social-icon-link bi-linkedin"></a></li>
                            <li><a href="https://www.instagram.com/manar._.darwish/" class="social-icon-link bi-instagram"></a></li>
                            
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- TEAM MEMBER MODAL -->
        <div class="modal fade" id="hagar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column">
                        <h3 class="modal-title" id="exampleModalLabel">Hagar Magdy</h3>

                        <h6 class="text-muted">ID: 202101241</h6>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <h5 class="mb-4">Frontend Developer & Marketing Specialist</h5>

                        <div class="row mb-4">
                            <div class="col-lg-12 col-12">
                                <p>Updated website template for improved user experience and modern design aesthetics.</p>
                            </div>

                            <div class="col-lg-12 col-12">
                                <p>Integrated marketing elements like banners and CTAs, and crafted compelling presentations of website features.</p>
                            </div>
                        </div>

                        <ul class="social-icon">
                            <li class="me-3"><strong>Where to find?</strong></li>

                            <li><a href="https://www.linkedin.com/in/hager-seyam-33961a24b/" class="social-icon-link bi-linkedin"></a></li>
                            <li><a href="https://www.instagram.com/aada_danaa/" class="social-icon-link bi-instagram"></a></li>
                            
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- TEAM MEMBER MODAL -->
        <div class="modal fade" id="omar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column">
                        <h3 class="modal-title" id="exampleModalLabel">Omar Akram</h3>
                        <h6 class="text-muted">ID: 202101189</h6>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <h5 class="mb-4">Database Architect & Website Structure</h5>

                        <div class="row mb-4">
                            <div class="col-lg-12 col-12">
                                <p>Designed database schema and crafted migrations within Laravel.</p>
                            </div>
                            <div class="col-lg-12 col-12">
                                <p>Organized website structure within the Laravel framework and implemented security measures for data integrity.</p>
                            </div>
                        </div>

                        <ul class="social-icon">
                            <li class="me-3"><strong>Where to find?</strong></li>

                            <li><a href="https://www.linkedin.com/in/omar-akram-08439b23b/" class="social-icon-link bi-linkedin"></a></li>
                            <li><a href="https://www.instagram.com/omar.akram.258/" class="social-icon-link bi-instagram"></a></li>
                            
                        </ul>
                    </div>
                </div>

            </div>
        </div>


    <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/Headroom.js') }}"></script>
        <script src="{{ asset('js/jQuery.headroom.js') }}"></script>
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>
