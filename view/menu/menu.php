<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
    {
      unset($_SESSION['email']);
      unset($_SESSION['senha']);
    //   header('location:index.php');
      }
    
    $email = $_SESSION['email'];
    echo $email;

    ?>
</body>
</html>