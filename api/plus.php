<?php

$x = $_REQUEST["x"];
$y = $_REQUEST["y"];
$z = $x + $y;
sleep(1); //симуляция задерки

// 1. Слабый пароль
// 2. Нарушен принцип наименьших привилегий
// 3. Секрет (зашитый) в коде
$conn = mysqli_connect("localhost:3306","root","","cyb4");

//4. Уязвимость для SQL Injection
$sql = "INSERT INTO calcs(Num1,Num2,User) VALUES($x,$y,'Anonym')";
mysqli_query($conn, $sql);
mysqli_close($conn);

echo $z;