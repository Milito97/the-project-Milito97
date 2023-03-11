<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    require 'login.view.php';
} else if ($_SERVER['REQUEST_METHOD'] === "POST") {

    if (isset($_POST["username"]) && isset($_POST["password"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username === "admin" && $password === "admin") {

            $_SESSION['logged_in'] = true;
            header("Location: login.php");
            exit();
        } else if ($password != "admin") {

            require 'login.view.php';
        }
    }
}