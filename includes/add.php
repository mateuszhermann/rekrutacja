<?php
    $uid=$_POST['uid'];
    $wpis=$_POST['Wpis'];

    require_once 'db_handler.php';
    $sql="insert into wpisy(uid,tresc) values(?,?)";
    $prep=mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($prep,$sql)){
        
        
    }
    mysqli_stmt_bind_param($prep,"ss",$uid,$wpis);
    if(!mysqli_stmt_execute($prep)){
        print 'error';
    }
    mysqli_stmt_close($prep); 
    header("location:../wpisy/index.php");
    exit();
