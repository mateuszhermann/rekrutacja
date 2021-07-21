<?php
    if(isset($_SESSION['uid'])){
        print 'hi';
        $uid=$_SESSION['uid'];
    }else{
        #header("location:../index.php");
    }