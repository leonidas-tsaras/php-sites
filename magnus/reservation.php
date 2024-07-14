<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/reservation.css">
    <script src="./js/main.js"></script>
    <title>Document</title>
</head>
<body>
    <div id = "wrapper">

    <?php include_once("./header.php"); ?>
        <main>

            <section class = "two-boxes">
                <div>
                    <h2>ΚΆΝΤΕ ΚΡΆΤΗΣΗ</h2>
                    <p class = "colored-text">Τα αιτήματα ελέγχονται καθημερινά</p>
                    <p>Εδώ ξεκινά το κείμενό σας. Κάντε κλικ και αρχίστε να πληκτρολογείτε. Νυμκυαμ σορρυμπιθ θε πρω δωλορε μελιορε.</p>
                    <p>Ιδ δισερετ διγνισιμ αβχορρεανθ υθ νες ευ κυο μεις μινιμ ηις ιδ ενιμ ετιαμ ωφφενδιθ ει εαμ πορρω δισερε ερυδιθι δολορες σενσιβυς.</p>
                    <p>Καλέστε τώρα: 178-965-4321</p>
                </div>

                <div>
                    <form id = "contact">
                        <div>
                            <img src="./images/house-solid.svg" alt="">
                        </div>
                        <h2>Make a reservation</h2>
                        <input type="text" placeholder="FullName">
                        <input type="email" placeholder="e-mail">
                        <input type="tel" placeholder="phone">
                        <textarea rows="5" placeholder="Message"></textarea>
                        <input id = "submit" type="submit" value="Αποστολή">
                    </form>
                </div>
            </section>
        </main>

        <?php include_once("./footer.php"); ?>
    </div>
</body>
</html>