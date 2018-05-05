<?php include('header.php');

require_once "dbconnect.php";
@ $db = new mysqli($host, $user, $password, $database);

  if (mysqli_connect_errno())
  {
    echo 'Połączenie z bazą nie powiodło się. Spóbuj ponownie';
    exit;
  }
  $db->query('SET NAMES utf8');
  $db->query('SET CHARACTER_SET utf8_unicode_ci'); ?>
  <link rel="stylesheet" href="style.login.css" type="text/css" />

  <div id="container">

		<form action="register.php"  method="post">
To create a new account please just type in Name, Surname and Email. You do not have to type any more details now. <br/>
<br/> Active <input type="checkbox"  name="Status" /><br/>
      Sex:  Male <input type="checkbox"  name="male" /> Female  <input type="checkbox"  name="female" /><br/>
			Name <input type="text" name="Name" /><br/>
			Surname <input type="text" name="Surname" /><br/>
			Position <input type="text" name="Position" /><br/>
			Phone <input type="text" name="Phone" /><br/>
			Home <input type="text" name="Home" /><br/>
			Email <input type="text" name="Email" /><br/>
                        Start <input type="date" name="start" /><br/><br/>
												<input type="submit" class="inputsubmit" value="Create" name="wyszukaj " onclick="dis1()" />
			<input name="wyrazenie" style="visibility:hidden;" value="<?php echo $wiersz['id'];?>" ></input>
		</form>
  </div>

  </body>
</html>
