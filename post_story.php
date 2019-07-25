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
    
    <link rel="stylesheet" href="lib/materialize.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="style/ico.css">
    <script src="include.js"></script>
        <link rel="stylesheet" href="lib/dist/jquery-confirm.min.css">

    <link rel="stylesheet" src="lib/emojionearea.min.css">

</head>
<body>
    <?php
    if (isset($_POST['ouT_'])) {
        $_SESSION['log'] = false;
        $_SESSION['who'] = [];
    }
    ?>


<?php

if ($_SESSION['log'] == true) {
    if ($_GET['q'] == 0) {
        ?>
        
        <script type='text/javascript'> $Spelling.SpellCheckAsYouType('myTextArea')</script>
                <script type='text/javascript'> var o2 = $Spelling.SpellCheckAsYouType('myTextArea2');


                
                
                
                
                </script>
        <nav>
            <div class="nav-wrapper color_N">
                      <a href="#" class="brand-logo center">Write Story</a>

                <ul class="right">
                    
        <form action="" method="post">
            
                <li>
                    <a href="./">Home</a> 
                </li>
                <li>
                    <a><button class="btn color_N waves-effect" name="ouT_" type="submit">Log out</button></a> 
                </li>
                </form>
                    
                </ul>
            </div>
        </nav class=color_N>
        <div class="r_shower">

        <div><i class="material-icons close_ico"style=" z-index: 100;font-size: 44px;" onclick="$(this).parent().parent().slideUp()">close</i></div>
      
        <div class="r_shower">
           <table>
        <thead>
          <tr>
              <th>Flag</th>
              <th>Name</th>
          </tr>
        </thead>

        <tbody class="r_shower_ctxt">
        </tbody>
      </table>
        
        </div>
        </div>
        
         <div class="r_shower2">

        <div><i class="material-icons close_ico"style=" z-index: 100;font-size: 44px;" onclick="$(this).parent().parent().slideUp()">close</i></div>
      
        <div class="r_shower2">
           <table>
        <thead>
          <tr>
              <th>Name</th>
          </tr>
        </thead>

        <tbody class="r_shower_ctxt2">
        </tbody>
      </table>
        
        </div>
    </div>
    <div class="container mg2 h">
	<textarea name="myTextArea" style="border : 2px solid #eeeeee;padding: 7px;height:45px;" onkeypress="console.log('log');" id="myTextArea2"></textarea>

	<textarea name="myTextArea"  style="border : 2px solid #eeeeee;padding: 7px;" id="myTextArea" cols="50" rows="20"></textarea>
</div>
            <div class="container mg2 ">
    
              
                   <div class='col right share_btn_col'>
                            <button class="btn waves-effect color_N share_btn" >
                               
                            <i class="material-icons">share</i> </button>
                        
        </div>
            </div>
    

        <div class='s_sniffer row'>
            
        <button class="btn waves-effect color_N waves-light" onclick="Show_flags()">see Flags</button>
        
        <button class="btn waves-effect color_N waves-light " onclick="Show_famous()">see People</button>
        </div>
        <script src="lib/jquery.min.js"></script>
        <script src="lib/dist/jquery-confirm.min.js"></script>
        <script src="json/cantry.js"></script>
        <script src="checking.js"></script>
        <script src="main2.js"></script>
        <script src="lib/materialize.min.js"></script>
        <?php

    } 
    
    
     // edit post
    else {

        ?>
        
        <nav>
            <div class="nav-wrapper color_N">
                      <a href="#" class="brand-logo center">Story</a>

                <ul class="right">
                    
        <form action="" method="post">
            
                <li>
                    <a href="./">Home</a> 
                </li>
                <li>
                    <a><button class="btn waves-effect color_N" name="ouT_" type="submit">Log out</button></a> 
                </li>
                </form>
                    
                </ul>
            </div>
        </nav>
    <div class="container mg2 h">
	<textarea name="myTextArea"  id="myTextArea2" cols="50" rows="20"></textarea>

	<textarea name="myTextArea"  id="myTextArea" cols="50" rows="20"></textarea>
</div>
            <div class="container mg2 ">
    
              
                   <div class='col right share_btn_col'>
                            <button class="btn waves-effect color_N edit_btn" >
                               
                            <i class="material-icons">edit</i> </button>
                        
        </div>
        <div class='s_sniffer row'>
            
        <button class="btn waves-effect color_N waves-light" onclick="Show_flags()">see Flags</button>
        
        <button class="btn waves-effect color_N waves-light " onclick="Show_famous()">see People</button>
        </div>
        <div class="r_shower">

        <div><i class="material-icons close_ico"style=" z-index: 100;font-size: 44px;" onclick="$(this).parent().parent().slideUp()">close</i></div>
      
        <div class="r_shower">
           <table>
        <thead>
          <tr>
              <th>Flag</th>
              <th>Name</th>
          </tr>
        </thead>

        <tbody class="r_shower_ctxt">
        </tbody>
      </table>
        
        </div>
        </div>
        
         <div class="r_shower2">

        <div><i class="material-icons close_ico"style=" z-index: 100;font-size: 44px;" onclick="$(this).parent().parent().slideUp()">close</i></div>
      
        <div class="r_shower2">
           <table>
        <thead>
          <tr>
              <th>Name</th>
          </tr>
        </thead>

        <tbody class="r_shower_ctxt2">
        </tbody>
      </table>
        
        </div>
    </div>
            </div>
    
        <script src="lib/jquery.min.js"></script>
                <script src="json/cantry.js"></script>
        <script src="checking.js"></script>
        <script src="lib/emojionearea.min.js"></script>
        <script src="main3.js"></script>
        <script>
        
        
        </script>
        <script src="lib/materialize.min.js"></script>
        
        <?php
        $id_post = $_GET['q'];
        echo "<script>window.post_id_focus = ${id_post} </script>";
    }
} else {
    echo "<script>window.location.assign('./')</script>";
}
?>

<script src=jquery.nicescroll.min.js></script>

<script>
function resizescroll() {
    $("#myTextArea___livespell_proxy").niceScroll().resize();
    setTimeout(() => {
        resizescroll()
    }, 300);
}
resizescroll()
</script>
</body>
</html>