
<?php
    session_start();
    if(isset($_SESSION['visitor']) && $_SESSION['visitor']===session_id()) {
       include('header.php');
?>
       <main>
       <h1>Μηνύματα</h1>
<?php
       //connect to db
       include("files/connect.php");
        if($conn) {
            //$sql = "SELECT * FROM `message`";

            $sql = "SELECT `username`, `title`, `text`, `message`.`date` FROM `user`, `message` 
            WHERE `user`.`user_id` = `message`.`user_id`";

            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();

            echo "<table class = 'users-table'>";
            echo "<tr><th>A/A</th><th>Username</th><th>title</th><th>text</th><th>date</th></tr>";
            $counter = 0;
            foreach($result as $message) {
                $counter++;
                $username = $message['username'];
                $title = $message['title'];
                $text = $message['text'];
                $date = $message['date'];
                echo "<tr><td>$counter</td><td>$username</td><td>$title</td><td>$text</td><td>$date</td></tr>";
            }
            echo "</table>";
        } else {
            header("Location: messages.php?m=error");
            exit();
        }
?>

        </main>
        <?php include('footer.php');

    } else {
        include('header.php');
    ?>
        <main>
        <h1>sorry not in session</h1>
        </main>
<?php
        include('footer.php');
    }
?>
