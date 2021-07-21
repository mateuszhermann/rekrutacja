<?php session_start()?>
<!DOCTYPE html>
<html lang="Pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/login/style/style.css">
    <title>Fajna strona z wpisami</title>
</head>
<body>
    <div class="navbar">
        <div class="siteName">Fajna strona z wpisami</div>
        <div class="links">
            <ul>
            <?php 
                if(isset($_SESSION['uid'])){
                    print "<li><a href='/login/wpisy/index.php'>$_SESSION[uid]</a></li>";
                    print"<li><a href='/login/wpisy/dodaj.php'>Dodaj</a></li>";
                    print"<li><a href='/login/includes/inc_logout.php'>Wyloguj</a></li>";
                }else{
                    print"<li><a href='/login/index.php'>Zaloguj</a></li>";
                }
                
            
            ?>
            </ul>
        </div>
        
    </div>
