<html>
<head>
	<title>Sending Bots</title>
</head>
<body>
<?php
$link = $_POST["linke"];
$numlike = $_POST["numlike"];
$pug = $_POST["pu"];
$output = shell_exec('openbot.cmd '.$link.' '.$numlike.' '.$pug);
echo '<h3>'.$output.'</h3>';
?>
</body>
</html>