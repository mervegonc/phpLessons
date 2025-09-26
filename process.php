<?php
if ($_POST) {
    $name = $_POST['username'];
    $email = $_POST['email'];
    echo "Hello $name! Your email is $email";
}
?>