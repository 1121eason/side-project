<?php
    if(!isset($_SESSION["email"]) || ($_SESSION["email"]=="")){
        header("Location: index.html");
    }
?>