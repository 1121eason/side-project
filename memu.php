<?php
    require_once("connMysql.php");
    session_start();

    //查會員資料
    $query_RecMember = "SELECT * FROM 'member' WHERE 
    'email' = '".$_SESSION["email"]."'";
    $RecMember = mysqli_query($query_RecMember);
    $row_RecMember=mysqli_fetch_assoc($RecMember);

?>

<div asign ="center">
    <p>會員名稱
        <strong><?php echo $row_RecMember["name"]; ?></strong>
    </p>

    <p asign ="center">
        <a herf = "member_center.php">會員中心</a><br>
        <a herf = "member_update_form.php">修改會員資料</a><br>
        <a herf = "member_change_password_form.php">修改會員密碼</a><br>
        <a herf = "member_delete.php">刪除會員帳號</a><br>
        <a herf = "logout.php">登出</a><br> 
    </p>
</div>

