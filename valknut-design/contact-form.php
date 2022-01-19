<?php
//$_POST[""]
$to = "mads.hermansen@valknut.design";
$subject = "Valknut Design";
$message = "Test from PHP script";
$headers ="From:mads.hermansen@valknut.design";
$time = time();

mail($to, $subject, $message, $headers);

print "Script Ran $time";

?>