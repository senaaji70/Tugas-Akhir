<?php
	session_start();
	if(empty($_SESSION[user]) OR empty($_SESSION[pass])){
		header("Location:login.php");
	}else{
		?>
<html>
<head><title>Dashboard</title></head>

<body>

<h1>Dashboard</h1>
<h4><?php echo date("I,d F Y");?></h4>
<h3>Selamat Datang<?php echo $_SESSION[nama];?></h3>
</body>
</html>
	<?php }>