<?php
$to = "andrew@teds,sg";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "order@teds.sg";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>