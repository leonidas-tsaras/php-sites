
<?php
    include('header.php');
    session_start();
    if(isset($_SESSION['admin']) && $_SESSION['admin']===session_id()) {
       
?>
       <main>
       <h1>Μηνύματα</h1>
<?php
       //connect to db
       include("files/connect.php");
        if($conn) {
            //$sql = "SELECT * FROM `message`";

            $sql = "SELECT `message`.`message_id`, `username`, `title`, `text`, `message`.`date`, `message`.`status`  FROM `user`, `message` 
            WHERE `user`.`user_id` = `message`.`user_id`";

            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();

            echo "<table class = 'users-table'>";
            echo "<tr><th>A/A</th><th>Username</th><th>title</th><th>text</th><th>date</th><th>status</th><th>delete</th><th>publish</th><th>draft</th><th>pending</th></tr>";
            $counter = 0;
            foreach($result as $message) {
                $counter++;
                $username = $message['username'];
                $title = $message['title'];
                $text = $message['text'];
                $date = $message['date'];
                $status = $message['status'];
                $message_id = $message['message_id'];
                echo "<tr id = '$message_id'><td>$counter</td><td>$username</td>
                <td onclick = 'updateTitle(this)'>$title</td>
                <td contentEditable = 'true'>$text</td><td>$date</td><td>$status</td>
                <td class = 'table-td' onclick = 'updateStatus(this, \"deleted\")'>
                delete
                </td>
                <td class = 'table-td' onclick = 'updateStatus(this, \"published\")'>
                publish
                </td>
                <td class = 'table-td' onclick = 'updateStatus(this, \"draft\")'>
                draft
                </td>
                <td class = 'table-td' onclick = 'updateStatus(this, \"pending\")'>
                pending
                </td>
                </tr>";
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
