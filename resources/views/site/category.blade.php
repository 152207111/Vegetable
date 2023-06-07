<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- {{-- fontawesome ko css link gareko --}} -->
    <link rel="stylesheet" href="{{ asset('site/fontawesome/all.css') }}">

    <!-- {{-- bootstrap ko css link gareko --}} -->
    <link rel="stylesheet" href="{{ asset('site/bootstrap/bootstrap.css') }}">

    <!-- {{-- style.css link gareko --}} -->
    <link rel="stylesheet" href="{{ asset('site/css/category.css') }}">
</head>
<body>
<!-- {{-- top-header section starts here --}} -->
    <section id="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-xl-8 col-sm-12 col-12 text-sm-center">
                    <div class="top-header-contact">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                <i class="fa-solid fa-location-dot icon"></i> Pokhara - 8, Sirjana Chowk
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                <i class="fa-solid fa-phone icon"></i> +977 061-538358
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-12 text-end header-text-sm-hide">
                    <div class="top-header-social-icon">
                        <a href="">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- {{-- top-header section ends here --}} -->

    <!-- {{-- navbar section starts here --}} -->
    <section id="top-header-navbar">
       
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
         <a  class="navbar-brand"href="">
          <img src="{{asset('site/image/metrologo.png')}}" alt="logo" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto text-center">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link active" href="/about">About Us</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" >
          Category
        </a>
      </li>
          <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
</div>
</div>
</nav>
</section>
<div class="top-of-category">
   <div class="left">
        <p><h2>"The greatest wealth is health."</h2></p>
        <p><h4>Welcome to category page ! Here you can find wide range of our product</h4></p>
        <h3>Your One-Stop Destination for All Things Vegetables: Elevate Your Cooking and Embrace the Art of Healthy Eating</h3>
        <button><a href="">Shop Now</a></button>
   </div>
   <div class="image">
    <img src="{{asset ('site/image/top.png')}}" alt="vegetable image">
  </div>
</div>
<section class="main-category">
  <div class="category-title">
    <h2>Category</h2>
  </div>

  <div class="category">
    <div class="category-item">
      <div class="image">
        <img src="{{ asset('site/image/vegetable.jpg')}}" alt="">
      </div>
      <div class="image-title">
        <h2><a href="">Vegetable</a></h2>
      </div>
    </div>
    <div class="category-item">
      <div class="image">
        <img src="{{ asset('site/image/fruit.jpg')}}" alt="">
      </div>
      <div class="image-title">
        <h2><a href="">Fruit</a></h2>
      </div>
    </div>

    <div class="category-item">
      <div class="image">
        <img src="{{ asset('site/image/spices.jpg')}}" alt="">
      </div>
      <div class="image-title">
        <h2><a href="">Spices</a></h2>
      </div>
    </div>

    <div class="category-item">
      <div class="image">
        <img src="{{ asset('site/image/other.jpg')}}" alt="">
      </div>
      <div class="image-title">
        <h2><a href="">Other items</a></h2>
      </div>
    </div>
  </div>
</section>


 <section>
  <div class="product-section">
    <div class="title" style="text-align:center;">
      <h2><span>Vege</span>table</h2>
    </div>
    <div class="product-detail">
      <div class="product">
        <div class="image">
          <div class="product-title">
            Cucumber
          </div>
          <img src="{{ asset('site/image/cucumber.jpg')}}" alt="cucumber">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.7<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.100</span>|<del>RS.150</del>|</h1>
          <h3>Category: Vegetable</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
            Potato
          </div>
          <img src="{{ asset('site/image/potato.avif')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.8<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.50</span>|<del>Rs.80</del>|</h1>
          <h3>Category: Vegetable</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
            Onion
          </div>
          <img src="{{ asset('site/image/onion.jpg')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.6<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.60</span>|<del>Rs.90</del>|</h1>
          <h3>Category: Vegetable</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="product-section">
    <div class="title" style="text-align:center;">
      <h2><span>Fru</span>it</h2>
    </div>
    <div class="product-detail">
      <div class="product">
        <div class="image">
          <div class="product-title">
            Apple
          </div>
          <img src="{{ asset('site/image/app.webp')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.9<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.240</span>|<del>Rs.300</del>|</h1>
          <h3>Category: Fruit</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
            Orange
          </div>
          <img src="{{ asset('site/image/orange.jpg')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.9<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.120</span>|<del>RS.150</del>|</h1>
          <h3>Category: Fruit</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
            Guava
          </div>
          <img src="{{ asset('site/image/guava.jpg')}}" alt="">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.5<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.80</span>|<del>Rs.80</del>|</h1>
          <h3>Category: Fruit</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="product-section">
    <div class="title" style="text-align:center;">
      <h2><span>Spi</span>ces</h2>
    </div>
    <div class="product-detail">
      <div class="product">
        <div class="image">
          <div class="product-title">
            Turmeric
          </div>
          <img src="{{ asset('site/image/turmeric.jpg')}}" alt="turmeric image">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.4<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.150</span>|<del>RS.180</del>|</h1>
          <h3>Category: Spices</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
            Cumin
          </div>
          <img src="{{ asset('site/image/cumin.jpg')}}" alt="Cumin image">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.5<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.100</span>|<del>RS.150</del>|</h1>
          <h3>Category: Spices</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="image">
          <div class="product-title">
            Ginger
          </div>
          <img src="{{ asset('site/image/ginger.webp')}}" alt="Ginger image">
        </div>
        <div class="content">
          <div class="product-top">
            <h2>100% Fresh <span class="rate">4.3<span class="star"><i class="fa-solid fa-star"></i></span></span></h2>
          </div>
          <h1><span>Rs.80</span>|<del>RS.100</del>|</h1>
          <h3>Category: Spices</h3>
          <div class="button">
            <button>View Detail</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="product-section">
    <div class="title" style="text-align:center;">
      <h2><span>Other</span>-items</h2>
    </div>
  </div>
</section>

  

    <!-- {{-- jquery link gareko --}} -->
    <script src="{{ asset('site/jquery/jquery.js') }}"></script>

    <!-- {{-- proper js ko javascript link gareko --}} -->
    <script src="{{ asset('site/bootstrap/proper.js') }}"></script>

    <!-- {{-- bootstrap ko javascript lai link gareko --}} -->
    <script src="{{ asset('site/bootstrap/bootstrap.js') }}"></script>


    <!-- {{-- fontawesome ko js link gareko --}} -->
    <script src="{{ asset('site/fontawesome/all.js') }}"></script>

    <!-- {{-- script.js link gareko --}} -->
    <script src="{{ asset('site/js/script.js') }}"></script>    
</body>
</html>