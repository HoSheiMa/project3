<?php


session_start();


include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
    <link rel="stylesheet" href="lib/dist/jquery-confirm.min.css">
    <link rel="stylesheet" href="lib/materialize.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="./style/ico.css">
</head>
<body>

<?php
if ($_SESSION['log'] != true) echo "<script>window.location.assign('./')</script>";
if (isset($_POST['ouT_'])) {
    $_SESSION['log'] = false;
    $_SESSION['who'] = [];
    echo "<script>window.location.assign('./')</script>";
}
?>
<nav>
            <div class="nav-wrapper color_N">
                      <a href="#" class="brand-logo center"><?php echo $_SESSION['who'][0]; ?></a>

                <ul class="right">
                    
        <form action="" method="post">
             <li>
                    <a href="./">Home</a> 
                </li>
                <li>
                    <a><button class="btn  waves-effect" style="    background: white;
    color: #ffab40;"name="ouT_" type="submit">Log out</button></a> 
                </li>
                </form>
                    
                </ul>
            </div>
        </nav>

        <div class='row center' style="font-family: cursive;"><h3>profile storys</h3></div>
<div class="container post_contant">
                
            </div>
        <script>window.id___ = parseInt((window.location.href).split('=')[1]);
</script>

<script src="lib/jquery.min.js"></script>


<script src='lib/dist/jquery-confirm.min.js'></script>
<script src="lib/materialize.min.js"></script>
<script src="script_posts2.js"></script>
 <?php
    if ($_SESSION['log'] == true) echo '<div id=cotxt>
    <div><i class="material-icons contxt_close" onclick="$(this).parent().parent().fadeOut()">close</i></div>
    <div class="contxt_head"></div>
    <div class="contxt_body"></div>
    </div>
    <script src="script_posts.js"></script>'
    ?>
    
</body>
</html>