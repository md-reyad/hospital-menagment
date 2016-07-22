<?php
require '../class/admin_function.php';
$login=new admin_function();

if(isset($_POST['btn'])){
    $msg=$login->login_chick($_POST);
    
}
?>



    </body>
</html>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    
    
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">

    


    
        <script src="js/prefixfree.min.js"></script>

    
  </head>

  <body>

    <div class="box">
        <form action="" method="post">
    <div class="tag">SIGN IN</div>
    <div style="font-size: 20px;">
          <?php
if(isset($msg)){
    echo $msg;
    unset($msg);
}
?>
    </div>
    <div>
        <input type="text" id="inputName" name="email"  placeholder="email:">
    </div>
    <div>
        <input type="password" id="inputPassword" name="password"  placeholder="Password:">
    </div>
    <div>
        <button type="submit" name="btn" class="btn">SUBMIT</button>
    </div>
  </form>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    
    
    
    
  </body>
</html>
