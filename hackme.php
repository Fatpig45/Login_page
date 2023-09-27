<?php
session_start();
$authorized = $_SESSION['authorized'];

if ($authorized == 1)
{

echo "You are currently logged in";

}
else
{

echo "You are not logged in. Please go <a href='index.php'> HERE </a> to log in";

}
