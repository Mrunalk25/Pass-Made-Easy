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
Update details </h1></center><br>
<script>
function valid1()
{
var i;
var fn=document.myform.fn.value;
var mn=document.myform.mn.value;
var ln=document.myform.ln.value;
var age=document.myform.age.value;
var desig=document.myform.desig.value;
var gender=document.myform.gender.value;

           if(fn=="")
	{
	alert("First Name Is Mandatory");
	document.getElementById('fn').style.borderColor='#e52213';
	return false;
	}	
		else if(ln=="")
		{
		alert("Last Name Is Mandatory");
		document.getElementById('ln').style.borderColor='#e52213';
		return false;
		}
                else if(age=="")
		{
		alert("Age Is Mandatory");
		document.getElementById('age').style.borderColor='#e52213';
		return false;
		}
               else if(desig=="")
		{
		alert("Designation Is Mandatory");
		document.getElementById('desig').style.borderColor='#e52213';
		return false;
		}

                else if(gender=="")
		{
		alert("Gender Is Mandatory");
		document.getElementById('gender').style.borderColor='#e52213';
		return false;
		}
                else
                {
          return true;
                }
}
function formvalid()
{
    if(valid1() && valid2() && valid3())
    {
        return true;
    }
    else
    {
        return false;
    }
}
function valid2()
{
var phone1=document.myform.phone1.value;
	
if(phone1.length<10||phone1.length>10)
	{
	alert("Phone Number is Invalid");
	document.getElementById('phone1').style.borderColor='#e52213';
	return false;
	}

return true;

}
function valid3()
{

var email=document.myform.email.value;
var i=email.indexOf("@");
var d=email.indexOf(".");
	if(i<1||d<1)
	{
	alert("Invalid Email Id");
	document.getElementById('email').style.borderColor='#e52213';
	return false;
	}
	else if(1<email.match(/\../g).length)
	{
	alert("Multiple dots in email Id");
	return false;
	}
	return true;

}

</script>
</HEAD>
<body>
    <form name="myform" action="update.php" method="post" onsubmit="return formvalid();"><br><br>


<div class="row">
      <div class="col-25">
        <label for="email">Email Id</label>
      </div>
      <div class="col-75">
        <input type="text" id="email1" name="email1" placeholder="Your Email">
      </div>
    </div>
<div class="row">
      <div class="col-25">
        <label for="phone1">Mobile Number</label>
      </div>
      <div class="col-75">
        <input type="number" id="phone1" name="phone1">
      </div>
    </div>
<div class="row">
      <div class="col-25">
        <label for="age">Age</label>
      </div>
      <div class="col-75">
        <input type="number" id="age" name="age">
      </div>
    </div>
<div class="row">
      <div class="col-25">
        <label for="desig">Designation</label>
      </div>
      <div class="col-75">
        <select id="desig" name="desig">
        <option value="student">student</option>
                <option value="governmnt_job">government_job</option>
                <option value="other">other</option> </select>
      </div>
    </div>

     


<input type="submit" name="update" value="update">
<input type="reset" name="reset" value="Reset">
</form>
</body>

</HTML>