<!DOCTYPE html>

<html>

<head>
    <title>processing users</title>
</head>

<body>

<script src="script.js"></script>

    <?php

    session_start();

    $email = $_POST["e"];
    $password = $_POST["p"];

    $dbms = new mysqli("localhost", "root", "Madushi927@", "q15", "3306");
    $q = "SELECT * FROM user WHERE `email`='" . $email . "' AND `password`='" . $password . "'";
    $resultset = $dbms->query($q);
    $n = $resultset->num_rows;

    if ($n == 1) {
        $r = $resultset->fetch_assoc();
        $_SESSION["u"] = $r;

        if (isset($_POST["r"])){
            $t = time();
            setcookie("id",$r["id"],$t+(60*60*24*10));
            
        }

    ?>
        <script>
            goToHome();
        </script>
    <?php
    } else {
    ?>
        <script>
            goToError();
        </script>
    <?php
    }

    if (isset($_POST["r"])) {
        echo "yes";
    } else {
        echo "no";
    }

    ?>

    

</body>

</html>