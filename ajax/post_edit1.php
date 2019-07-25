<?php 


session_start();


include 'config.php';
    if ($_SESSION['log'] == true) {



        $p = $_POST['id'];


    $q = "SELECT * FROM `posts` WHERE `id_post`=${p}";

        $r = mysqli_fetch_array(mysqli_query($c, $q));

        if ($r) {

            if ($r[0] == $_SESSION['who'][1]) {
                $title = $r['story_title'];
                $body  = $r['story_txt'];
                $json_body = json_encode([$title, $body]);
                //echo "[\"${title}\",\"${body}\"]";
                echo $json_body;

            } else {
                echo "no";
            }

        }

    }