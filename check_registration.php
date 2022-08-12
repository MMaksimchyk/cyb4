<?php
session_start();
$user = $_REQUEST["txtUser"];
$pwd = $_REQUEST["txtPwd"];
$pwd_double = $_REQUEST["txtPwd_double"];
$email = $_REQUEST["Email"];
$hash = hash("sha256", $pwd);
if ($pwd = $pwd_double){
    //Устраняем проблему секрета в коде
    $server = getenv("cyb4_db_server");
    $login = getenv("cyb4_db_user");
    $pwd = trim (getenv("cyb4_db_pwd"));
    $conn = mysqli_connect ($server,$login,$pwd,"cyb4");
    echo "<h3>The user is registered. You will be redirected to the login page.</h3>";
    echo "<h3> Your username: $user</h3>";
    echo "<h3> Your email: $email</h3>";
    echo '<meta http-equiv= "refresh" content= "3; url=check_login.php"/>';
    //проблема слабого пароля и превышенного логина делегируется администратору производственного сервера
    //Устраняем проблему SQL injection
    //Устраняем проблему секрета в коде
    $sql = "INSERT INTO users (Login,PwdHash,Email) Values (?,?,?)";
    $stat = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stat, "sss", $user, $hash, $email);
    mysqli_stmt_execute($stat);
    mysqli_close($conn);
}
else {
    echo "<h3>Passwords do not  match, please check again.</h3>";
    echo '<meta http-equiv= "refresh" content= "2; url=registration.php"/>';
}