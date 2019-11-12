<?php
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

        
   
      if(isset($_POST['Submit']))

      {
    
    
    $pid=!empty($_POST['otp']) ? trim($_POST['otp']) :null;
 
    
    $sqlquery="SELECT Id FROM register WHERE Id=:pid";
    $stmt=$pdo->prepare($sqlquery);
  
//    $stmt->bindValue(':pid',$pid);
    $stmt->execute(array(":pid"=>$pid));
    $register=$stmt->fetch(PDO::FETCH_ASSOC);
   
    if($register == false)
    {
         echo '<script type="text/javascript">alert("Wrong OTP");</script>';
 
    }
    else{
        // die('right otp');
          header('Location:login.php');
    }
      }
      
      ?>


 
 

<HTML>
<HEAD>
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
input[type=number], select {
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: cream;
}
    input[type=password], select {
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
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
<h1><center style="background-color:transparent; color:black;font-style:Goudy Old Style;font-size:200%;">
Enter OTP </h1></center><br>



</HEAD>
<body>
    <form name="myform"  method="post"><br><br>
<div class="row">
      <div class="col-25">
        <label for="fn">Enter OTP</label>
      </div>
      <div class="col-75">
        <input type="text" id="otp" name="otp" placeholder="OTP will be received on your registered email_id">
      </div>
    </div>



<input type="submit" name="Submit" value="Submit">
<!--<a href="mailer.php"><input type="reset" name="resend" value="Resend"></a>-->
</form>
</body>

</HTML>






















 



