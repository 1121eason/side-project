<?php
header("Content-Type: text/html; charset=utf-8");
require_once("connMysql.php");
session_start();

//是否登入過，若有登入則導向⋯⋯
if (isset($_SESSION["email"]) && $_SESSION["email"] != "") {
    //會員中心
    header("Location: member_center.php");
}

    // 執行登入
    if (isset($_POST["email"]) && isset($_POST["password"])) {
    
        // 查詢登入會員資料
        $sql = "SELECT * FROM 'member' WHERE 'email' = '" . mysqli_real_escape_string($conn, $_POST["email"]) . "'";
        $RecLogin = mysqli_query($conn, $sql);

        // 取出帳號密碼
        $row_RecLogin=mysqli_fetch_assoc($RecLogin);
        $email = $row_RecLogin["email"];
        $password = $row_RecLogin["password"];

        //比對密碼，登入成功及登入狀態
        if($_POST['password']==$password)
        {
            $_SESSION["email"]=$email;
            header("Location: member_center.php");
            exit();
        }
    }
?>

