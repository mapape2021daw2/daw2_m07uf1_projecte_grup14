<?php
    session_start();
    $_SESSION["seccio"] = $_POST["seccio"];

    header('Location: index_client.php');
?>