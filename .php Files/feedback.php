<?php


        
   
      if(isset($_POST['Submit_Feedback']))
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
     $p_id=$_POST['p_id'];
      $ema=$_POST['ema'];
      $msg=$_POST['fb'];
     
 
$pdoQuery="INSERT INTO `feedback`(`p_id`, `email`, `msg`) VALUES (:p_id,:ema,:msg)";
$pdoResult=$pdoConnect->prepare($pdoQuery);
$pdoExec=$pdoResult->execute(array(":p_id"=>$p_id,":ema"=>$ema,":msg"=>$msg));
     


      if($pdoExec)
      {
          echo '<script> alert("Feedback Inserted");</script>';
//          echo 'Last inserted id is'.$ppid;
//          echo 'Data Inserted';
//            include 'mailer.php';
           
           
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
 
 























<html>
<head>
<style>    header{
            font-size:60px;
             font-family: Goudy Old Style;
            padding: 15px;
            font-weight: bolder;
    color:black;
        }

     a{
            font-size:35px;
            padding: 20px;
            text-decoration: none;
            padding: 15px;
            background-blend-mode: darken;
        }
        a:hover{
            background-color: #d49269;
            color:white;
        }
        nav
        {font-weight: bold;
             font-family: Goudy Old Style;
           padding: 10px;
        }
    h1 {
	background:transparent;
	color:white;
	font-size:140%;
	color:black;
	//font-face:Goudy Old Style;	
}
h2
{
	background:transparent;
	color:white;
	font-size:200%;
	color:black;
 }
    .button
{	
	color:black;
	border: none;
	padding: 18px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 19px;
	width: 8%;
	border-radius:5px;	
}
    .btn
{	
	background:transparent;
	color:black;
	border:solid black;
	padding: 20px 32px;
    text-align: center;
    text-decoration: none;
  //  display: inline-block;
    font-size: 19px;
	border-radius:2px;
	width: 30%;
	border-radius:5px;	
	font:bold;
	font-family:Perpetua Titling MT;
}
.btn:hover
{
	border:solid green;
	color:green;
}
.button1
{	
	color:black;
	border: none;
	padding: 18px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 19px;
	width: 13%;
	border-radius:5px;	
}
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
.button
{
	background-color:transparent ;
	border: none;
   	color: black;
	padding: 18px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
       	font-size: 16px;
	border:2px solid black;
	border-radius: 10px;
	width: 14%;
	border-radius:5px;	
}
.alert
{
padding:20px;
background-color:red;
color:white;
margin-bottom:15px;
}
.button:hover{  
    color: blueviolet;
    border:2px solid blueviolet;
}
</style>
<script src="email.js">
function validemail(element){}
function submitf(){}
</script>
</head>
<body background="paper_crane_close_up_origami_background_photo_31423_3840x2400.jpg"><font color="white">

<h1><center style="background-color:transparent; color:black;font-style:Goudy Old Style;font-size:200%;">
Complaint Box !</h1></center><br>
<h2><div><center>
<p>Hello ! Would you like to share your valuable reviews ,contribution or feedback ?
Please use the following form to get in touch with us .We would be very glad to here from you !</p></h2></center></div>
<center style="color:black;">
<br><br>
<form name="myform" method="post">
 <label for="email" >Passenger Id:</label>
<input type="text"  id="p_id" name="p_id" placeholder="Passenger Id"> <p>
<label for="email" >Email:</label>
<input type="text"  id="ema" name="ema" placeholder="Email id" onchange="validemail(this.value)"> <p>
<label for="fb">Feedback:</label>
<input type="text" id="fb" name="fb" placeholder="Your feedback"> <p><br>
<input type="submit"  value="Submit_Feedback" name="Submit_Feedback" id="Submit_Feedback" class="button">
<input type="reset"  value="Reset" class="button"><p>
</form>
</center>
</h2>
</font>
</body>
</html>
 