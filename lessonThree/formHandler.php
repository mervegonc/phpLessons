<?php
//var_dump($_SERVER["REQUEST_METHOD"]);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$firstname = htmlspecialchars($_POST['firstname']);
$lastname = htmlspecialchars($_POST['lastname']);
$favouritepet = htmlspecialchars($_POST['favouritepet']);

if(empty($firstname) || empty($lastname) || $favouritepet == "none") {
    header("Location: /phplessons/lessonThree/index.php");
    exit();
}

echo "These are the data that the user submitted:";
echo "<br>";
echo $firstname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $favouritepet;

header("Location: /phplessons/lessonThree/index.php");

}else   {
   header("Location: /phplessons/lessonThree/index.php");
}
?>