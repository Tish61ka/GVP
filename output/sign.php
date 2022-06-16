<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/sign.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
	<div class="signup">
		<form method="POST" action="../functions/reg.php">
			<label for="chk" aria-hidden="true">Регистрация</label>
			<input type="text" name="full_name" placeholder="Фамилия и Имя" required="">
			<input type="email" name="email" placeholder="Email" required="">
			<input type="password" name="password" placeholder="Пароль" required="">
            <input type="password" name="password_confirm" placeholder="Повторите пароль" required="">
            <div>
                <button type="submit">Регистрация</button>
                <a href="#" onclick="click10()">Вход</a>
                <a href="/index.php">На главную</a>
            </div>
            <?php 
                if ($_SESSION['message']){
                    echo '<p>' . $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['message']);
            ?> 

            <!-- <p>Регестрация успешно пройдена!</p> -->
		</form>
        <img src="/img/McGucket.png" alt="">
	</div>
	<div class="login">
		<form method="POST" action="../functions/login.php">
            <div>
                <label for="chk" aria-hidden="true">Вход</label>
                <a class="go-main" href="/index.php">На главную</a>
            </div>
			<input type="email" name="email" placeholder="Email" required="">
			<input type="password" name="password" placeholder="Password" required="">
			<div>
                <button>Вход</button>
                <a href="#" onclick="click10()">Регистрация</a>
            </div>
            <?php 
                if ($_SESSION['message']){
                    echo '<p>' . $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['message']);
            ?> 
		</form>
        <img src="/img/Mabel.png" alt="">
	</div>
    <script src="/js/sign.js"></script>
</body>
</html>