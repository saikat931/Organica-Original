<!-- Global header/nav -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Organica - Quality organic fruit & vegetables.</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href= "./assets/css/main.css">
  <link rel="stylesheet" href= "./assets/css/home.css">
  <link rel="stylesheet" href= "./assets/css/about.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">

    

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>

    <div class="top-bar">
      <div class="container">
        <p>Free shipping for all order of $105</p>
      </div>
    </div>

    <div class="nav-wrapper">
      <div class="container">

        <h1 class="h1">
          <a href="./index.php" class="logo">Organ<span class="span">ica</span></a>
        </h1>

        <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
          <ion-icon name="menu-outline"></ion-icon>
        </button>

        <nav class="navbar" data-navbar>

          <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>

          <ul class="navbar-list">

            <li>
              <a href="./index.php?page=home" class="navbar-link">Home</a>
            </li>

            <li>
              <a href="index.php?page=about" class="navbar-link">About</a>
            </li>

            <li>
              <a href="index.php?page=shop" class="navbar-link">Shop</a>
            </li>

            <li>
              <a href="index.php?page=blog" class="navbar-link">Blog</a>
            </li>

            <li>
              <a href="index.php?page=product-details" class="navbar-link">Products</a>
            </li>

            <li>
              <a href="index.php?page=contact" class="navbar-link">Contact</a>
            </li>

          </ul>

        </nav>

        <div class="header-action">

          <div class="search-wrapper" data-search-wrapper>

            <button class="header-action-btn" aria-label="Toggle search" data-search-btn>
              <ion-icon name="search-outline" class="search-icon"></ion-icon>
              <ion-icon name="close-outline" class="close-icon"></ion-icon>
            </button>

            <div class="input-wrapper">
              <input type="search" name="search" placeholder="Search here" class="search-input">

              <button class="search-submit" aria-label="Submit search">
                <ion-icon name="search-outline"></ion-icon>
              </button>
            </div>

          </div>

          <button class="header-action-btn" aria-label="Open whishlist" data-panel-btn="whishlist">
            <ion-icon name="heart-outline"></ion-icon>

            <data class="btn-badge" value="3">03</data>
          </button>

          <button class="header-action-btn" aria-label="Open shopping cart" data-panel-btn="cart">
            <ion-icon name="basket-outline"></ion-icon>

            <data class="btn-badge" value="2">02</data>
          </button>

        </div>

      </div>
    </div>

  </header>



  <!-- 
    - #ASIDE
  -->

  <aside class="aside">

    <div class="side-panel" data-side-panel="whishlist">

      <button class="panel-close-btn" aria-label="Close whishlist" data-panel-btn="whishlist">
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <ul class="panel-list">

        <li class="panel-item">
          <a href="./product-details.html" class="panel-card">

            <figure class="item-banner">
              <img src="./assets/images/product-small-1.jpg" width="46" height="46" loading="lazy"
                alt="Bright Side Vegetarian">
            </figure>

            <div>
              <p class="item-title">Bright Side Vegetarian</p>

              <span class="item-value">$20.15x1</span>
            </div>

            <button class="item-close-btn" aria-label="Remove item">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </a>
        </li>

        <li class="panel-item">
          <a href="./product-details.html" class="panel-card">

            <figure class="item-banner">
              <img src="./assets/images/product-small-2.jpg" width="46" height="46" loading="lazy" alt="Eco Vegetable">
            </figure>

            <div>
              <p class="item-title">Eco Vegetable</p>

              <span class="item-value">$13.25x2</span>
            </div>

            <button class="item-close-btn" aria-label="Remove item">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </a>
        </li>

        <li class="panel-item">
          <a href="./product-details.html" class="panel-card">

            <figure class="item-banner">
              <img src="./assets/images/product-small-3.jpg" width="46" height="46" loading="lazy"
                alt="House of Veggies">
            </figure>

            <div>
              <p class="item-title">House of Veggies</p>

              <span class="item-value">$20.15x1</span>
            </div>

            <button class="item-close-btn" aria-label="Remove item">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </a>
        </li>

      </ul>

      <div class="subtotal">
        <p class="subtotal-text">Subtotal:</p>

        <data class="subtotal-value" value="215.14">$215.14</data>
      </div>

      <a href="./whishlist.html" class="panel-btn">View Whishlist</a>

    </div>

    <div class="side-panel" data-side-panel="cart">

      <button class="panel-close-btn" aria-label="Close cart" data-panel-btn="cart">
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <ul class="panel-list">

        <li class="panel-item">
          <a href="./product-details.html" class="panel-card">

            <figure class="item-banner">
              <img src="./assets/images/product-small-1.jpg" width="46" height="46" loading="lazy"
                alt="Bright Side Vegetarian">
            </figure>

            <div>
              <p class="item-title">Bright Side Vegetarian</p>

              <span class="item-value">$20.15x1</span>
            </div>

            <button class="item-close-btn" aria-label="Remove item">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </a>
        </li>

        <li class="panel-item">
          <a href="./product-details.html" class="panel-card">

            <figure class="item-banner">
              <img src="./assets/images/product-small-2.jpg" width="46" height="46" loading="lazy" alt="Eco Vegetable">
            </figure>

            <div>
              <p class="item-title">Eco Vegetable</p>

              <span class="item-value">$13.25x2</span>
            </div>

            <button class="item-close-btn" aria-label="Remove item">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </a>
        </li>

      </ul>

      <div class="subtotal">
        <p class="subtotal-text">Subtotal:</p>

        <data class="subtotal-value" value="215.14">$215.14</data>
      </div>

      <a href="./cart.html" class="panel-btn">View Cart</a>

    </div>

  </aside>

  