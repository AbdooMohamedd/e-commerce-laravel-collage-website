<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tooplate's Little Fashion - Products</title>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css\slick.css') }}"/>
    <link href="{{ asset('css/tooplate-little-fashion.css')}}" rel="stylesheet"> 
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

                <div class="d-lg-none nav-item">
                    <a href="sign-in" class="bi-person custom-icon nav-link me-3 active"></a>
                    <a href="product-detail" class="bi-bag custom-icon"></a>
                </div>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="\">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/about">Story</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/products">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/category?id=1">category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/faq">FAQs</a>
                        </li>
                    </ul>

                    <div class="d-none d-lg-block">
                        <a href="sign-in" class="bi-person custom-icon me-3"></a>

                        <a href="cartpage" class="bi-bag custom-icon"></a>
                    </div>
                </div>
            </div>
        </nav>

        <header class="site-header section-padding d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-12">
                        <h1>
                            <span class="d-block text-primary">We provide you</span>
                            <span class="d-block text-dark">Fashionable Stuffs</span>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <section class="product-detail section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="product-thumb">
                            <img src="{{ asset($product->image_url)}}" class="img-fluid product-image" alt="{{ $product->name }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="product-info d-flex">
                            <div>
                                <h2 class="product-title mb-0">{{ $product->name }}</h2>
                                <p class="product-p">{{ $product->description }}</p>
                            </div>
                            <small class="product-price text-muted ms-auto mt-auto mb-5">${{ $product->price }}</small>
                        </div>
                        <div class="product-description">
                            <strong class="d-block mt-4 mb-2">Description</strong>
                            <p class="lead mb-5">{{ $product->description }}</p>
                        </div>
                        
                        <div class="product-cart-thumb row">
                            <div class="col-lg-6 col-12">
                                <form method="POST" action="{{ route('cart.add') }}">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <select class="form-select cart-form-select" id="inputGroupSelect01" name="quantity">
                                        <option selected disabled>Quantity</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <button type="submit" class="btn custom-btn cart-btn mt-4">Add to Cart</button>
                                </form>
                            </div>
                            <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                                <p>
                                    <a href="#" class="product-additional-link">Details</a>
                                    <a href="#" class="product-additional-link">Delivery and Payment</a>
                                </p>
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

    <script src="{{ asset('js/jquery.min.js') }}"></script>
            <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('js/Headroom.js') }}"></script>
            <script src="{{ asset('js/jQuery.headroom.js') }}"></script>
            <script src="{{ asset('js/slick.min.js') }}"></script>
            <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>