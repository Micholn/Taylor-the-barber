<?php
$un=$_POST['username'];
$em=$_POST['useremail'];
$msg=$_POST['usermessage'];
if(trim($un)!="" && trim($em)!="" && trim($msg)!="")
{
	if(filter_var($em, FILTER_VALIDATE_EMAIL))
	{
		$message="Hi Admin..<p>".$un." has sent a query having email id as ".$em."</p><p>Query is : ".$msg."</p>";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: <support@barber.com>' . "\r\n";

		if(mail('jhini.mehta@gmail.com','Query for Barber',$message,$headers ))
		{
		echo '1#<p class="msg_show_green">Mail has been sent successfully.</p>';
		}
		else
		{
		echo '2#<p class="msg_show_red">Please, Try Again.</p>';
		}
	}
	else
		echo '2#<p class="msg_show_red">Please, provide valid Email.</p>';
}
else
{
echo '2#<p class="msg_show_red">Please, fill all the details.</p>';
}?>