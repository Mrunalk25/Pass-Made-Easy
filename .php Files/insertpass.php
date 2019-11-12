<?php


        
   
      if(isset($_POST['Submit']))
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
      $pid=$_POST['pid'];
      $bus_no=$_POST['bn'];
      $timespan=$_POST['ts'];
      $bus_type=$_POST['bt'];
      $start_date=$_POST['sd'];
      $end_date=$_POST['ed'];
   
$pdoQuery="INSERT INTO `pass_information`(`passenger_Id`, `bus_no`, `timespan`, `bus_type`, `start_date`, `end_date`) VALUES (:pid,:bus_no,:timespan,:bus_type,:start_date,:end_date)";
$pdoResult=$pdoConnect->prepare($pdoQuery);
$pdoExec=$pdoResult->execute(array(":pid"=>$pid,":bus_no"=>$bus_no,":timespan"=>$timespan,":bus_type"=>$bus_type,":start_date"=>$start_date,":end_date"=>$end_date));
//$pdoExec=$pdoResult->execute(array(":pid"=>$_POST['pid'],":bus_no"=>$_POST['bus_no'],":timespan"=>$_POST['timespan'],":bus_type"=>$_POST['bus_type'],":start_date"=>$_POST['start_date'],":end_date"=>$_POST['end_date']));     


      if($pdoExec)
      {
//          $ppid=$pdoConnect->lastInsertId();
//          echo 'Last inserted id is'.$ppid;
         
          header('Location:checkout.php');
           echo 'Data Inserted';
//            include 'mailer.php';
           
           
//          ini_set("SMTP","localhost");
//   ini_set("smtp_port","25");
//  ini_set("sendmail_from","localhost@gmail.com");
//   ini_set("sendmail_path", "C:\xampp\sendmail\sendmail.exe -t");
//   

      }          
            else {
                echo '<script type="text/javascript">alert("Wrong user_id");</script>';
                 echo"<script>location.href='pass_info.php'</script>";
                    
 
      }
      
      }
      
      ?>
 
 
