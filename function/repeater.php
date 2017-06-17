<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
    $password = $_GET["password"];
    if($password =="검색기능 테스트중"){

      header('Location:world-wondering.tk/function/correct.php');

    } else {

      header('Location:world-wondering.tk/function/wrong.php');

    }

   ?>
  </body>
</html>
