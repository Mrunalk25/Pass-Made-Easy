<?php


        
   
      if(isset($_POST['insert']))
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
      $fname=$_POST['fn'];
      $mname=$_POST['mn'];
      $lname=$_POST['ln'];
      $password=$_POST['password'];
      $email1=$_POST['email1'];
      $ph=$_POST['phone1'];
      $age=$_POST['age'];
      $des=$_POST['desig'];
      $gender=$_POST['gender'];
      $passwordhash=  password_hash($password,PASSWORD_BCRYPT,array("cost"=>12));
 
$pdoQuery="INSERT INTO `register`(`fname`, `mname`, `lname`, `password`, `username`, `pno`, `age`, `designation`, `gender`) VALUES (:fname,:mname,:lname,:password,:email1,:ph,:age,:des,:gender)";
$pdoResult=$pdoConnect->prepare($pdoQuery);
$pdoExec=$pdoResult->execute(array(":fname"=>$fname,":mname"=>$mname,":lname"=>$lname,":password"=>$passwordhash,":email1"=>$email1,":ph"=>$ph,":age"=>$age,":des"=>$des,":gender"=>$gender));
     


      if($pdoExec)
      {
          $ppid=$pdoConnect->lastInsertId();
//          echo 'Last inserted id is'.$ppid;
          echo 'Data Inserted';
            include 'mailer.php';
           
           
//          ini_set("SMTP","localhost");
//   ini_set("smtp_port","25");
//  ini_set("sendmail_from","localhost@gmail.com");
//   ini_set("sendmail_path", "C:\xampp\sendmail\sendmail.exe -t");
//   

      }          
            else {
               echo '<script type="text/javascript">alert("Not inserted");</script>';
                echo"<script>location.href='registeration.php'</script>";
 
      }
      
      }
      
      ?>
 
 
