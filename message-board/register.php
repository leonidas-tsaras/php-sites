<?php include('header.php') ?>

<main>
    <?php 
    if(isset($_GET['m'])) {
        $m = $_GET['m'];
        if($m == "error") {
            echo "<p class = 'error'>Λάθος δεδομένα προσπαθήστε πάλι</p>";
        }
    }
    ?>
    <h1>Εγγραφή</h1>
    <form action="files/check_register.php" method="POST" onsubmit = "return validateRegisterForm(this)">
        <table>
            <tr><td>username:</td> <td><input type="text" name = "username"></td></tr>
            <tr><td>email:</td> <td><input type="email" name = "email"></td></tr>
            <tr><td>avatar:</td> <td><input type="text" name = "avatar"></td></tr>
            <tr><td>password:</td><td><input type ="password" name = "password"></td></tr>
            <tr>
                <td> <input type ="reset" value = "Επαναφορά"></td>
                <td><input type ="submit" value = "Εγγραφή"></td>
            </tr>
        </table>
    </form>
</main>


<?php include('footer.php') ?>