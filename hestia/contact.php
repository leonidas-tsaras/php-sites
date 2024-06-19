<?php
    include_once("header.php");
?>

<link rel="stylesheet" href="./css/contact.css">
    <title>Contact</title>
    <script>

        function validateContactForm() {
            event.preventDefault();
            let form = document.querySelector("form#contact-form");
            let result = document.querySelector("div p#result");
            let fullName = document.querySelector('input[placeholder="Full Name"]');
            if(fullName.value == "") {
                //alert("Please fill in Full Name");
                result.textContent = "Please fill in Full Name";
                return;
            }

            let subject = document.querySelector('input[placeholder="Subject"]');
            if(subject.value == "") {
                //alert("Please fill in Subject");
                result.textContent = "Please fill in Subject";
                return;
            }

            let email = document.querySelector('input[type="email"]');
            if(email.value == "") {
                //alert("Please fill in E-mail");
                result.textContent = "Please fill in E-mail";
                return;
            }

            let message = document.querySelector('textarea');
            if(message.value == "") {
                //alert("Please fill in Message");
                result.textContent = "Please fill in Message";
                return;
            }

            
            //form.submit();
/*             form.reset();
            result.classList.add("success");
            result.textContent = "Thanks for contacting us";
            result.classList.remove("success"); */
            //alert("Thanks for contacting us");
        }

    </script>


        <main id = "contact">
            <section>
                <div>
                    <h3>Connect With Us</h3>
                    <table class = "connect">
                        <tr>
                            <td>
                                <h4><img src="./images/contact/location.svg"> LOCATION</h4>
                                <p>123 Demo Street<br>
                                Athens, Greece 12345</p>
                            </td>
                            <td>
                                <h4><img src="./images/contact/phone.svg"> MAIN PHONE</h4>
                                <p>+1 (555) 555-5555</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4><img src="./images/contact/maintenance.svg"> MAINTENANCE PHONE</h4>
                                <p>+1 (555) 555-5555</p>
                            </td>
                            <td>
                                <h4><img src="./images/contact/email.svg">EMAIL</h4>
                                <p>email@example.com</p>
                            </td>
                        </tr>
                    </table>
                    
                    <h4>Social Media</h4>
                    <p id = "social-icons">
                        <a target="_blank" href="https://facebook.com/">
                            <img src="./images/social/facebook.svg">
                        </a>
                        <a target="_blank" href="https://instagram.com/">
                            <img src="./images/social/instagram.svg">
                        </a>
                        <a target="_blank" href="https://whatsapp.com/">
                            <img src="./images/social/whatsapp.svg">
                        </a>
                        <a target="_blank" href="mailto:info@example.com">
                            <img src="./images/social/email.svg">
                        </a>
                        <!-- 
                        <a target="_blank" href="tel:+301234567890">
                            <img src="./images/social/tel.svg">
                        </a> 
                        -->
                    </p>
                </div>
                <div>
                    <h3>We'd love to hear from you</h3>

                    <?php

$method = $_SERVER['REQUEST_METHOD'];

$error = "";
$fullname = "";
$subject = "";
$email = "";
$message = "";

if($method === "POST") {

    $email = $_POST["email"];
    $fullname = $_POST["full-name"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    //sanitization
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $fullname = filter_var($fullname, FILTER_SANITIZE_STRING);
    $subject = filter_var($subject, FILTER_SANITIZE_STRING);
    $message = filter_var($message, FILTER_SANITIZE_STRING);
    

    if($fullname === "") {
        $error = "Συμπληρώστε Όνομα επώνυμο";
    }


    if($error === "") {
        if($subject === "") {
            $error = "Συμπληρώστε θέμα";
        }
    }

    if($error === "") { 
        $valid = filter_var($email, FILTER_VALIDATE_EMAIL);
        if($valid === false) {
            $error = "Μη έγκυρο email";
        }
    }

    if($error === "") {
        if($message === "") {
            $error = "Συμπληρώστε μήνυμα";
        }
    }

    if($error === "") {
        //send mail to admin
        $msg = "";
        $msg .= $fullname . "<br>";
        $msg .= $subject . "<br>";
        $msg .= $email . "<br>";
        $msg .= $message . "<br>";

        //mail("admin@hestia.com", "contact form message", $msg);
    }
}
?>
                    <?php 
                    if($method === "POST" && $error === "") {
                        $fullname = "";
                        $subject = "";
                        $email = "";
                        $message = "";
                    }
                    ?>

                    <form method = "POST" id="contact-form" action = "contact.php" onsubmit = "validateContactForm()">
                        <input type="text" value = "<?php echo $fullname ?>" placeholder="Full Name" name = "full-name">
                        <input type="text" value = "<?php echo $subject ?>" placeholder="Subject" name = "subject">
                        <input type="email" value = "<?php echo $email ?>" placeholder="E-mail" name = "email">
                        <textarea value = "<?php echo $message ?>"  maxlength="100" placeholder="Message (up to 100 characters)" name = "message"></textarea>
                        <input type="submit" value="Send Message">
                    </form>

                    <p id = "result" class = "error">
                        <?php
                        if($method === "POST") {
                            if($error === "") {
                                echo "<p class = 'success'>Thanks for contacting us</p>";
                            } else {
                                echo "<p class = 'error'>$error</p>";
                            }
                        }
                        ?>
                    </p>
                </div>

            </section>

            <iframe id="google-map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3143.669245380397!2d23.80209934727762!3d38.00817468322261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a19851f193765f%3A0x63ae3d1b2b05310f!2zzpzOtc-Dzr_Os861zq_Pic69IDMwMCwgzqfOv867zrHPgc6zz4zPgiAxNTUgNjI!5e0!3m2!1sel!2sgr!4v1682609464291!5m2!1sel!2sgr"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </main>

<?php
    include_once("footer.php");
?>