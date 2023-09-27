<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "Bruh" && $password == "bruh")
{
$_SESSION['authorized'] = 1;
echo "You typed the correct credentials!<br> <br>";
echo "Go to <a href='hackme.php'> This page </a> next <br> <Br>";
echo "or go to <a href='index.php'> The login page </a> to try again<br>";
echo "or go to <a href='logout.php'> the logout page </a> to log out<br>";
}
else
{
$_SESSION['authorized'] = 0;
echo "Bad Credentials! Hacking Attempt Detected!<br> <br>";
echo "go to <a href='hackme.php'> This page </a> next to see your status <br>";
echo "or go to <a href='index.php'> The Login Page </a> to try again<br>";

}
?>
