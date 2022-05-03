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
	$boo=true;
	$boo2=true;
	$boo3=true;
        session_start();
        $dsn = "mysql:host=localhost;dbname=mybid;charset=utf8";
        $username = "root";
        $password = "";
        $pdo = new PDO($dsn, $username, $password);
	$price= $_GET['price'];
	$id= $_GET['id'];
	$sql=$pdo->query("select * from garage");
	$query=$pdo->prepare("update garage set username=?, price=? ,status=? where ID=?");
	$origin=$pdo->prepare("update member set reservation=? where username=?");
        $data=$pdo->prepare("update member set reservation=? where username=?");
	if(isset($_SESSION['customer']) and $_SESSION['customer']['reservation']!=''){
		$boo3=false;
	}
	else{
	foreach($sql as $row){
                if($id==$row[0]){			
			if($row[3]=="long-time"){
				if(isset($_SESSION['customer'])){
					if($price>$row[2]){
						$query->execute([$_SESSION['customer']['username'],$price,'1',$id]);
						$data->execute([$id,$_SESSION['customer']['username']]);
						$origin->execute(['',$row[5]]);
					}
					else
						$boo=false;
				}else
					$boo2=false;
			}
			else{
				if(isset($_SESSION['customer'])){
                                       if($price>$row[2]){	       
					       $query->execute([$_SESSION['customer']['username'],$price,'1',$id]);
                                               $data->execute([$id,$_SESSION['customer']['username']]);
                                               $origin->execute(['',$row[5]]);
					}
					else
						$boo=false;
				}else{
					if($price>$row[2])
						$query->execute(['visitors',$price,'1',$id]);
					else	
						$boo=false;
				}
			}				
		}
	}
}	
?>
<body>
</body>
<script>
var boo='<?php echo $boo; ?>';
var boo2='<?php echo $boo2; ?>';
var boo3='<?php echo $boo3; ?>';

if(!boo3){
	alert('You are already reservation!');
        window.location='index.php';
}
else if(!boo2){
	alert('You are not member!');
        window.location='index.php';
}
else if(boo){
	alert('bid success');
	window.location='index.php';
}
else{
	alert('bid fail');
	window.location='index.php';
}
</script>
</html>
