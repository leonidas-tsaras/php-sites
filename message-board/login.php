<?php include('header.php') ?>


<main>
<h1>Σύνδεση</h1>
    <?php 
    if(isset($_GET['m'])) {
        $m = $_GET['m'];
        if($m == "error") {
            echo "<p class = 'error'>Λάθος δεδομένα προσπαθήστε πάλι</p>";
        }
        if($m == "success") {
            echo "<p class = 'success'>Έγινε η εγγραφή. Μπορείτε να συνδεθείτε</p>";
        }
    }
    ?>
    <form action="files/check_login.php" method="POST" onsubmit = "return validateLoginForm(this)">
        <table>
            <tr><td>username:</td> <td><input type="text" name = "username"></td></tr>
            <tr><td>password:</td><td><input type ="password" name = "password"></td></tr>
            <tr>
                <td> <input type ="reset" value = "Επαναφορά"></td>
                <td><input type ="submit" value = "Σύνδεση"></td>
            </tr>
        </table>
    </form>
</main>


<?php include('footer.php') ?>