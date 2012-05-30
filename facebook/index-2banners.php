<html>
<head>
<title>Welcome to Ted's</title>
</head>
<body>
<?php
	$signed_request = $_REQUEST["signed_request"];
	list($encoded_sig, $payload) = explode('.', $signed_request, 2);
	$data = json_decode(base64_decode(strtr($payload, '-_', '+/')), true);

	if (empty($data["page"]["liked"])) {
		echo "<center><img src=\"Welcome.png\" alt=\"Welcome to Ted's\"></center>";
	} else {
		echo "<a href=\"http://www.teds.sg\" target=\"_blank\"><center><img src=\"Sales.png\" alt=\"Welcome to Ted's\"></center></a>";
	}

	//echo "<a href=\"http://www.teds.sg\" target=\"_blank\"><center><img src=\"Sales.png\" alt=\"Welcome to Ted's Opening Sales\"></center></a>";

?>


</body>
</html>



