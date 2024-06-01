<?php
    $conn = mysqli_connect('localhost', 'root', 'root', 'excel');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "insert into idea(name, email, subject, message) values('$name', '$email', '$subject', '$message')";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('Location: index.html');
    }
?>

