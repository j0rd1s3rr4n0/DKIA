<html>
<head>
	<title>Sending Bots</title>
</head>
<body>
<?php
$username = $_POST["usernamee"];
$numberfollowers = $_POST["numfoll"];
$pug = $_POST["pu"];
$output = shell_exec('openbot.cmd '.$username.' '.$numberfollowers.' '.$pug);
echo '<h3>'.$output.'</h3>';
?>
</body>
</html>