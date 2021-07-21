<?php 
include 'includes/header.php';
?>
    
            <div class="container">
                <div class="loginbox">
                    <h2>Zaloguj się!</h2>
                    <form action="includes/inc-login.php" method="post">    
                    <input type="text" name="login" placeholder="Login"> <br>
                    <input type="password" name="passwd" placeholder="Hasło"> <br>
                    <button type="submit" name='submit'>Zaloguj się</button>
                    </form>
                    <?php
                    if(isset($_GET['error'])){
                        if($_GET['error']=="emptyImput"){
                            print "<span class='error'> Proszę wypełnić pola</span>";
                        }
                        if($_GET['error']=="wrongData"){
                            print "<span class='error'> Niewłaściwe dane logowania</span>";
                        }
                        if($_GET['error']=="invaildSQL"){
                            print "<span class='error'> Nieznany błąd</span>";
                        }
                    }
                ?>
                </div>
            </div>
<?php include '/login/includes/footer.php';