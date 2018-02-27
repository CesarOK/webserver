<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">	
	<title>Pagina do César e do Abdala</title>
	
	<style>
		header {
			background: #e3e3e3;
			padding: 2em;
			text-align: center;
		}
	</style>

</head>


<body>
  <header>
  	<h1><?php 
  		echo 'Testing website, by César and Badaua';
  		echo 'O que voce disse?'.htmlspecialchars($_GET['name']);	
  	?></h1>
  </header>
  <?php
    include('test.php');
    echo date('l, F jS, Y');
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    test();
    ?>
</body>

</html>