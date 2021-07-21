<?php

    $id=$_POST['id'];
    require_once 'db_handler.php';
    $sql="delete from wpisy where wp_id=?";
    $prep=mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($prep,$sql)){
        
        
    }
    mysqli_stmt_bind_param($prep,"s",$id);
    if(!mysqli_stmt_execute($prep)){
        print 'error';
    }
    mysqli_stmt_close($prep); 
    header("location:../wpisy/index.php");
    exit();
