<?php 
  include 'includes/class-autoload.inc.php';
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBs</title>
</head>
<body>
    <?php 

    $userctrl = new Usersctrl();
    $userctrl->createUser("soso", "gobeglejiashvili", "1999");
    $userctrl->createUser("terenti", "wyneteli", "1980");
    $userctrl->createUser("jon", "doe", "1990");

    $userview = new Usersview();
    $userview->showUser("soso");
    
    ?>
    
</body>
</html>