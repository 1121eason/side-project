<?php
    header("Content-type: text/html; charset=utf-8");
    session_start();

    //檢查是否登入過
    require_once("login_check.php")
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>會員管理系統</title>
    </head>

    <body>
        <table>
            <tr valign="top">
                <td>
                    <ol>
                        <p>會員中心</p>
                        <li>加入會員</li>
                        <li>修改資料</li>
                        <li>修改密碼</li>
                        <li>修改資料</li>
                        <li>刪除帳號</li>
                    </ol>
                </td>
                <td>
                    <?php 
                        require_once("memu.php");
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>    
            
                    
