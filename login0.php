<?php
session_start();


?>
<head>
	<title>Log in as admin</title>
	<link rel="stylesheet" href="style.login.css" type="text/css" />

</head>

<body>

	<div id="container">

		<form action="logs.php" method="post">

			<input class="inputlogin" name="login" type="text" placeholder="login">
			<input class="inputlogin" name="password" type="password" placeholder="password">
			<input class="inputsubmit" type="submit"value="Log In">
			<!-- Hi! We can move back to an old server.<br/> -->
			<!-- https://staffsystem.000webhostapp.com -->
		</form>
		<form action="reset.php" method="get">


			<input type="submit" class="inputforgotten" name="admin" value="Forgotten password"/>

		</form>

		<?php if (isset($_SESSION['blad'])) echo $_SESSION['blad']; ?>

	</div>

</body>
</html>
