<?php

    session_start();
    if(!isset($_POST['submit'])){
        header("location: ../index.php");
        exit();
    }else{
        $login=$_POST['login'];
        $passwd=$_POST['passwd'];


        require_once 'db_handler.php';
        require_once 'inc_func.php';

        

        if(empty_input($login,$passwd)!=false){
            header('location:../index.php?error=emptyImput');
            exit();
        }
        if(valid_login_data($connection,$login,$passwd)==false){
            header("location: ../index.php?error=wrongData");
        }else{
            $row=valid_login_data($connection,$login,$passwd);
            $_SESSION['uid']=$row['uId'];
            header("location:../wpisy/index.php");
            exit();
        }

    }