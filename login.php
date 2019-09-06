<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$login = $_POST['login'];}
$array=array('test', 'testo');
$login = '';
$password = '';

if(isset($_POST['login'])) {
$login = $_POST['login'];}
 if(isset ($_POST['password'])){
 $password = $_POST['password'];}
?>

<body>	
<form action="login.php" method="POST">
 

<p><strong>Ваш логин</strong></p>
<input type="text" name="login" value='<?= $login ?>'>

<p><strong>Ваш пароль</strong></p>
<input type="password" name="password" value='<?= $password ?>'>
<div style="color:black;"></div> 
<br> 
<button type="submit" name="signup" style="margin-top:20px">   Войти   </button> 

<br>





<div>Вы ввели:</div>
<div style="color:blue">Логин: <?= $login ?>
<div style="color:yellow">Пароль: <?= $password ?>
</body>

<?php	
	if ($login == 'test' && $password == 'testo') {
	
	?>
	
	
	<div style="color:green">вы авторизованы!</div>	
	
	
	
	<?php
	}
	 else  
	 {
	?>			
	
	 
<div style="color:red">логин или пароль неверны!</div>
		
	 <?php
	 }
		