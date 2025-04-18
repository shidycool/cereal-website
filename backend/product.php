
<?php
session_start();
$exists = $_SESSION['id'] ?? 0;
if($exists == 0){
  ?>
  <meta http-equiv="refresh" content="5; url='../frontend/static/signin.html'"/>
  <?php
}
else{
  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
  <link rel="stylesheet" href="../styles/index.css">
  <link rel="stylesheet" href="../../frontend/styles/product.css">
  <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome"href="/css/app-wa-d53d10572a0e0d37cb8d614a3f177a0c.css?vsn=d">
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css">
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-thin.css">
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-solid.css">
  <link rel="stylesheet"href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-regular.css">
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/sharp-light.css">
</head>
<body>
  <div class="container product-page-container">
    <div class="nav-bar">
      <h5 class="logo"> Boreal cool Grain Store</h5>
      <div class="navbar-end">
        <fieldset class="search-bar">
          <input type="text" placeholder="Search ...">
          <img src="../../assets/search-02.svg" alt="Search">
        </fieldset>
        <p class="user-account"><i class="fa-solid fa-caret-down"></i> <span>Ra</span></p>
        <div class="cart">
          <i class="fa-regular fa-cart-shopping"></i>
          <span>0</span>
        </div>
      </div>
    </div>

    <div class="item-discount">
      <div class="discount-part">
        <div class="top">
          <h3>Get your item and 5% free on all items today</h3>
          <p class="date">31st May - 24th June</p>
        </div>
        <button class="btn">be the first</button>
      </div>

      <div class="promotion">
        <h3>Promotion promotion !!</h3>
        <p>As a way of boosting our customer base, we are running a 4 week campaign to increase the reach out</p>
        <button class="promotion-btn">Get all the updates here</button>
      </div>
    </div>

    <div class="products">
      <div class="products-title">
        <h2>Products</h2>
        <p class="top-rank">Top rank </p>
      </div>

      <div class="product-container">
        <div class="individual-products">
          <h3>Katumani maize</h3>
          <div class="details">
            <img src="../../assets/proso-image_original-removebg-preview.png" alt="Maize">
            <div class="metadata">
              <div class="price">
                <h3 class="price-details">
                  <span>Ksh</span>
                  <span> 3500</span>
                </h3>
                <h5 class="unit"> per Kg</h5>
              </div>
              <div class="range">
                  <label for="range">
                    <span>-</span>
                    <span>1</span>
                    <span>+</span>
                  </label>
                  <input type="range" name="" id="range" min="0" max="5" value="1">
              </div>
              <button class="addToCart">
                Add to cart
              </button>
            </div>
          </div>
          <input type="number" name="itemId" value="0" id="" hidden>
        </div>
        
        <div class="individual-products">
          <h3>Katumani maize</h3>
          <div class="details">
            <img src="../../assets/proso-image_original-removebg-preview.png" alt="Maize">
            <div class="metadata">
              <div class="price">
                <h3 class="price-details">
                  <span>Ksh</span>
                  <span> 3500</span>
                </h3>
                <h5 class="unit"> per Kg</h5>
              </div>
              <div class="range">
                  <label for="range">
                    <span>-</span>
                    <span>1</span>
                    <span>+</span>
                  </label>
                  <input type="range" name="" id="range" min="0" max="5" value="1">
              </div>
              <button class="addToCart">
                Add to cart
              </button>
            </div>
          </div>
          <input type="number" name="itemId" value="0" id="" hidden>
        </div>

        <div class="individual-products">
          <h3>Katumani maize</h3>
          <div class="details">
            <img src="../../assets/proso-image_original-removebg-preview.png" alt="Maize">
            <div class="metadata">
              <div class="price">
                <h3 class="price-details">
                  <span>Ksh</span>
                  <span> 3500</span>
                </h3>
                <h5 class="unit"> per Kg</h5>
              </div>
              <div class="range">
                  <label for="range">
                    <span>-</span>
                    <span>1</span>
                    <span>+</span>
                  </label>
                  <input type="range" name="" id="range" min="0" max="5" value="1">
              </div>
              <button class="addToCart">
                Add to cart
              </button>
            </div>
          </div>
          <input type="number" name="itemId" value="0" id="" hidden>
        </div>

        <div class="individual-products">
          <h3>Katumani maize</h3>
          <div class="details">
            <img src="../../assets/proso-image_original-removebg-preview.png" alt="Maize">
            <div class="metadata">
              <div class="price">
                <h3 class="price-details">
                  <span>Ksh</span>
                  <span> 3500</span>
                </h3>
                <h5 class="unit"> per Kg</h5>
              </div>
              <div class="range">
                  <label for="range">
                    <span>-</span>
                    <span>1</span>
                    <span>+</span>
                  </label>
                  <input type="range" name="" id="range" min="0" max="5" value="1">
              </div>
              <button class="addToCart">
                Add to cart
              </button>
            </div>
          </div>
          <input type="number" name="itemId" value="0" id="" hidden>
        </div>

        <div class="individual-products">
          <h3>Katumani maize</h3>
          <div class="details">
            <img src="../../assets/proso-image_original-removebg-preview.png" alt="Maize">
            <div class="metadata">
              <div class="price">
                <h3 class="price-details">
                  <span>Ksh</span>
                  <span> 3500</span>
                </h3>
                <h5 class="unit"> per Kg</h5>
              </div>
              <div class="range">
                  <label for="range">
                    <span>-</span>
                    <span>1</span>
                    <span>+</span>
                  </label>
                  <input type="range" name="" id="range" min="0" max="5" value="1">
              </div>
              <button class="addToCart">
                Add to cart
              </button>
            </div>
          </div>
          <input type="number" name="itemId" value="0" id="" hidden>
        </div>

       
      </div>
    </div>
  </div>
</body>
</html>
<?php
}
?>