
<?php
    session_start();
    if(isset($_SESSION['visitor']) && $_SESSION['visitor']===session_id()) {
       include('header.php');
?>
       <main>
       <h1>users</h1>
<?php
       //connect to db
       include("files/connect.php");
        if($conn) {
            $sql = "SELECT * FROM `user`";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();

            echo "<table class = 'users-table'>";
            echo "<tr><th>A/A</th><th>avatar</th><th>Username</th><th>e-mail</th></tr>";
            $counter = 0;
            foreach($result as $user) {
                $counter++;
                $avatar = $user['avatar'];
                $avatar = "<img src = '$avatar'>";
                $username = $user['username'];
                $email = $user['email'];
                echo "<tr><td>$counter</td><td>$avatar</td><td>$username</td><td>$email</td></tr>";
            }
            echo "</table>";
        } else {
            header("Location: users.php?m=error");
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

