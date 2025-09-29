<?php

if($_POST){
    $name=$_POST ['username'];
    $email=$_POST['email'];
    echo "hello $name! your email is $email";
}

?>