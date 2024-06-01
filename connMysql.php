<?php
$db_host = "localhost";
$db_table = "excel";
$db_username = "root";
$db_password = "root";

// 連接資料庫
$conn = mysqli_connect($db_host, $db_username, $db_password);

// 檢查連接是否成功
if (!$conn) {
    die("資料庫連線失敗: " . mysqli_connect_error());
}

// 選擇資料庫
if (!mysqli_select_db($conn, $db_table)) {
    die("資料庫選擇失敗: " . mysqli_error($conn));
}

// 設置編碼
if (!mysqli_set_charset($conn, "utf8")) {
    die("設定字元集失敗: " . mysqli_error($conn));
}

echo "資料庫連線及設定成功";
?>

