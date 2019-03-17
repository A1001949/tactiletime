<?php
if(isset($_POST['submit'])) {
	$to = "eriont25@gmail.com";
	$subject = $_POST['subject'];
	$name_field = $_POST['name'];
	$email_field = $_POST['email'];
	$message = $_POST['message'];

?>
<!DOCTYPE html>
	<head>
		<title>Erion Tulina</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<meta name="author" content="Adrian, Ashwini, McCoy" />
		<meta name="description" content="This is the main page for Erion Tulina's website" />
		<link rel="icon" type="image/png" href="../img/favicon.png">
		<link href="https://fonts.googleapis.com/css?family=Lora|Nanum+Myeongjo|Ovo|Poiret+One|Unna" rel="stylesheet">
		<script src="js/jquery-3.2.1.js"></script>
		<script src="js/script.js"></script>
	</head>
	<body>
		<a id="main"></a>
		<div id="header">
			<div class="headbox">
				<div id="title">
					<a href="../index.html"><img src="../img/logo.png" alt="Logo"/></a>
				</div>
				<div id="nav">
					<ul>
						<li class="underline" ><a href="../index.html#about">About</a></li>
						<li class="underline" ><a href="../index.html#perform">Performances</a></li>
						<li class="underline" ><a href="../index.html#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="confirm">
<?php
	if($name_field && $email_field && $message){
		$body = "From: $name_field\n\nE-Mail: $email_field\n\nMessage:\n$message";
		mail($to, $subject, $body);
?>
		<h1>Email Successful!</h1>
		<a href="../index.html">Return to page</a>
<?php
	} else {
?>
		<h1>Error: Missing One or More Required Fields</h1>
		<a href="../index.html">Return to page</a>
<?php
	}
?>
		</div>
	</body>
</html>
<?php
	exit;
} else {
	echo "blarg!";
}
?>