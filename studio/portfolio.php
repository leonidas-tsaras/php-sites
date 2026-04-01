<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/portfolio.css">
  <script src="./js/main.js"></script>
  <title>Portfolio page</title>
</head>

<body>
  <?php include("header.php"); ?>

  <section id="portfolio">
    <h1>PORTFOLIO</h1>
    <div class="wrapper cards">

      <figure class="portfolio">
        <img src="./images/portfolio-a.webp" alt="">
        <figcaption>
          <h3>Shopping mall</h3>
          <p>Ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
        </figcaption>
      </figure>

      <figure class="portfolio">
        <img src="./images/portfolio-b.webp" alt="">
        <figcaption>
          <h3>Apartment building</h3>
          <p>Ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
        </figcaption>
      </figure>

      <figure class="portfolio">
        <img src="./images/portfolio-c.webp" alt="">
        <figcaption>
          <h3>Public library</h3>
          <p>Ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
        </figcaption>
      </figure>

      <figure class="portfolio">
        <img src="./images/portfolio-d.webp" alt="">
        <figcaption>
          <h3>Park relax zones</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </figcaption>
      </figure>

      <figure class="portfolio">
        <img src="./images/portfolio-e.webp" alt="">
        <figcaption>
          <h3>Shopping mall</h3>
          <p>Et dolore magnam aliquam quaerat voluptatem ut enim.</p>
        </figcaption>
      </figure>

      <figure class="portfolio">
        <img src="./images/portfolio-f.webp" alt="">
        <figcaption>
          <h3>Detached family house</h3>
          <p>Et dolore magnam aliquam quaerat voluptatem ut enim.</p>
        </figcaption>
      </figure>
    </div>
  </section>

  <div class="our-work">
    <h2>DO YOU LIKE OUR WORK?</h2>
    <p>This is where your text starts. You can click here and start typing. Veritatis et quasi architecto beatae vitae
      dicta sunt explicabo.</p>
    <a class="button" href="#">Hire us</a>
  </div>

  <div class="wrapper">

    <?php include("footer.php"); ?>

  </div>
</body>

</html>