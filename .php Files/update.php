<?php


        
   
      if(isset($_POST['update']))
      {
          try {
              
          {
              $pdoConnect=new PDO("mysql:host=localhost;dbname=passenger","root","");
          }
          }
          catch (PDOException $exc) 
          {
              echo $exc->getMessage();
             exit();
          }
    
      $email1=$_POST['email1'];
      $ph=$_POST['phone1'];
      $age=$_POST['age'];
      $des=$_POST['desig'];
     
     
$pdoQuery="UPDATE `register` SET `username`=:email1,`pno`=:ph,`age`=:age,`designation`=:des where username=:email1";
$pdoResult=$pdoConnect->prepare($pdoQuery);
$pdoExec=$pdoResult->execute(array(":email1"=>$email1,":ph"=>$ph,":age"=>$age,":des"=>$des));
     


      if($pdoExec)
      {
          $ppid=$pdoConnect->lastInsertId();
//          echo 'Last inserted id is'.$ppid;
          echo '<script type="text/javascript">alert("Data Updated successfully");</script>';
           echo"<script>location.href='showdetails.php'</script>";
                //header('Location:showdetails.php');
          
         
           
           
//          ini_set("SMTP","localhost");
//   ini_set("smtp_port","25");
//  ini_set("sendmail_from","localhost@gmail.com");
//   ini_set("sendmail_path", "C:\xampp\sendmail\sendmail.exe -t");
//   

      }          
            else {
                echo 'Daat not inserted';
 
      }
      
      }
      
      ?>
 
 
