<?php

require_once 'connect.php';
if(isset($_POST['Delete']))
{
 
          try 
              
          {
              $pdoConnect=new PDO("mysql:host=localhost;dbname=passenger","root","");
          }
          
          catch (PDOException $exc) 
          {
              
              
              echo $exc->getMessage();
             exit();
          }
          
    
    $id=$_POST['id'];
    
    
$pdoQuery="DELETE FROM `register` WHERE Id=:id";
    $pdoResult=$pdoConnect->prepare($pdoQuery);
    $pdoExec=$pdoResult->execute(array(":id"=>$id));
     


      if($pdoExec)
      {
          $ppid=$pdoConnect->lastInsertId();
//          echo 'Last inserted id is'.$ppid;
          echo '<script type="text/javascript">alert("Data Updated successfully");</script>';
           echo"<script>location.href='home.php'</script>";
                //header('Location:showdetails.php');
          
         
           
           
//          ini_set("SMTP","localhost");
//   ini_set("smtp_port","25");
//  ini_set("sendmail_from","localhost@gmail.com");
//   ini_set("sendmail_path", "C:\xampp\sendmail\sendmail.exe -t");
//   

      } 
      
            else 
                
        {
                
                 $Query="DELETE FROM `pass_information` WHERE passenger_Id=:id";
                 $pdoResult=$pdoConnect->prepare($Query);
                 $pdoExec=$pdoResult->execute(array(":id"=>$id));
                 
                 $pdoQuery="DELETE FROM `register` WHERE Id=:id";
    $pdoResult=$pdoConnect->prepare($pdoQuery);
    $pdoExec=$pdoResult->execute(array(":id"=>$id));
     
           
                
                 if($pdoExec)
                 {
                     $ppid=$pdoConnect->lastInsertId();
//          echo 'Last inserted id is'.$ppid;
                     echo '<script type="text/javascript">alert("Account deleted");</script>';
                      echo"<script>location.href='home.php'</script>";
                //header('Location:showdetails.php');
          
                 }
                else {
                        echo '<script type="text/javascript">alert("Account not deleted ");</script>';
                    
          
                     }
 
      }
      
      }
      
    
  





?>


<html>
    <head>
        <style>
            
          input[type=text], select {
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: cream;
}
 input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}
        </style>
    </head>
    <body>
        <form method="post" >
            <center>ID to Delete:<input type="text" name="id" ><br><br>
                <input type="submit" name="Delete" value="Delete"></center>
            
            
        </form>
        
        
    </body>
        
  
    
    
</html>
