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
                <h1>Загрузить видео:</h1>
                <form action="../functions/upload_video.php" enctype="multipart/form-data" method="post">
                    <div>
                        <input type="text" name="name" maxlength="50" placeholder="Название">
                        <button type="submit">Загрузить</button>
                        <img class="mcgucket" src="/img/McGucket.png" alt="">
                    </div>
                    <textarea name="text" id="" maxlength="300" placeholder="Описание"></textarea>
                    <div>
                        <label for="file" class="file">Загрузите видео или перетащите в поле</label>
                        <input type="file" name="video" id="file"> 
                        <img class="mabel" src="/img/Mabel.png" alt="">
                    </div>
                </form>
            </li>
            <li class="last-li-admin">
                <h1>Отзывы:</h1>
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
                            <div>
                                <p><?=$row['text']?></p>
                                <a href="">Удалить</a>
                            </div>  
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