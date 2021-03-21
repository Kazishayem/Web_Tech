<?php
session_start(); 

include('../control/updatecheck.php');


if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<body>
<h2>Profile Page</h2>

Hii, <h3><?php echo $_SESSION["username"];?></h3>
<br>Your Profile Page.
<br><br>
<?php
$radio1=$radio2=$radio3="";
$firstname=$email="";
$pass="";
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"student",$_SESSION["username"],$_SESSION["password"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $firstname=$row["firstname"];
      $email=$row["email"];
     
      if(  $row["gender"]=="female" )
      { $radio1="checked"; }
      else if($row["gender"]=="male")
      { $radio2="checked"; }
      else{$radio3="checked";}
   
  } 
}
  else {
    echo "0 results";
  }



?>
<form action='' method='post'>
Name : <input type='text' name='firstname' value="<?php echo $firstname; ?>" >  <br>

    Email : <input type='text' name='email' value="<?php echo $email; ?>" > <br> <br>
 Gender: 
     <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female  
     <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male  
     <input type='radio' name='gender' value='other'<?php  $radio3; ?> > Other  <br> <br>
     New Password     :<input type="password" name="newpassword">  <br>
     Confirm Password  :<input type="password" name="conpassword">   <br>
     <br>
     Birthday Date :<input type="date" id="birthday" name="birthday"> <br>
     Address :<input type="text" name="address"> 
     <br>
     Profession : <select name="prop" id="prop">
              <option value="student">student</option>
              <option value="teacher">teacher</option>
              <option value="stuff">stuff</option>
              <option value="admin">admin</option>
            </select><br>

      Interest: <input type="text" name="inter"> 
      <br>
      <br>
     <input name='update' type='submit' value='Update'>  

     <?php echo $error; ?>
<br>
<br>
<a href="../view/pageone.php">Back </a>

<a href="../control/logout.php"> logout</a>

</body>
</html>