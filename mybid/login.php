<?php
session_start();
unset($_SESSION['customer']);
$sql=$pdo->prepare('select * from member where username=? and password=?');
$sql->execute([$_REQUEST['username'],$_REQUEST['password']]);
foreach($sql->fetchAll() as $row){
	$_SESSION['customer']=['username'=>$row['username'],'password'=>$row['password'],'phone'=>$row['phone'],'mail'=>$row['mail'],'reservation'=>$row['reservation']];
}
if(isset($_SESSION['customer']))
	echo $_SESSION['customer']['username'],'welcome.';
else
	echo 'Incorrect account or password.';
?>
