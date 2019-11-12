<html>
<head>
   <title>  form 
   
   </title>
    <style>
    header{
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
input[type=date], select {
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
Pass Information</h1></center><br>
   </head>
   
   <body>
       <form name='pass' action='insertpass.php' method='post'>
           <table>
             <tr>
		         <td>
				       Email:
				 </td>
				 <td>
                                     <input type="text" name="email"  id='email' placeholder="Your email">
				 </td>
		   </tr>
               
               
               
               
               
               
               
               
               
                <tr>
		         <td>
				       Passenger ID :
				 </td>
				 <td>
                                     <input type="number" name="pid"  id='pid' placeholder="Number received in email">
				 </td>
		   </tr>
               
                 <tr>
		         <td>
				       Bus route:
				 </td>
				 <td>
				       <select id="bn" name="bn">
        <option value="345M">345 Pimrigoan----Marketyard</option>
                <option value="303B">303 Pimprigoan----Bhosari</option>
                <option value="323A">323A Akurdi-----Warje Malwadi</option> 
                <option value="323K">323K Akurdi-----Manapa</option>
                  <option value="allroute">All Route</option> </select>
                                                              
				 </td>
		   </tr>
        
        <tr>
	<td>
	      Timespan :
	</td>
	      <td>
		       <select id="ts" name="ts">
        <option value="monthly">Monthly</option>
                <option value="weekly">Weekly</option>
                <option value="yearly">Yearly</option> </select>
		  </td>
	
	
	</tr>
   <tr>
	<td>
	     Bus Type:
	</td>
	      <td>
		       <select id="bt" name="bt">
        <option value="acbus">Ac Bus</option>
                <option value="nonac">Non_AC BUS</option></select>
		  </td>
	
	
	</tr>
   
   
   <tr>
          <td>
                Start date :
		  </td>
   <td>
       <input type="date" name="sd" id="sd">
   </td>
   </tr>
    <tr>
          <td>
		  
		        End date :
		  </td>
   <td>
       <input type="date" name="ed" id="td">
   </td>
   </tr>
   
    <tr>
          
   <td>
         <input type="Submit" value="Submit" name="Submit">
   </td>
   </tr>
<!--   <tr>
          
   <td>
         <input type="button" value="Generate" name="Generate" onclick='displaydata.php'>
   </td>
   </tr>-->
    <tr>
          
   <td>
         <input type="reset" value="Reset" name="">
   </td>
   </tr>
   </body>
   </html>