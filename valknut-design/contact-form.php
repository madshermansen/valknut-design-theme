<?php
//$_POST[""]
$to = "mads.d.hermansen@gmail.com";
$subject = "Valknut Design";
$message = "Test from PHP script";
$headers ="From:Test@Test.com";
$time = time();

mail($to, $subject, $message, $headers);

print "Script Ran $time";

?>