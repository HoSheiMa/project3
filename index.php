<?php
session_start();

include 'config.php';
if (!$c) die("Error Log in");
if (!isset($_SESSION['log'])) {
    $_SESSION['log'] = false;
    $_SESSION['who'] = [];
}
?>
<?php
if (isset($_POST['ouT_'])) {
    $_SESSION['log'] = false;
    $_SESSION['who'] = [];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Story</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="lib/dist/jquery-confirm.min.css">
    <link rel="stylesheet" href="lib/materialize.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="./style/ico.css">
</head>
<body>
    <?php
    if ($_SESSION['log'] == true) {
        ?>
        <script>window.id___ = <?php echo $_SESSION['who'][1];
                                /** / for get some id*/ ?> </script>
        <nav>
            <div class="nav-wrapper color_N">
                      <a href="#" class="brand-logo center">Read More!</a>

                <ul class="right">
                    
        <form action="" method="post">
            
                <li>
                    <a href="profile.php?id=<?php echo $_SESSION['who'][1]; ?>"><i class="material-icons">
                person_pin
                </i></a> 
                </li>
                <li>
                    <a><button class="btn  waves-effect" style="    background: white;
    color: #ffab40;"name="ouT_" type="submit">Log out</button></a> z
                </li>
                </form>
                    
                </ul>
            </div>
        </nav>
        
            <div class="fly-o">
                        <button onclick="window.location.assign('post_story.php?q=0')" class="btn-floating color_N btn-large waves-effect waves-light color_N"><i class="material-icons">add</i></button>
                    </div>

            <div class="container post_contant">
                
            </div>
        
<?php

} else {
    ?>
        
        <div class="row bs">
            <div class="col col_login s12 m12 l6 x6">

                <div class="container">
                    <h3  class="a-font"><span class="color_N">top</span> read</h3>
                </div>
                
                    <form class="mg" action='' method='POST'>
                    <div class="container">

                    <input style = "border: 1px solid #fff;
    padding-left: 8px;
    border-radius: 18px;
    box-shadow: 0 0 2px 0px;"class=" black-text" type="text" name="username"> <div style="background: url(bg/user.png);
    background-size: cover;
    width: 25px;
    height: 25px;
    background-color: transparent;
    position: absolute;
    margin-left: -35px;
    margin-top: 11px;
    display: inline-block;"></div><br>
                    <input style = "border: 1px solid #fff;
    padding-left: 8px;
    border-radius: 18px;
    box-shadow: 0 0 2px 0px;" class="bdr black-text " type="password" name="password"><div style="background: url(bg/pass.png);
    background-size: cover;
    width: 25px;
    height: 25px;
    background-color: transparent;
    position: absolute;
    margin-left: -35px;
    margin-top: 11px;
    display: inline-block;"></div><br><br>
                    <button type="submit" name="log_in" class="btn color_N waves-effect">Log In</button>
                    <button type="submit" onclick="return false" class="btn-flat waves-effect Sing_Up">Sing Up</button>
                    <?php

                    if (isset($_POST['log_in'])) {
                        $user = $_POST['username'];
                        $pass = $_POST['password'];

                        if ($user && $pass) {
                            if (!($user == "" && $pass == "")) {
                                $q = "SELECT * FROM `users` WHERE `username`='${user}' AND `password`='${pass}'";
                                $r = mysqli_query($c, $q);
                                $r = mysqli_fetch_array($r);
                                if ($r == null) {
                                    echo "<br><br><span class='red-text'>Uncorrect UserName Or Password!</span>
                                        <script>window.onload = () =>M.toast({html: 'Uncorrect UserName Or Password!!'})</script>";
                                } else {
                                    $name = $r['name'];
                                    $id = $r['id'];
                                    $_SESSION['log'] = true;
                                    $_SESSION['who'] = [$name, $id];
                                    echo "<script>window.location.reload()</script>";


                                }


                            }
                        }
                    }
                    ?>
                    </div>
                </form>
            </div>
            <div class="col s12 m12 l6 x6">
                <img class="responsive-img" style="    margin-top: 10%;" src="html/html1.svg" width="900">
            </div>
        </div>
        <?php

    }
    ?>

    <script src="lib/jquery.min.js"></script>
    <?php
    if ($_SESSION['log'] == true) echo '<div id=cotxt>
    <div><i class="material-icons contxt_close" onclick="$(this).parent().parent().fadeOut()">close</i></div>
    <div class="contxt_head"></div>
    <div class="contxt_body"></div>
    </div>
    <script src="script_posts.js"></script>'
    ?>
    <script src="lib/dist/jquery-confirm.min.js"></script>
        <script src="main.js"></script>

    <script src="lib/materialize.min.js"></script>
</body>
</html>