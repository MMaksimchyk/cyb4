<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clicls</title>
</head>
<body>
<a href="index1.html">Home page<a/>
    <h1>Count clicks</h1>
    <form>
        <button>Click</button>
    </form>
    <?php
        
        // if (isset($_SESSION["clicks"])) 
        //     $i = $_SESSION["clicks"];
        // else
        //     $i = 0;    

        // $i++;
        // echo "<h2>Number of clicks: $i </h2>";
        // $_SESSION["clicks"] = $i;

        if (isset($_COOKIE["clicks"])) 
            $i = $_COOKIE["clicks"];
        else
            $i = 0;    

        $i++;
        echo "<h2>Number of clicks: $i </h2>";
        setcookie("clicks",$i);
    ?>
</body>
</html>