<?
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/admin.css">
    <title>Document</title>
</head>
<body>
    <section>
        <ul class="left-panel">
            <li class="first-li-admin"><img src="/img/profile-img.png" alt=""><p class="first-p-admin"><?=$_SESSION['admin']['full_name']?></p><p class="last-p-admin"><?=$_SESSION['admin']['email']?></p></li>
            <li class="li" onclick="OpenContent()"><img src="/img/video.png" alt=""><p>Видео</p></li>
            <li class="li comment" onclick="OpenContent()"><img src="/img/comment-admin.png" alt=""><p>Отзывы</p></li>
            <li><a href="../functions/logout.php"><img src="/img/exit.png" alt=""><p>Выход</p></a></li>
        </ul>
        <ul class="content">
            <li>
                <form action="" method="post">
                    <input type="text" placeholder="Название">
                    <input type="file" name="" id="">
                    <input type="text" placeholder="Описание">
                    <button type="submit">Загрузить</button>
                </form>
            </li>
            <li class="last-li-admin">
            <?
                require '../functions/connect.php';
                $sql = $connect->query("SELECT * FROM `orders`");
                while($row = $sql->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        <div class="all-comment">
                            <div>
                                <h2><?=$row['full_name']?></h2>
                                <h3><?=$row['data']?></h3>
                            </div>
                            <p><?=$row['text']?></p>
                        </div>
                    <?
                }
            ?>
            </li>
        </ul>
    </section>
    <script src="/js/admin.js"></script>
</body>
</html>