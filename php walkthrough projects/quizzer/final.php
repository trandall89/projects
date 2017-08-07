
<?php session_start(); ?>
<?php 
if (isset($_POST['retake'])) {
	$_SESSION['score']=0;
	header('Location: question.php?n=1');
	exit();
}
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>PHP Quizzer</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />

	</head>
	<body>
		<header>
			<div class="container">
				<h1>PHP Quizzer</h1>
			</div>
		</header>
		<main>
			<div class="container">
				<h2>You're Done!</h2>
				<p>Congratulations! You have completed the test</p>
				<p>Final score: <?php echo $_SESSION['score']; ?></p>				
				<form method="post">
					<a href="/index.php"><input type="submit" name="retake" value="Take Again"/></a>
				</form>
			</div>
		</main>
			<footer>
				<div class="container">
					Copyright &copy; 2016, PHP Quizzer
				</div>
			</footer>
	</body>
</html>
