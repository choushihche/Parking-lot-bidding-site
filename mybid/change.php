<?php
        session_start();
        $dsn = "mysql:host=localhost;dbname=mybid;charset=utf8";
        $username = "root";
        $password = "";
        $pdo = new PDO($dsn, $username, $password);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Clean Blog - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

</head>
<?php
$username=$_GET['username'];
$password=$_GET['password'];
$phone=$_GET['phone'];
$mail=$_GET['mail'];
$sql=$pdo->prepare("select * from member where username=?");
$newdata=$pdo->prepare("update member set username=? ,password=? ,phone=? ,mail=? where username=?");
$sql->execute([$_SESSION['customer']['username']]);

$_SESSION['customer']=['username'=>$username,'password'=>$password,'phone'=>$phone,'mail'=>$mail];

$newdata->execute([$_SESSION['customer']['username'],$_SESSION['customer']['password'],$_SESSION['customer']['phone'],$_SESSION['customer']['mail'],$_SESSION['customer']['username']]);
$boo=true;
?>
<body>
</body>
<script>
var boo='<?php echo $boo; ?>';
if(boo){
	alert('edit success');
	location.href="index.php";
}
</script>
</html>
