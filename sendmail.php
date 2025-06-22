<?
$email = $_REQUEST['email'] ;
$message = $_REQUEST['message'] ;
mail( "amy@idgroupusa.com", "Request for Contact", $message, "From: $email" );
print "Thanks, your email has been sent";
?>