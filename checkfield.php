<!DOCTYPE>
<html>
<body>
<?php
$username = $_POST['username'];
$password = $_POST['password'];
$cfpassword = $_POST['cfpassword'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$tel_no = $_POST['tel_no'];
$isValid = true;

require('connect.php');

if ($_SERVER['REQUEST_METHOD']=='POST' & isset($username,$password,$cfpassword,$fname,$lname,$tel_no)) {

    foreach (str_split($username) as $char) {
        if ($char == ";" || $char == "-" || $char == "\'" || $char == "\"") {
            $isValid = false;
            break;
        }
    }
    foreach (str_split($password) as $char) {
        if ($char == ";" || $char == "-" || $char == "\'" || $char == "\"") {
            $isValid = false;
            break;
        }
    }
    if ($password != $cfpassword) {
        $isValid = false;
    }

    if (!$username || !$password || !$cfpassword || !$fname || !$lname || !$tel_no) {
        $isValid = false;
    }

    if ($isValid) {
        $q = "INSERT INTO user (username,password,fname,lname,tel_no) VALUES ('$username', PASSWORD('$password'), '$fname','$lname','$tel_no')";

        if (!$mysqli->query($q)) {
            echo "Insert failed.".$mysqli.error;
        }
        session_start();
        $_SESSION['username'] = $username;
        $mysqli->close();
        header('Location:user_page.php');

    }
}
?>
</body>
</html>