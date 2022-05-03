<?php

session_start();
unset($_SESSION['customer']);
//unset($_SESSION['customer']);
$dsn = "mysql:host=localhost;dbname=mybid;charset=utf8";
$username = "root";
$password = "";
$ar =  array();
$pdo = new PDO($dsn, $username, $password);

$boo=true;
$sql=$pdo->prepare('select * from member where username=? and password=?');
$sql->execute([$_POST['username'],$_POST['password']]);
foreach($sql->fetchAll() as $row){
        $_SESSION['customer']=['username'=>$row['username'],'password'=>$row['password'],'phone'=>$row['phone'],'mail'=>$row['mail'],'reservation'=>$row['reservation']];
}
if(isset($_SESSION['customer'])){
	$boo=true;
?>
<script>
		alert("Welcome");
		location.href='index.php';
</script>
<?php
}
else{
        $boo=false;
		echo "alert('帳號密碼錯誤 !');
		window.history.back();";
}
?>
