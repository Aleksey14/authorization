<?php
 
session_start();
$userAlreadyRegistered = FALSE;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$login = $_POST['login'];
	$newUser = array();
	$newUser['login'] = $login;
	$newUser["password"] = $_POST['password'];
	$newUser["name"] = $_POST['name'];
	$newUser["surname"] = $_POST['surname'];
	$newUser["e-mail"] = $_POST['e-mail'];
	$newUser["dateofbirth"] = $_POST['dateofbirth'];
	$newUser["yourcity"] = $_POST['yourcity'];
	
	if (!isset($_SESSION['RegisteredUsers'])) {
		$_SESSION['RegisteredUsers'] = array();
	}
	
	$registeredUsers = &$_SESSION['RegisteredUsers'];
	
	if (array_key_exists($login, $registeredUsers)){
		$userAlreadyRegistered = TRUE;
	}
	else {
		$registeredUsers[$login] = $newUser;
		header("Location: /login.php");
		exit();
	}
}
?>

<!doctype html>
<html>
	<head>
		<title>Регистрация</title>
	</head
	
	<body>
		<form action="/signup.php" method="POST">
			<p>
				<p><strong>Логин</strong></p>
				<input type="text" name="login">
			</p>
			<p>
				<p><strong>Пароль</strong></p>
				<input type="password" name="password">
			</p>
			<p>
				<p><strong>Ваше  имя</strong></p>
				<input type="text" name="name">
			</p>
			<p>
				<p><strong>Ваша фамилия </strong></p>
				<input type="text" name="surname">
			</p>
			<p>
				<p><strong>Ваш e-mail</strong></p>
				<input type="text" name="e-mail">
			</p>
			<p>
				<p><strong>Ваша дата рождения</strong></p>
				<input type="date" name="dateofbirth">
			</p>
			<p>
				<p><strong>Ваш город </strong></p>
				<input type="text" name="yourcity">
			</p>
			<button type="submit" name="signup">Зарегистрироваться</button>
<?php
if ($userAlreadyRegistered) {
?>
			<p style="color:red">Пользователь <?= $login ?> уже зарегистрирован</p>
<?php
}
?>
		</form>	
	</body>
</html>