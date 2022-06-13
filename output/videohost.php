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
        <div class="shadow"></div>
        <div id="content1">
                    <div class="select-wrapper">
                      <select id="raz" onclick="click1()">
                        <option>
                            <a href="">Сезон 1</a>
                        </option>
                        <option>Сезон 2</option>
                      </select>
                    </div>
                </div>
                <div id="content2">
                    <div class="select-wrapper1">
                      <select id="raz1" onclick="click2()" onchange="click3()">
                        <option id="option1" value="1">Серия 1</option>
                        <option id="option2" value="2">Сезон 2</option>
                        <option value="3">Серия 3</option>
                        <option>Сезон 4</option>
                        <option>Серия 5</option>
                        <option>Сезон 6</option>
                        <option>Серия 7</option>
                        <option>Сезон 8</option>
                        <option>Серия 9</option>
                        <option>Сезон 10</option>
                        <option>Серия 11</option>
                        <option>Сезон 12</option>
                        <option>Серия 13</option>
                        <option>Сезон 14</option>
                        <option>Серия 15</option>
                        <option>Сезон 16</option>
                        <option>Серия 17</option>
                        <option>Сезон 18</option>
                        <option>Серия 19</option>
                        <option>Сезон 20</option>
                        <option>Сезон 21</option>
                        <option>Сезон 22</option>
                      </select>
                    </div>
                </div>
                <img class="first-img-video" src="/img/click.png" alt="">
                <img class="second-img-video" src="/img/click.png" alt="">
    <?
        require '../functions/connect.php';
        $sql = $connect->query("SELECT * FROM `video`");
        while($row = $sql->fetch(PDO::FETCH_ASSOC)){
            ?>
                <video id="video<?=$row['id']?>" poster="/img/prewiew.png" controls src="<?='/'.$row['video']?>"></video>
                <h2 id="h<?=$row['id']?>"><?=$row['name']?></h2>
                <p id="p<?=$row['id']?>"><?=$row['text']?></p>
           
            <?
        }
    ?>
        </section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="/js/menu.js"></script>
</body>
</html>