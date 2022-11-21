<?php require("../controller/login.class.php") ?>
<?php
   if(isset($_POST['submit'])){
      $user = new LoginUser($_POST['username'], $_POST['password']);
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Login Form</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
      <h2>Log in form</h2>
      
      <label>Username</label>
      <input type="text" name="username"></br>
 
      <label>Password</label>
      <input type="password" name="password"></br>
 
      <button type="submit" name="submit">Log in</button>
 
      <p class="error"><?php echo @$user->error ?></p>
      <p class="success"><?php echo @$user->success ?></p>
   </form>
</body>
</html>