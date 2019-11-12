<?php

session_start();



$dsn = "mysql:host=localhost;dbname=passenger";
$username = "root";
$password = "";

          try {
              
          {
              $pdo=new PDO("mysql:host=localhost;dbname=passenger","root","");
          }
          }
          catch (PDOException $exc) 
          {
              echo $exc->getMessage();
             exit();
          }
    
    
    if(isset($_POST['login']))

      {
    
    
    $design="A";
//    $password=!empty($_POST['password']) ? trim($_POST['password']):null;
    
    $sqlquery="SELECT offer_applicable FROM register WHERE offer_applicable=:design";
    $stmt=$pdo->prepare($sqlquery);
    
    $stmt->bindValue(':design',$design);
    $stmt->execute();
    $register=$stmt->fetch(PDO::FETCH_ASSOC);
    if($register == false)
    {
        die('Incorrect username combination!');
    }
      }
    ?>