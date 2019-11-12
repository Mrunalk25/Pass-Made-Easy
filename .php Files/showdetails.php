<?php
include 'connect.php';

//if(isset($_POST['Generate']))
//{
//$ppid="SELECT LAST_INSERT_ID() FROM `pass_information`";
//$pdorunn=$pdo->query($ppid);
    session_start();
    require_once 'connect.php';
    
function fetch_data()
{
    include 'connect.php';
   
    $output='';
   
  $username=!empty($_POST['username']) ? trim($_POST['username']) :null;
  $pdoQuery="SELECT * FROM `register` ORDER BY Id DESC LIMIT 1";
  $pdorun=$pdo->query($pdoQuery);
  if($pdorun)
  {
//      echo  '<table width="100%" border="1" cellspacing="0" cellpadding="6">
//          <tr>
//          <th>PASS ID</th>
//          </tr><tr>
//           <th>BUS Number</th></tr>
//            <tr><th>Timespan</th></tr>
//             <tr><th>Bus Type</th></tr>
//             <tr><th>Start Date</th></tr>
//               <tr><th>End Date</th>
//          </tr></table>
//          ';
      while($row = $pdorun->fetch(PDO::FETCH_OBJ))
      {
      $output .= '<table width="50%" height="70%" border="1" align="center" >
                <tr>
                <th>Passenger_Id</th> 
                <td> '.$row->Id.'</td>
                </tr>
               <tr>
               <th>Name</th> 
               <td> '.$row->fname.' </td>
               </tr>
             <tr>
             <th>Email_Id</th> 
             <td> '.$row->username.' </td>
                 </tr>
             <tr>
             <th>Mobile Number</th>
             <td> '.$row->pno.' </td>
                 </tr>
             <tr>
             <th>Age</th> 
             <td> '.$row->age.'</td>
             </tr>
            <tr>
            <th>Designation</th> 
            <td> '.$row->designation.' </td>
                </tr>
                 <tr>
                 <th>Gender</th> 
            <td> '.$row->gender.' </td>
                </tr>
              <tr>
             <th>Offer Applicable</th>
             <td> '.$row->offer_applicable.' </td>
                 </tr>  
                  <tr>
             <th>Offer Type</th>
             <td> '.$row->offer_type.' </td>
                 </tr> 
                  <tr>
             <th>Monthly Pass Amount</th>
             <td> '.$row->amount.'</td>
                 </tr> 

</table>
                
              
              
         ' ;
      }
      
  }
  return $output;
}

?>

<html>
    <head>
   
    <style>
        a:hover{
            background-color: #d49269;
            color:white;
        }
      
        h2
{
	back-ground:white;
	color:white;
	font-size:200%;
	color:black;
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
	radius:5px;	
}
.button:hover{
	color:blueviolet;
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
.button1:hover{
	color:blueviolet;
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
	radius:5px;	
	font:bold;
	font-family:Perpetua Titling MT;
}
.btn:hover
{
	border:solid blueviolet;
	color:white
}
    </style>
    
    
    <style>
/* Style The Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>

    </head>
    <body>
        
        <div class="dropdown">
  <button class="dropbtn">Options</button>
  <div class="dropdown-content">
       <a href="home.php">Home</a>
      <a href="upform.php">Update Account</a>
    <a href="delete.php">Delete Account</a>
    <a href="feedback.php.php">FeedBack</a>
    <a href="logout.php">Logout</a>
  </div>
</div>
        <table>
        <?php echo fetch_data();?>
        </table>
        <form method='post' action="pass_info.php">
            
            <br><center>
                <button type=submit class="btn" name="Book" value="Book You Pass">Book Your Pass</button></center>
        <br><center>
            <a href="bus_info.php">      <button type=button class="btn" name="Book" value="Book You Pass">Pass Centres</button></center></a>
        <br><center>
            <a href="bus_info.php">       <button type=button class="btn" name="Book" value="Book You Pass">Bus Routes</button></center></a>
  
        </form>
    
    
    </body>
</html>