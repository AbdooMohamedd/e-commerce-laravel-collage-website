<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        
      }

      body {
        
        font-family: Arial, sans-serif;
      
      }

      section{
          margin-top: 90px;
        
      }
      h2 {
          
      text-align: center;
      margin-top: 20px;
      
      }

      .shopping-cart {
        width: 700px;
        margin: 0 auto;
        margin-top: 30px;
        margin-bottom: 0px;
        background: #fffefe;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      .column-labels {
        display: flex;
        padding-bottom: 10px;
        border-bottom: 1px solid #eee;
        margin-bottom: 10px;
      }

      .column-labels label {
        flex: 1;
      }

      .product {
        display: flex;
        padding: 15px 0;
        border-bottom: 1px solid #eee;
      }

      .product img {
        width: 80px;
        height: auto;
        margin-right: 10px;
      }

      .product-details {
        flex: 1;
      }

      .product-title {
        font-weight: bold;
      }

      .product-price, .product-quantity, .product-removal, .product-line-price {
        flex: 1;
        text-align: center;
      }

      .totals {
        margin-top: 20px;
      }

      .totals-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
      }

      .totals-item label {
        flex: 1;
      }

      .totals-item .totals-value {
        flex: 1;
        text-align: right;
      }

      .totals-item-total {
        font-weight: bold;
      }

      .checkout {
        display: block;
        width: 100%;
        padding: 10px;
        margin-top: 20px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      .checkout:hover {
        background-color: #45a049;
      }

      input[type="number"] {
        width: 50px;
      }

    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <!-- Updated paths for CSS files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link href="{{ asset('css/tooplate-little-fashion.css') }}" rel="stylesheet">
</head>
<body>
      <nav class="navbar navbar-expand-lg">
          <div class="container">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <a class="navbar-brand" href="\">
                  <strong><span>Little</span> Fashion</strong>
              </a>

              <div class="d-lg-none">
                  <a href="sign-in.html" class="bi-person custom-icon me-3"></a>

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
                          <a class="nav-link" href="category?id=1">Category</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="faq">FAQs</a>
                      </li>
                  </ul>

                  <div class="d-none d-lg-block">
                      <a href="sign-in" class="bi-person custom-icon me-3"></a>

                      <a href="cartpage" class="bi-bag custom-icon active"></a>
                  </div>
              </div>
          </div>
      </nav>

    <section>
        <div class="col-12">
            <h2 class="mb-5">Shopping <span>Cart</span></h2>
        </div>

        <div class="shopping-cart">

            <div class="column-labels">
                <label class="product-image">Image</label>
                <label class="product-details">Product</label>
                <label class="product-price">Price</label>
                <label class="product-quantity">Quantity</label>
                <label class="product-removal">Total</label>
                <label class="product-line-price">Remove</label>
            </div>

            @foreach($cartItems as $item)
            <div class="product">
                <div class="product-image">
                    <img src="{{ $item->product->image_url }}" alt="Product Image">
                </div>
                <div class="product-details">
                    <div class="product-title">{{ $item->product->name }}</div>
                </div>
                <div class="product-price">{{ $item->product->price }}</div>
                <div class="product-quantity">{{ $item->quantity }}</div>
                <div class="product-line-price">{{ $item->product->price * $item->quantity }}</div>
                <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Remove</button>
                </form>
            </div>
            @endforeach

            <div class="totals">
                <div class="totals-item totals-item-total">
                    <label>Grand Total</label>
                    <div class="totals-value" id="cart-total">{{ $totalPrice }}</div>
                </div>
            </div>

            <form action="{{ route('cart.checkout') }}" method="POST">
                @csrf
                <button type="submit" class="checkout">Checkout</button>
            </form>
            
            

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


{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.remove-item').click(function() {
            var itemId = $(this).data('item-id');
            $.ajax({
                url: 'cartpage/remove-item/' + itemId,
                type: 'DELETE',
                success: function(response) {
                    // Reload the page or update the cart contents as needed
                    location.reload(); // For example, reload the page
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    // Handle the error gracefully, such as showing an error message
                    alert('Error removing item from cart. Please try again.');
                }
            });
        });
    });
</script> --}}

</html> 
