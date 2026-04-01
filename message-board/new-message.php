<?php 
session_start();

include('header.php'); ?>
<main>
       <h1>Νέο Μήνυμα</h1>
<?php
       if(isset($_SESSION['visitor']) && $_SESSION['visitor']===session_id()) {
?>
       <form action="files/check_post.php" method="POST" onsubmit = "return validatePostForm(this)">
       <input type= "hidden" name = "userid" value = "<?php echo  $_SESSION['user_id']; ?>" >
       <table>
              <tr><td>Title</td> <td><input type="text" name = "title"></td></tr>
              <tr><td>Text:</td> <td><input type="text" name = "text"></td></tr>
              <tr>
                     <td> <input type ="reset" value = "Επαναφορά"></td>
                     <td><input type ="submit" value = "Εγγραφή"></td>
              </tr>
       </table>
       </form>
<?php
       } else {
              echo "<p class = 'error'>Πρέπει να είστε συνδεδεμένος</p>";
       } 
?>

<?php include('footer.php'); ?>