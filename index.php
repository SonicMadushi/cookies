<!DOCTYPE html>

<html>

<head>
    <title>q15</title>
</head>



<?php

    $email = "";
    $password = "";

   if(isset($_COOKIE["id"])){
       $id = $_COOKIE["id"];

       $dbms = new mysqli("localhost", "root", "Madushi927@", "q15", "3306");
       $q = "SELECT * FROM user WHERE `id`='".$id."' ";
       $resultset = $dbms->query($q);
       $r = $resultset->fetch_assoc();

       $email = $r["email"];
       $password = $r["password"];
   }
    ?>


    <form action="process.php" method="POST">

    
        <h1>Sign In</h1>

        <span>Email</span>
        <input type="email" name="e" value="<?php echo $email; ?>" />

        <br /><br />

        <span>Password</span>
        <input type="password" name="p" value="<?php echo $password; ?>"/>

        <br /><br />

        <input type="checkbox" value="1" name="r" /><span>Remember Me</span>
      <br /><br />

        <button type="submit">Sign In</button>
    </form>

</body>

</html>