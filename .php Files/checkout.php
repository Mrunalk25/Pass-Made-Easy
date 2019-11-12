<?php


        
   
      if(isset($_POST['Checkout']))
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
      $email=$_POST['email'];
      $adr=$_POST['adr'];
      $city=$_POST['city'];
      $state=$_POST['state'];
      $zip=$_POST['zip'];
      $cname=$_POST['cname'];
      $ccnum=$_POST['ccnum'];
      $expmonth=$_POST['expmonth'];
      $expyear=$_POST['expyear'];

 
$pdoQuery="INSERT INTO `payment_details`(`email`, `adr`, `city`, `state`, `zip`, `cname`, `ccnum`, `expmonth`, `expyear`) VALUES (:email,:adr,:city,:state,:zip,:cname,:ccnum,:expmonth,:expyear)";
$pdoResult=$pdoConnect->prepare($pdoQuery);
$pdoExec=$pdoResult->execute(array(":email"=>$email,":adr"=>$adr,":city"=>$city,":state"=>$state,":zip"=>$zip,":cname"=>$cname,":ccnum"=>$ccnum,":expmonth"=>$expmonth,":expyear"=>$expyear));
     


      if($pdoExec)
      {
         
//          echo 'Last inserted id is'.$ppid;
     
           header('Location:practice.php');
           echo 'Data Inserted';
           
           
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
        <style>
  .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
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

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
          </style> 
        </head>
    
    
    <body>    
<div class="row">
  <div class="col-75">
    <div class="container">
      <form method="post">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="adr" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="ccnum" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
<input type="submit" name="Checkout" value="Checkout">
      </form>
    </div>
  </div>

 <!--<div class="col-25">
    <div class="container">
      <h4>Cart 
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i> 
          <b>4</b>
        </span>
      </h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
</div>  -->
    
    </body>
    </html>