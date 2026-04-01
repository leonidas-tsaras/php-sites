<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/contact.css">
  <script src="./js/main.js"></script>
  <title>Contact page</title>
</head>

<body>
  <?php include("header.php"); ?>

  <section id="contact">
    <h1>CONTACT</h1>
    <div class="wrapper contact">
      <div>
        <form id="contact-form">
          <h2>Contact form</h2>
          <input type="text" placeholder="Full name" required>
          <input type="email" placeholder="e-mail" required>
          <input type="text" placeholder="Subject" required>
          <textarea rows="5" placeholder="Body" required></textarea>
          <input type="submit" value="Send">
        </form>
      </div>
      <div>
        <h4>ARCHITECT STUDIO</h4>
        <p>12 Pike St, New York, NY 10002</p>

        <h4>Business hours</h4>
        <p>Monday - Friday: 9:00am - 6:00pm</p>

        <h4>You can call us at:</h4>
        <p><a href="tel:+301234567890">+301234567890</a></p>

        <h4>Or e-mail us at:</h4>
        <p><a href="mailto:info@example.com">info@example.com</a></p>
      </div>
    </div>
  </section>

  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5287.20879641688!2d23.792722601206005!3d38.005284779303054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a19844208b7367%3A0xea77c159b28ba7a5!2zzqfOv867zrHPgc6zz4zPgg!5e0!3m2!1sel!2sgr!4v1739382748284!5m2!1sel!2sgr"
    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


  <div class="wrapper">
    <?php include("footer.php"); ?>
  </div>
</body>

</html>