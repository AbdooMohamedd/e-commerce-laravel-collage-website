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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/slick.css"/>
    <link href="css/tooplate-little-fashion.css" rel="stylesheet">
    <!-- https://www.tooplate.com/view/2127-little-fashion -->
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
                                <a class="nav-link" href="about">Story</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="products">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="category?id=1">category</a>
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

            <div class="row four" >
                <div class="col-md-3">
                    <div class="text-center">
                        <img class="profile-img" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="Profile Picture">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="profile-settings-heading">
                        <h2>Profile Settings</h2>
            </div>

            <!-- Profile settings form -->
            <form id="profileForm" class="form" method="POST" action="{{ route('store.profile') }}">
                    @csrf
                    <div class="row">
                        <!-- Name Field -->
                        <div class="col-md-6">
                            <label class="labels">Name</label>
                            <input type="text" name="full_name" class="form-control" placeholder="Name" value="{{ $userDetail->full_name ?? '' }}" required>
                        </div>
                        <!-- Email Field -->
                        <div class="col-md-6">
                            <label class="labels">Email</label>
                            <input type="text" name="e_mail" class="form-control" placeholder="Enter your Email" value="{{ $userDetail->e_mail ?? '' }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Address Field -->
                        <div class="col-md-6">
                            <label class="labels">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $userDetail->address ?? '' }}" required>
                        </div>
                        <!-- Gender Field -->
                        <div class="col-md-6">
                            <label class="labels">Gender</label>
                            <input type="text" name="gender" class="form-control" placeholder="Enter your Gender" value="{{ $userDetail->gender ?? '' }}" required>
                        </div>
                    </div>

                        <div class="row mt-3">
                        <!-- Mobile Number Field -->
                        <div class="col-md-6">
                            <label class="labels">Mobile Number</label>
                            <input type="text" name="phone_number" class="form-control" placeholder="Enter Phone Number" value="{{ $userDetail->phone_number ?? '' }}" required>
                        </div>
                        <!-- Birthdate Field -->
                        <div class="col-md-6">
                            <label class="labels">Birthdate</label>
                            <input type="date" name="birthdate" class="form-control" placeholder="Enter Birthdate" value="{{ $userDetail->birthdate ?? '' }}" required>
                        </div>
                    </div>

                    <div class="mt-4 text-center">
                        <!-- Save Profile Button -->
                        <button class="profile-button" type="submit">Save Profile</button>
                    </div>
            </form>


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
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
