<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/PM/site-php/">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/contact.css">
    <title>Επικοινωνία</title>
</head>
<body>
    <?php include_once("header.php"); ?>
    <div id="wrapper">
    <main id = "contact">
            <h1>Contact us</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, optio praesentium eum nostrum assumenda, ipsa quod iure recusandae doloremque dolore molestias vel voluptates! Iure architecto reprehenderit, deleniti provident nemo sed.</p>
            <section>
                <div>
                    <h3>Contact form</h3>
                    <form action="" method="post">
                        <label>Email:</label>
                        <input type="email" name="email" value="">
                        <label>Full Name:</label>
                        <input type="text" name="name" value="">
                        <label>Subject:</label>
                        <input type="text" name="subject" value="">
                        <label>Message:</label>
                        <textarea name="message"></textarea>
                        <input type="submit" value="Send">
                    </form>
                </div>
                <div>
                    <h3>Contact elements</h3>
                    <h4>Address:</h4>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <h4>E-mail:</h4>
                    <p>info@example.gr</p>
                    <h4>Tel:</h4>
                    <p>+30 1234567890</p>
                    <h4>Social media</h4>
                    <aside>
                        <a href="mailto: info@myrestaurant.gr"><img src="images/email.svg" alt=""></a>
                        <a href="https://facebook.com/restaurant"><img src="images/facebook.svg" alt=""></a>
                        <a href="https://instagram.com/restaurant"><img src="images/instagram.svg" alt=""></a>
                        <a href="https://messenger.com/restaurant"><img src="images/messenger.svg" alt=""></a>
                        <a href="tel: +30 1234567890"><img src="images/whatsapp.svg" alt=""></a>
                    </aside>
                </div>
            </section>

            <section>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3143.6750455610722!2d23.80213922867324!3d38.00803941667239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a19851f193765f%3A0x63ae3d1b2b05310f!2zzpzOtc-Dzr_Os861zq_Pic69IDMwMCwgzqfOv867zrHPgc6zz4zPgiAxNTUgNjI!5e0!3m2!1sel!2sgr!4v1675708436729!5m2!1sel!2sgr"
                    allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
        </main>
    </div>
    <?php include_once("footer.php"); ?>
</body>
</html>