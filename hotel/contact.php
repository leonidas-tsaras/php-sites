<?php require_once("header.php") ?>
        <main id = "contact">
            <section>
                <div>
                    <h2>Φόρμα Επικοινωνίας</h2>
                    <form action="" method="post">
                        <label>Email:</label>
                        <input type="email" name="email" value="">
                        <label>Ονοματεπώνυμο:</label>
                        <input type="text" name="name" value="">
                        <label>Θέμα:</label>
                        <input type="text" name="subject" value="">
                        <label>Μήνυμα:</label>
                        <textarea name="message"></textarea>
                        <input type="submit" value="Αποστολή">
                    </form>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto voluptatum maxime eaque quidem ad cupiditate aut labore cumque. Consequatur.</p>
                    <div></div>
                </div>

                <div>
                    <h2>Στοιχεία επικοινωνίας</h2>
                    <h3>Διεύθυνση:</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <h3>E-mail:</h3>
                    <p>info@myhotel.com</p>
                    <h3>Τηλέφωνο:</h3>
                    <p>+30 1234567890</p>
                    <h3>Κοινωνικά δίκτυα:</h3>
                    <aside>
                        <a href="mailto: info@myhotel.com"><img src="images/email.svg" alt=""></a>

                        <a href="https://facebook.com/myhotel"><img src="images/facebook.svg" alt=""></a>

                        <a href="https://instagram.com/myhotel"><img src="images/instagram.svg" alt=""></a>

                        <a href="https://messenger.com/myhotel"><img src="images/messenger.svg" alt=""></a>

                        <a href="tel: +30 1234567890"><img src="images/whatsapp.svg" alt=""></a>
                    </aside>
                </div>
            </section>
            <section>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3143.153528094622!2d23.79449472801289!3d38.020200140907306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1998fe9073d95%3A0xa9d0cd07a7ff1a2b!2zzqfOsc67zrHOvc60z4HOuQ!5e0!3m2!1sel!2sgr!4v1675672077891!5m2!1sel!2sgr" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
        
        </main>
<?php require_once("footer.php") ?>