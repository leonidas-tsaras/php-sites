<?php include("header.php") ?>

<main id = "contact">
    <h1>Contact</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil maiores temporibus ipsa, id corporis architecto error quae? Aut sunt eligendi aliquid ab nisi nemo dolores nobis maiores, non temporibus doloribus quo rerum id odit facere velit? Tempore distinctio esse odit sequi laudantium ipsam quasi delectus, sed voluptatibus dolore nihil autem?</p>
<?php
    date_default_timezone_set("Europe/Athens");
    echo "The date is: " . date("d/m/Y") . "<br>";
    echo "The time is: " . date("h:i:sa") . "<br>";
?>

<div class="contact-form-wrapper">
    <form method = 'POST' action = "<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">

    <section class = "form-email">
    <p>E-mail:</p>
    <p><input type = 'email' value = "" name = 'email' required></p>
    </section>

    <section class = "form-fullname">
    <p>Full name:</p>
    <p><input type = "text"  name = "fullname" value = "" required></p>
    </section>

    <section class = "form-subject">
    <p>Subject:</p>
    <p><input type = "text" name = "subject" value = "" required></p>
    </section>

    <section class = "form-message">
    <p>Message:</p>
    <p><textarea rows = "5" name = "message" required></textarea></p>
    </section>

    <section class = "form-submit">
    <p><input type = 'submit' name = "submit" value = "Submit"></p>
    </section>
    </form>
</div>

</main>

<?php include("footer.php") ?>

