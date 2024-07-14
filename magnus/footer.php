<?php
$message = "";
$email = "";
$method  = $_SERVER['REQUEST_METHOD'];
if($method  === 'POST') {
    //read data 
    $email = $_POST['email'];

    //data validation
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "oops, not a valid e-mail";
    }

    if($message === "") {
        //connect to db
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbase = "magnus";

        try {
            $conn = new PDO("mysql:host = $servername; dbname = $dbase", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO `magnus`.`newsletter` (`email`) VALUES ('$email')";
            //$conn->exec($sql);
            $stmt = $conn->prepare($sql);
            $stmt->execute();
        }
        catch(PDOException $e) {
            if(str_contains($e->errorInfo[2], 'Duplicate entry')) {
                $message = "oops, this e-mail is registered";
            }
        }
        $conn = null;
    }
}
?>

<footer>
            <div>
                <img src="./images/logo.png" alt="">
                <p>Ακαδημίας 24, 106 71, Αθήνα <br>
                Διατηρούνται όλα τα δικαιώματα 2023</p>
            </div>
            <div>
                <h3>Χρήσιμα λινκ</h3>
                <a href="#">Πληροφορίες</a>
                <a href="#">Επικοινωνία</a>
                <a href="#">Όροι χρήσης</a>
                <a href="#">Ιδιωτικότητα</a>
                <a href="#">Όροι κράτησης</a>
            </div>
            <div>
                <h3>Newsletter</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam voluptate consequuntur sapiente.</p>
                
<?php 
    if($method === "POST") {
        if($message === "") {
            $message = "<p class = 'success'>Thanx for registering</p>";
            $email = "";
        } else {
            $message = "<p class = 'error'>$message</p>";
        }
    }
?>

<form action = "<?php echo htmlspecialchars($_SERVER['REQUEST_URI']);?>" id="newsletter" method ="POST">
<input type="email" value="<?php echo $email ?>" name = "email" placeholder="e-mail">
<input type="submit" value="Send">
</form>
<?php echo $message ?>
            </div>
</footer>