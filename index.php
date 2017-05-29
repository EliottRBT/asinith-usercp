<?php  
session_start();
 require('connect.php');
if (isset($_POST['username']) and isset($_POST['password'])){
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if ($count == 1){
$_SESSION['username'] = $username;
}else{
$fmsg = "Username/Password invalid.";
}
}
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
header('Location: usercp');
 
}else{
?>
<html>
<head>
	<title>Login Page</title>
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
<link rel="stylesheet" href="styles.css" >
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</head>

<body>
 
<div class="container" style="position: absolute; left: 10%; margin-left: 100px; top: 180px;">
      <form class="form-signin" method="POST">
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <center><h2 class="form-signin-heading">Login Page</h2></center>
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@</span>
	  <input type="text" name="username" class="form-control" placeholder="Username" required>
	</div>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      </form>
</div>
</body>
 
</html>
<?php } ?>