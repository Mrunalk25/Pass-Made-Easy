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
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}
input[type=reset] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
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
</style>
<h1><center style="background-color:transparent; color:black;font-style:Goudy Old Style;font-size:200%;">
Login !</h1></center><br>
</HEAD>
<body>
    <form action="validate.php" name="myform" method="post"><br><br><center>
            Username:<input type="text" name="username" id="username"  placeholder="Your Email"><br><br></CENTER>

        <CENTER> Password:<input type="password" name="password" id="password"><br><br></CENTER>

  <CENTER><input type="submit" name="login" value="Login"></CENTER>
<CENTER><input type="reset" name="reset" value="Reset"></CENTER>
</form>
    
   
</body>

</HTML>

