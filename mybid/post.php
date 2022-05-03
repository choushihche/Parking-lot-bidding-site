<?php
session_start();
$boo=true;
if(!isset($_SESSION['customer']))
	$boo=false;
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
<script>

var boo='<?php echo $boo; ?>';
if(!boo){
	alert("Please login first.");	
	window.location='index.php';
}
//else
//	window.location='http://120.110.115.152/mybid/post.php';

</script>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="post.php">Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Feeback</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>Manage your account</h1>
            <h2 class="subheading">You can change your person data.</h2>
          </div>
        </div>
      </div>
    </div>
  </header>
<?php
	$dsn = "mysql:host=localhost;dbname=mybid;charset=utf8";
	$username = "root";
	$password = "";
	$pdo = new PDO($dsn, $username, $password);
	$sheet=$pdo->query('select * from member');
?>
  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto" class="h3">
        <?php
		foreach($sheet as $row){
			if($_SESSION['customer']['username']==$row[0] and $_SESSION['customer']['password']==$row[1]){
				print '<table class="table">';
				print '<thead>';
				print '<th scope="col">Username</th>';
				print '<th scope="col">Phone</th>';
				print '<th scope="col">Mail</th>';
				print '<th scope="col">Reservation</th>';
				print '</thead><tbody><tr>';
				print '<th scope="row">'.$row[0].'</th><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td>';
				print '</tr></tbody></table><br>';
			}
		}	 
	?>      
	<div class="form-group">
            <button  class="btn btn-primary" name="logout"><a href="logout.php">logout</a></button>
 	    <button  class="btn btn-primary" name="logout"><a href="edit.php">edit</a></button>
          </div>
        </div>
      </div>
    </div>
  </article>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>
