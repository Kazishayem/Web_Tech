<?php
include('../model/db.php');


 $error="";

if (isset($_POST['update'])) {
if (empty($_POST['firstname']) || empty($_POST['email'])) {
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();
$x = $_POST['birthday'];
$userQuery=$connection->UpdateUser($conobj,"student",$_SESSION["username"],$_POST['firstname'],$_POST['email'],$_POST['conpassword'], $_POST['address'],$x, $_POST['prop'],$_POST['inter'],$_POST['gender']);
if($userQuery==TRUE)
{
    echo "update successful"; 
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}


?>
