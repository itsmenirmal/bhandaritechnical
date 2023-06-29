<?php 
$username ='root';
$password ='';
$server ='localhost';
$database ='project';
$con = new mysqli($server,$username,$password,$database);


$name =$_POST['username'];
$email =$_POST['email'];
$subject =$_POST['subject'];
$text =$_POST['text'];

$sql = "insert into `register` (`Name`, `Email`, `Subject`, `Message`) VALUES ('$name', '$email', '$subject', '$text')";
if($con-> query($sql)==true)
{
	echo "DATA INSERTED";
}
else{

	echo "sorry data not inserted";
}

?>


