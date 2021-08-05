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
       $userview = new Usersview();
       $userview->showUsers();
    ?>

    <form action="includes/tempcreateusers.inc.php" method="post">
      <p>Enter User info:</p>
      <input type="name" name="name" placeholder="Enter Name"><br>
      <input type="name" name="lastname" placeholder="Enter Lastname"><br>
      <input type="number" name="date" placeholder="Enter Date Of Birth"><br>
      <button type="submit" name="submit">Enter!</button><br>
    </form>
    
</body>
</html>