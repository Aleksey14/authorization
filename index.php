<?php
	if (isset($_SESSION['logged_user'])) { 
		echo авторизован;
		echo $_SESSION['logged_user'];
?>
<a href="/logout.php">Выйти</a>
<?php		
	}
	else {
?>
<a href="/login.php">Авторизация </a>
<a href="/signup.php">Регистр</a>
<?php	
	}
?>