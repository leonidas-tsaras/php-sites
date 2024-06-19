<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/PM/site-php/">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/desserts.css">
    <title>Products</title>
</head>
<body>
    <?php include_once("header.php"); ?>
    <div id="wrapper">
    <main id = "desserts">
            <h1>Desserts</h1>
            <p>Deck the Halls With These Holiday Cakes From Around the World
                Whip up Babka, Budapest Rolls, Black Cake, and a Bûche de Noël to crown the sweetest season of the year.</p>
            <section>
                <div>
                    <!-- https://www.foodandwine.com/recipes/creamy-spaghetti-carbonara-peas-and-ham -->
                    <h2>Panettone</h2>
                    <figure>
                        <img src="./images/desserts/panettone.webp" alt="">
                        <figcaption>Toasted hazelnuts and softened chocolate make this rich, buttery Italian panettone recipe from Chicago baker Greg Wade a favorite during the holidays.</figcaption>
                    </figure>
                </div>

                <div>
                    <h2>Jamaican Black Cake</h2>
                    <figure>
                        <img src="./images/desserts/jamaican-black-cake.webp" alt="">
                        <figcaption>The delicate nuance of raw almonds (and almond extract), the warm spiky notes of allspice, and plenty of rum inform Brigid Ransome Washington’s version of Black Cake with a uniquely Jamaican sensibility.</figcaption>
                    </figure>
                </div>       
                
                <div>
                    <h2>Bûche de Noël</h2>
                    <figure>
                        <img src="./images/desserts/buche-de-noel.webp" alt="">
                        <figcaption>A few smart moves make this Bûche de Noël by Paige Grandjean a cut above the rest. Allowing the cake to cool while still rolled helps prevent cracking. Mascarpone stabilizes the whipped cream filling so that it can be chilled up for hours without weeping. Butter and corn syrup in the ganache keep it smooth and glossy. And stirring slivered toasted almonds into the ganache frosting gives it a “tree bark” look and adds contrasting texture to the silky filling and tender cake.</figcaption>
                    </figure>
                </div>  

                <div>
                    <h2>Plum Pudding</h2>
                    <figure>
                        <img src="./images/desserts/plum-pudding.webp" alt="">
                        <figcaption>This dessert is not pudding in the American sense of the word, but in the British sense—meaning dessert. The bright orange zest, warm spices, and dried fruit in this rich, moist, dense steamed cake bring all of the holiday feels to the table. The hard sauce that accompanies it is basically brandy butter. When you dollop it on top, it slowly melts into the warm cake, infusing the pudding with the richness of the butter, the sweetness of the sugar, and the warmth from the brandy. </figcaption>
                    </figure>
                </div>  

            </section>
        </main>
    </div>
    <?php include_once("footer.php"); ?>
</body>
</html>