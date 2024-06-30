<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Page</title>
    
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link href="{{ asset('css/tooplate-little-fashion.css') }}" rel="stylesheet">
    
    <!-- Custom Styles -->
    <style>
        .team-thumb {
            cursor: pointer;
        }
        .team-thumb:hover {
            transform: scale(1.1);
        }
    </style>
</head>
    <body>
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Navbar brand/logo -->
                    <a class="navbar-brand" href="/">
                        <strong><span>Little</span> Fashion</strong>
                    </a>

                    <!-- Toggler button for small screens -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navbar links -->
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about">Story</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="products">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="category?id=1">Category</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="faq">FAQs</a>
                            </li>
                        </ul>

                        <!-- Icons for small screens -->
                        <div class="d-lg-none">
                            <a href="sign-in" class="bi-person custom-icon me-3"></a>
                            <a href="product-detail" class="bi-bag custom-icon"></a>
                        </div>

                        <!-- Icons for large screens -->
                        <div class="d-none d-lg-block">
                            <a href="sign-in" class="bi-person custom-icon me-3"></a>
                            <a href="cartpage" class="bi-bag custom-icon"></a>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Category Section -->
            <section class="team section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="mb-5">Category <span>Products</span></h2>
                        </div>

                        <!-- Category 1 -->
                        <div class="col-lg-4 mb-4 col-12">
                            <a href="category?id=1" class="category-button">
                                <div class="team-thumb d-flex align-items-center">
                                    <img src="/images/category/women.jpg" class="img-fluid custom-circle-image team-image me-4" alt="Category 1 Image">
                                    <div class="team-info">
                                        <h5 class="mb-0">Women's Clothing</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Category 2 -->
                        <div class="col-lg-4 mb-4 col-12">
                            <a href="category?id=2" class="category-button">
                                <div class="team-thumb d-flex align-items-center">
                                    <img src="/images/category/men 2.jpg" class="img-fluid custom-circle-image team-image me-4" alt="Category 2 Image">
                                    <div class="team-info">
                                        <h5 class="mb-0">Men's Clothing</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Category 3 -->
                        <div class="col-lg-4 mb-lg-0 mb-4 col-12">
                            <a href="category?id=3" class="category-button">
                                <div class="team-thumb d-flex align-items-center">
                                    <img src="/images/category/accessories.jpg" class="img-fluid custom-circle-image team-image me-4" alt="Category 3 Image">
                                    <div class="team-info">
                                        <h5 class="mb-0">Accessories</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Category 4 -->
                        <div class="col-lg-4 mb-4 col-12">
                            <a href="category?id=4" class="category-button">
                                <div class="team-thumb d-flex align-items-center">
                                    <img src="/images/category/foot.jpg" class="img-fluid custom-circle-image team-image me-4" alt="Category 4 Image">
                                    <div class="team-info">
                                        <h5 class="mb-0">Footwear</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Category 5 -->
                        <div class="col-lg-4 mb-4 col-12">
                            <a href="category?id=5" class="category-button">
                                <div class="team-thumb d-flex align-items-center">
                                    <img src="/images/category/kids 2.jpg" class="img-fluid custom-circle-image team-image me-4" alt="Category 5 Image">
                                    <div class="team-info">
                                        <h5 class="mb-0">Kids' Clothing</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Category 6 -->
                        <div class="col-lg-4 mb-lg-0 mb-4 col-12">
                            <a href="category?id=6" class="category-button">
                                <div class="team-thumb d-flex align-items-center">
                                    <img src="/images/category/makeup.jpg" class="img-fluid custom-circle-image team-image me-4" alt="Category 6 Image">
                                    <div class="team-info">
                                        <h5 class="mb-0">MakeUp</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Category Section -->
            <section class="products section-padding">
                <div class="container">
                    <div class="row">
                <div class="col-12">
                    <h2 class="mb-5"><span>Products for </span>{{ $category->name }}</h2>
                </div>
                        @foreach($products as $product)
                            <div class="col-lg-4 col-12 mb-3">
                                <div class="product-thumb">
                                    <a href="{{ route('product-detail', ['id' => $product->id]) }}">
                                        <img src="{{ asset($product->image_url) }}" class="img-fluid product-image" alt="{{ $product->name }}">
                                    </a>
                                
                                    <div class="product-info d-flex">
                                        <div>
                                            <h5 class="product-title mb-0">
                                                <a href="{{ route('product-detail', ['id' => $product->id]) }}" class="product-title-link">{{ $product->name }}</a>
                                            </h5>
                                            <p class="product-p">{{ $product->description }}</p>
                                        </div>
                                        <small class="product-price text-muted ms-auto">${{ $product->price }}</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

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
    </body>
</html>
