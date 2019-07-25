<?php
session_start();


include 'config.php';
if ($_SESSION['log'] == true) {
    $id = $_POST['id'];
    if ($_POST['name'] ==true) {
        $q = "SELECT `name` FROM `users` WHERE `id`=${id}";
        $r = mysqli_fetch_array(mysqli_query($c, $q))[0];
        echo $r;
    }
}