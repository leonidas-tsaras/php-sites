<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <!-- <link rel="stylesheet" href="./css/home.css"> -->
    <script src="./js/main.js"></script>
    <title>Home</title>
    <!-- 
https://www.webnode.com/el/leptomereies-template/axbhow/?_gl=1%2A1d19h6b%2A_up%2AMQ..&gclid=EAIaIQobChMIjbL00-6MgwMV6QUGAB3GnwKjEAAYASAAEgKZPfD_BwE
     -->
    
<style>
    div#date-time {
        border-top: solid thin gray;
        border-bottom: solid thin gray;
        padding: 0.5rem 0;
        width: 100%;
        margin-top: 1rem;
        text-align: right;
    }
</style>



</head>
<body>
    <div id = "wrapper">
    <?php include_once("./header.php"); ?>
        <main>
            <section class = "full-width-image">
                <img src="./images/home.jpg" alt="">
            </section>

            <section class = "two-texts">
                <div>
                    <h2>ΞΕΝΟΔΟΧΕΙΟ<br>MAGNIUS</h2>
                    <p class = "colored-text">Απολαύστε τη διαμονή σας</p>
                </div>
                <div>
                    <p>Εδώ ξεκινά το κείμενό σας. Κάντε κλικ και αρχίστε να πληκτρολογείτε. Ναμ ναθυμ αλιενυμ ανσιλλαε ιν συμ φιδιτ κυαερενδυμ εαμ συ φελ αν εραντ σανστυς.</p>
                    <p>Υθ μελ ιδ κυο θεμπορ περσιπιθυρ κυο νεμωρε δεσερυισε ιδ ιδ φις αεκυε σριβενθυρ αλτερα δεθραξιθ προδεσεθ μεα ει ευ μελ δεσωρε μαιορυμ σαλε περτινασια αν φις νο δυις σονγυε ρεφορμιδανς σιθ ευ ιυς φυγιθ ποπυλω πορρω σριπθα λαορεεθ υθ φιμ νε σιθ.</p>
                </div>
            </section>


            <section class = "three-images">
                <img src="./images/home-a.jpg" alt="">
                <img src="./images/home-b.jpg" alt="">
                <img src="./images/home-c.jpg" alt="">
            </section>


            <section class = "reservation">
                <h2>Κάντε κράτηση</h2>
                <p class = "colored-text">Τα αιτήματα ελέγχονται καθημερινά</p>
                <a href="#">ΚΛΕΙΣΤΕ ΔΩΜΑΤΙΟ</a>
            </section>

        </main>

        <?php include_once("./footer.php"); ?>


    </div>

    <script>
        getData("https://worldtimeapi.org/api/timezone/Europe/Athens")
        .then((data) => {
            let div = document.querySelector("div#date-time");
            div.textContent = "Athens: " + data.datetime;
        });
    </script>
</body>
</html>