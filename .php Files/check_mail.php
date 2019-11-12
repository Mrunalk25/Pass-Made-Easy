<?php

$subject="Registration successful";
$message="Hii You have registered successfully.Your passenger id is ";
$rec="mrunalkotkar25@gmail.com";

$ma=mail($rec,$subject,$message);
if($ma)
{
    die('mailsend');
}
 else {
   die('Mail not send');    
}

?>