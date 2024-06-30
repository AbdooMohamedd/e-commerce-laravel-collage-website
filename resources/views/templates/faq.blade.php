<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tooplate's Little Fashion - FAQs Page</title>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}"/>
    <link href="{{ asset('css/tooplate-little-fashion.css') }}" rel="stylesheet">
    <!-- Tooplate 2127 Little Fashion -->
</head>
    <body>
        <main>
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <strong><span>Little</span> Fashion</strong>
                    </a>
                    <div class="d-lg-none">
                        <a href="{{ url('sign-in') }}" class="bi-person custom-icon me-3"></a>
                        <a href="{{ url('product-detail') }}" class="bi-bag custom-icon"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('about') }}">Story</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('products') }}">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('category?id=1') }}">Category</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('faq') }}">FAQs</a>
                            </li>

                        </ul>
                        <div class="d-none d-lg-block">
                            <a href="{{ url('sign-in') }}" class="bi-person custom-icon me-3"></a>
                            <a href="{{ url('cartpage') }}" class="bi-bag custom-icon"></a>
                        </div>
                    </div>
                </div>
            </nav>

            <header class="site-header section-padding d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-12">
                            <h1>
                                <span class="d-block text-primary">Your favorite questions</span>
                                <span class="d-block text-dark">and our answers to them</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </header>

            <section class="faq section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <h2>General Info.</h2>
                            <div class="accordion" id="accordionGeneral">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionGeneralOne" aria-expanded="true" aria-controls="accordionGeneralOne">
                                        What is this Little Fashion?
                                        </button>
                                    </h2>
                                    <div id="accordionGeneralOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionGeneral">
                                        <div class="accordion-body">
                                            <p class="large-paragraph"><strong>Little Fashion</strong> " isn't just a brand, it's a gateway to style transformation. Step into a world where every stitch, every detail, is crafted to reflect your unique personality. Experience fashion redefined with Little Fashion."</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Other accordion items -->
                            </div>
                            <h2 class="mt-5">About <span>our products</span></h2>
                            <p class="mb-5">"At Little Fashion, our products are more than just garments; they're expressions of individuality and creativity. Each piece is meticulously designed to embody the latest trends while maintaining exceptional quality and comfort. Explore our collection and discover the perfect pieces to elevate your style effortlessly."
</p>
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

        <!-- JAVASCRIPT FILES -->
            <script src="{{ asset('js/jquery.min.js') }}"></script>
            <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('js/Headroom.js') }}"></script>
            <script src="{{ asset('js/jQuery.headroom.js') }}"></script>
            <script src="{{ asset('js/slick.min.js') }}"></script>
            <script src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>
