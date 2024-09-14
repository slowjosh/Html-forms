<?php
$fullname = $_POST["fullname"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$password = $_POST["password"];
$date = $_POST["date"];
$year_level = $_POST["year-level"];

echo "checkbox". json_encode($_POST["checkbox"]) ."<br>";
//echo to browser 
echo "first name: ".$fullname ."<br>";
echo "last name: ".$last_name ."<br>";
echo "email: ".$email ."<br>";
echo "password: ".$password ."<br>";
echo "date: ".$date ."<br>";
echo "year-level: ".$year_level ."<br>";
?>