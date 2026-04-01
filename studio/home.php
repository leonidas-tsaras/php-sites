<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/home.css">
  <script src="./js/main.js"></script>
  <title>Home page</title>
</head>

<body>
  <?php include("header.php"); ?>

  <div class="wrapper" id="expert">
    <h1>Expert Architectural Services</h1>
    <div id="services">
      <div>
        <img src="./images/services-a.svg" alt="services">

        <h3>Designs and drafting</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi sequi voluptatum atque modi qui ad,
          voluptate ullam.</p>
      </div>
      <div>
        <img src="./images/services-b.svg" alt="services">
        <h3>3D Rendering</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi sequi voluptatum atque modi qui ad,
          voluptate ullam.</p>
      </div>
      <div>
        <img src="./images/services-c.svg" alt="services">
        <h3>Architectural surveys</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi sequi voluptatum atque modi qui ad,
          voluptate ullam.</p>
      </div>
    </div>
  </div>

  <div class="portfolio">
    <h2>PORTFOLIO</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius cumque quia pariatur? Odio eius praesentium
      repellat porro perferendis omnis nulla rerum itaque, suscipit ipsam blanditiis dicta nobis, exercitationem ullam
      dolorem.</p>

    <div class="wrapper" id="images">
      <div class="image-scale"><img src="./images/home-portfolio-a.webp" alt=""></div>
      <div class="image-scale"><img src="./images/home-portfolio-b.webp" alt=""></div>
      <div class="image-scale"><img src="./images/home-portfolio-c.webp" alt=""></div>
      <div class="image-scale"><img src="./images/home-portfolio-d.webp" alt=""></div>
      <div class="image-scale"><img src="./images/home-portfolio-e.webp" alt=""></div>
      <div class="image-scale"><img src="./images/home-portfolio-f.webp" alt=""></div>
    </div>

    <a class="button" href="#">Show More</a>
  </div>

  <div class="wrapper">
    <?php include("footer.php"); ?>
  </div>
</body>

</html>