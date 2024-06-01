<?php
    header("Content-type: text/html; charset=utf-8");
    require_once("connMsql.php")

    //檢查是否已註冊
    $sql = "SELECT 'email' From 'member' WHERE 'email'='".$_POST["email"]."'";
    $record = mysqli_query($conn, $sql);

    if (mysql_num_row($record)>0){
        header("Location: member_join_form.php?errCode=1 & email=".$_POST["email"]);
    }else{
        //若未註冊，則⋯⋯
        $sql = "INSERT INTO 'member' ('email', 'password') VALUES ("; 
        $sql .="'".$_POST["email"]."',";
        $sql .="'".$_POST["password"]."',";
        mysqli_query($conn, $sql);
    }
?>