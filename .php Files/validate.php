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
    
    session_start();
    if(isset($_POST['login']))

      {
    
    
    $username=!empty($_POST['username']) ? trim($_POST['username']) :null;
    $password=!empty($_POST['password']) ? trim($_POST['password']):null;
    
    $sqlquery="SELECT username,password FROM register WHERE username=:username ";
    $stmt=$pdo->prepare($sqlquery);
    
    $stmt->bindValue(':username',$username);
    $stmt->execute();
    $register=$stmt->fetch(PDO::FETCH_ASSOC);
    if($register == false)
    {
         echo '<script type="text/javascript">alert("Incorrect username combination!");</script>';
          echo"<script>location.href='login.php'</script>";
    }
     else 
        {
      $vpassword = password_verify($password, $register['password']);
        if($vpassword)
        {
//            $_SESSION['user_id']=$register['Id'];
//            $_SESSION['logged_in']=time();
            
            header('Location:showdetails.php');
            
            exit();
        }
             else
             {
                 echo '<script type="text/javascript">alert("Incorrect password combination!");</script>';
                 echo"<script>location.href='login.php'</script>";
             }
        }
}
?>