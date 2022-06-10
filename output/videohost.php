<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/videohost.css">
    <title>VideoHost</title>
</head>
<body>
    <header>
        <img class="logo" src="/img/logo.png" alt="">
        <nav>
            <ul>
                <li>
                    <a href="/index.php">Главная</a>
                </li>
                <li>
                    <a>Каталог</a>
                </li>
                <li class="enter">
                    <a>Вход</a>
                    <a href=""><img src="/img/enter.png" alt=""></a>
                </li>
            </ul>
        </nav>
    </header>
    <section class="scroller"></section>
    <section class="videoplayer">
        <h1>Мультсериал Gravity Falls</h1>
    </section>
    <?
        require '../functions/connect.php';
        $sql = $connect->query("SELECT * FROM `video` WHERE `id` = 1");
        while($row = $sql->fetch(PDO::FETCH_ASSOC)){
            ?>
                <video id="video<?=$row['id']?>" controls width="500" src="<?='/'.$row['video']?>"></video>
                <h1 id="h<?=$row['id']?>"><?=$row['name']?></h1>
                <p id="p<?=$row['id']?>" style="width: 300px;"><?=$row['text']?></p>
            <?
        }
    ?>
    
</body>
</html>