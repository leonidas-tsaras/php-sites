<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/about.css">
  <script src="./js/main.js"></script>
  <title>About page</title>
</head>

<body>

  <?php include("header.php"); ?>

  <section id="about">
    <h1>ABOUT US</h1>
    <div class="wrapper">
      <div><!-- left column -->
        <article>
          <div>
            <img src="./images/about-a.svg" alt="">
          </div>
          <div>
            <h2>Award-winning architects</h2>
            <p>Click here and start typing. Error sit voluptatem accusantium doloremque.</p>
          </div>
        </article>
        <article>
          <div>
            <img src="./images/about-b.svg" alt="">
          </div>
          <div>
            <h2>Detailed documentation</h2>
            <p>Click here and start typing. Error sit voluptatem accusantium doloremque.</p>
          </div>
        </article>
      </div>

      <div> <!-- right column -->
        <article>
          <div>
            <img src="./images/about-c.svg" alt="">
          </div>
          <div>
            <h2>Working with clients' ideas</h2>
            <p>Click here and start typing. Error sit voluptatem accusantium doloremque.</p>
          </div>
        </article>
        <article>
          <div>
            <img src="./images/about-d.svg" alt="">
          </div>
          <div>
            <h2>Fast and reliable</h2>
            <p>Click here and start typing. Error sit voluptatem accusantium doloremque.</p>
          </div>
        </article>
      </div>
    </div>
  </section>


  <section id="experts">
    <h1>TEAM OF EXPERTS</h1>
    <div class="wrapper">
      <div><!-- left column -->
        <article>
          <div>
            <img src="./images/about-a.webp" alt="">
          </div>
          <div>
            <h2>Joe Carter</h2>
            <p>Architect</p>
            <p>"Odit aut fugit sed quia consequuntur magni dolores eos qui ratione."</p>
          </div>
        </article>
      </div>

      <div> <!-- right column -->
        <article>
          <div>
            <img src="./images/about-b.webp" alt="">
          </div>
          <div>
            <h2>Patricia Watson</h2>
            <p>Designer</p>
            <p>"Ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae."</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <div class="wrapper">

    <?php include("footer.php"); ?>

  </div>
</body>

</html>