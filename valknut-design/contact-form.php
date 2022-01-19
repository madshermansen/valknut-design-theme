<?php
//$_POST[""]
$to = "tasoyem638@liepaia.com";
$subject = "Valknut Design";
$message = "Test from PHP script";
$headers ="From:Test@Test.com";
$time = time();

mail($to, $subject, $message, $headers);

print "Script Ran $time";

?>