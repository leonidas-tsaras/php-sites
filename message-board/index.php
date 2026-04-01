<?php include('header.php') ?>

<main>

<h1>Αρχική</h1>
<?php 
    if(isset($_GET['m'])) {
        $m = $_GET['m'];
        if($m == "success") {
            echo "<p class = 'success'>Καλωσορίσατε στον ιστότοπό μας</p>";
        }
    }
    ?>
</main>

<?php include('footer.php') ?>