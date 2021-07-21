<?php 
include '../includes/header.php';
 ?>
<?php
    require_once '../includes/db_handler.php';
    $sql="select * from wpisy";
    $result=mysqli_query($connection,$sql);
    $lenght=mysqli_num_rows($result);

?>

<div class="container">
    <h2>Wpisy:</h2>
    <?php
        for ($i=0; $i < $lenght; $i++) { 
            $row=mysqli_fetch_assoc($result);
            print "<div class='wpis'>
            <div class='user'>
                $row[uid]
            </div>
            <div class='tresc'>
                $row[tresc]
            </div>";
            if(isset($_SESSION['uid'])){
                print "<form action='../includes/delete.php' method='post'>
                    <button type='submit' name='id' value='$row[wp_id]'>Usuń</button>
                </form>";
            }
            print"</div>";
            
        }
    ?> 
</div>

<?php include '../includes/footer.php';