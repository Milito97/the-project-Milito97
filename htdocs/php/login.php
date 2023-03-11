<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    require './views/login.view.php';
} else if ($_SERVER['REQUEST_METHOD'] === "POST") {

    if (isset($_POST["username"]) && isset($_POST["password"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username === "admin" && $password === "admin") {

            $_SESSION['logged_in'] = true;
            header("Location: index.php");
            exit();
        }
    }
}
