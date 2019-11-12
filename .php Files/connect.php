<?php
$dsn = "mysql:host=localhost;dbname=passenger";
$username = "root";
$password = "";
try
{
$pdo= new PDO($dsn, $username, $password);
//echo "You have connected";
}
catch(PDOException $e)
{
$error_msg = $e->getMessage();
echo $error_msg;
exit();
}

?>