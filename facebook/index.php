<?php
	$signed_request = $_REQUEST["signed_request"];
	list($encoded_sig, $payload) = explode('.', $signed_request, 2);
	$data = json_decode(base64_decode(strtr($payload, '-_', '+/')), true);

	if (empty($data["page"]["liked"])) {
		echo "<html>
<head>
<title>Welcome to Ted's</title>
</head>
<body>";
		echo "<center><img src=\"Welcome.jpg\" alt=\"Welcome to Ted's\"></center>";
		echo "</body>
</html>";
		
	} else {
		echo "<script type=\"text/javascript\">
if (top != self) top.window.location = 'http://www.facebook.com/teds.sg';
</script>";
	}

	//echo "<a href=\"http://www.teds.sg\" target=\"_blank\"><center><img src=\"Sales.png\" alt=\"Welcome to Ted's Opening Sales\"></center></a>";

?>



