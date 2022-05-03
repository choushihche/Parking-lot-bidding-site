<DOCTYPE!>
<html>
<head>
</head>
<body>
<?php
	session_start();
	$dsn = "mysql:host=localhost;dbname=mybid;charset=utf8";
	$username = "dluser";
	$password = "dluser@515";
	$pdo = new PDO($dsn, $username, $password);
	$sql=$pdo->prepare('insert into feeback values(?,?,?,?,?)');
	if(!isset($_SESSION['customer']))
		$sql->execute([$_GET['name'],$_GET['mail'],$_GET['phone'],$_GET['day'],$_GET['message']]);
	else
		$sql->execute([$_SESSION['customer']['username'],$_SESSION['customer']['mail'],$_SESSION['customer']['phone'],$_GET['day'],$_GET['message']]);
	$boo=true;
?>
</body>
<script>
	var boo='<?php echo $boo; ?>';
	if(boo){
		alert("Send success.");
		window.location='index.php';
	}
</script>
</html>
