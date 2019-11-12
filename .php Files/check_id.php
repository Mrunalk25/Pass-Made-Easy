<?php
require 'connect.php';


if(isset($_POST['generate']))

      {
    
    
    $pid=!empty($_POST['pid']) ? trim($_POST['pid']) :null;
   $email=!empty($_POST['email']) ? trim($_POST['email']) :null;
    
    $sqlquery="SELECT Id,username FROM register WHERE Id=:pid AND username=:email";
    $stmt=$pdo->prepare($sqlquery);
   
//    $stmt->bindValue(':pid',$pid);
    $stmt->execute(array(":pid"=>$pid,":email"=>$email));
    $register=$stmt->fetch(PDO::FETCH_ASSOC);
   
    if($register == false)
    {
        die('Incorrect Passenger Id Enter the id you received in email!');
    }
 else {
 die('Correct ID');       
 }

      }
      ?>
