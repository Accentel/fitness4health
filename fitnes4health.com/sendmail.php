<?php
include("config.php");
     print "<script>";
	print "alert('Mail Successfully Send');";
	print "self.location='contact.html'";
	print "</script>";
	$name=$_POST['first-name']." ".$_POST['last-name'];
	$email=$_POST['email'];
$rt="fitness4health@accentelsoft.com";
   $phone=$_POST['phone'];
	$project=$_POST['msg'];
	
	$to = "fitness4health786@gmail.com";

	$subject = "$sub";
   $headers="From:".$rt."\r\n";
   $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $message = "<table border='1'>";
   $message .= "<tr><td>Name</td><td>$name</td></tr>";
  
 
   $message .= "<tr><td>EMAIL ID</td><td>$email</td></tr>";
   
  
   $message .= "<tr><td> Message</td><td>$project</td></tr>";
  
   
   $message .= "</table>";
   $retval = mail ($to,$subject,$message,$headers);
   if($retval){
	   print "<script>";
	print "alert('Mail Successfully Send');";
	print "self.location='contact.html'";
	print "</script>";
	  
   }else{
	   echo "send failed";
   }
?>