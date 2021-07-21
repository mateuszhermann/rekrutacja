<?php
function empty_input($uid,$pass){
    $result=false;
    if(empty($uid)|| empty($pass)){
        $result=true;
    }
    return $result;
}

 function valid_login_data($conn,$uid,$passwd){
    $sql="select * from wpisy_users where uId=? and passwd=?";
    $prep=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($prep,$sql)){
        header("location: ../index.php?error=invaildSQL");
        exit();
    }
    mysqli_stmt_bind_param($prep,"ss",$uid,$passwd);
    mysqli_stmt_execute($prep);

    $resultData=mysqli_stmt_get_result($prep);
    if($row=mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        $result=false;
        return $result;
    }
    mysqli_stmt_close($prep);
}