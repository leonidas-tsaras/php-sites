<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/rooms.css">
    <script src="./js/main.js"></script>
    <title>Rooms</title>

    <style>
        * {
            box-sizing: border-box;
            border: none;
            margin: 0;
            padding: 0;
        }

        div.slider {
            --WIDTH: 600px;
            width: 100%;
            max-width: var(--WIDTH);
            aspect-ratio: 3/2;
            position: relative;
            overflow: hidden;
        }

        div.slider div.arrows {
            position: sticky;
            left: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        div.slider div.arrows > button {
            background-color: rgba(211, 124, 11, 0.6);
            color: white;
            cursor: pointer;
            font-size: 20px;
            padding: 5px;
        }

        div.slider > div.scroller {
            display: flex;
            border: solid thin green;
            width: fit-content;
            position: absolute;
            left: 0;
            top: 0;
        }

        div.slider > div.scroller > img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

    <script>
        function getNext() {
            let slider = document.querySelector("div.slider");
            let width = slider.offsetWidth;
            slider.scrollBy({top: 0, left: width, behavior: "smooth"});
        }

        function getPrev() {
            let slider = document.querySelector("div.slider");
            let width = slider.offsetWidth;
            slider.scrollBy({top: 0, left: -width, behavior: "smooth"});
        }
    </script>    
</head>
<body>
    <div id = "wrapper">
    <?php include_once("./header.php"); ?>
        <main>
            <section class = "two-boxes">
                <div>
                    <img src="./images/rooms-a.jpg" alt="">
                </div>
                <div>
                    <h2>ΠΡΟΤΕΙΝΌΜΕΝΑ ΔΩΜΆΤΙΑ</h2>
                    <p class = "colored-text">Μονόκλινα και δίκλινα δωμάτια</p>
                    <p>Κάντε κλικ εδώ και αρχίστε να πληκτρολογείτε. Θε νυμκυαμ σορρυμπιθ θε πρω δωλορε μελιορε ασυσαμ συμ ετ.</p>
                    <p>Νυμκυαμ σορρυμπιθ θε πρω δωλορε μελιορε ασυσαμ συμ ετ ιυφαρεθ ρεσυσαβο ραθιονιβυς θε παυλω λεγενδως σωνσεπθαμ ναμ ναθυμ αλιενυμ ανσιλλαε ιν.</p>
                </div>
            </section>

            <section class = "three-images">
                <img src="./images/home-a.jpg" alt="">
                <img src="./images/home-b.jpg" alt="">
                <img src="./images/home-c.jpg" alt="">
            </section>

            <section class = "two-boxes">
                <div>
                    <h2>ΣΟΥΊΤΕΣ</h2>
                    <p class = "colored-text">Περισσότερος χώρος, περισσότερη άνεση</p>
                    <p>Εδώ ξεκινά το κείμενό σας. Κάντε κλικ και αρχίστε να πληκτρολογείτε. Δωλορε μελιορε ασυσαμ συμ ετ ιυφαρεθ ρεσυσαβο ραθιονιβυς θε παυλω λεγενδως σωνσεπθαμ ναμ ναθυμ αλιενυμ.</p>
                    <p>Υθ μελ ιδ κυο θεμπορ περσιπιθυρ κυο νεμωρε δεσερυισε ιδ ιδ φις αεκυε σριβενθυρ αλτερα δεθραξιθ προδεσεθ μεα ει ευ μελ δεσωρε μαιορυμ σαλε περτινασια.</p>
                </div>
                <div>
                    <!-- <img src="./images/rooms-b.jpg" alt=""> -->

                    <div class="slider">
                        <div class = "scroller">
                            <img src="./images/rooms-a.jpg">
                            <img src="./images/rooms-b.jpg">
                            <img src="./images/home-a.jpg">
                        </div>
                        <div class = "arrows">
                            <button onclick="getPrev()">⮜</button>
                            <button onclick = "getNext()">⮞</button>
                        </div>
                    </div>

                </div>
            </section>
        </main>

        <?php include_once("./footer.php"); ?>
    </div>
</body>
</html>