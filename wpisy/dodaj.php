<?php include "../includes/header.php";

?>
    <div class="container">
        <h2>Dodaj wpis!</h2>
        <form action="../includes/add.php" method="post">
            <textarea name="Wpis" id="" cols="70" rows="10" style="resize: none;"></textarea><br>
            <input type="hidden" name="uid" value='<?php print "$_SESSION[uid]"?>'>
            <br>  
            <?php
                if(isset($_SESSION['uid'])){
                    print '<button type="submit" name="submit">Dodaj</button>';
                }
            ?>
        </form>
        <?php
             
        ?>
    </div>
<?php include '../includes/footer.php';