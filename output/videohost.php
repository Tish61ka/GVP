<?php
session_start();
?>
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
                    <?
                        if(!$_SESSION['user']){
                            ?>
                                <a href="/output/sign.php">Вход</a>
                                <a href="/output/sign.php"><img src="/img/enter.png" alt=""></a>
                            <?
                        }
                        else{
                            ?>
                            <a href="#" onclick="OpenProfileClick()">Профиль</a>
                                    <ul id="header-ul">
                                        <li class="first-li-header">
                                            <img src="/img/grave.png" alt="No Ethernet" onclick="OpenProfileClick()">
                                        </li>
                                        <li class="last-li-header">
                                            <h2>Имя:</h2>
                                            <p><?=$_SESSION['user']['full_name']?></p>
                                            <h2>E-mail:</h2>
                                            <p><?=$_SESSION['user']['email']?></p>
                                            <a href="../functions/logout.php"><button>Выход</button></a>
                                        </li>
                                    </ul>
                            <?
                        }
                    ?>
                    
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
                        <option id="option2" value="2">Серия 2</option>
                        <option value="3">Серия 3</option>
                        <option>Серия 4</option>
                        <option>Серия 5</option>
                        <option>Серия 6</option>
                        <option>Серия 7</option>
                        <option>Серия 8</option>
                        <option>Серия 9</option>
                        <option>Серия 10</option>
                        <option>Серия 11</option>
                        <option>Серия 12</option>
                        <option>Серия 13</option>
                        <option>Серия 14</option>
                        <option>Серия 15</option>
                        <option>Серия 16</option>
                        <option>Серия 17</option>
                        <option>Серия 18</option>
                        <option>Серия 19</option>
                        <option>Серия 20</option>
                        <option>Серия 21</option>
                        <option>Серия 22</option>
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
        <section class="comment">
            <?
                if(!$_SESSION['user']){

                }else{
                    ?>
                        <div class="commenting">
                            <form method="POST" action="../functions/order.php">
                                <textarea name="text" id="" placeholder="Оставить отзыв..." maxlength="50" ></textarea>
                                <button type="submit">Отправить</button>
                            </form>
                        </div>
                    <?
                }
            ?>
            
            
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
            
        </section>
        <footer>
            <div>
                <img class="logo-footer" src="/img/logo.png" alt="">
                <ul>
                    <li>
                        Для связи:
                    </li>
                    <li>
                        89618126767
                    </li>
                    <li>
                        yuriitish@mail.ru
                    </li>
                </ul>
                <ul class="last-ul">
                    <li>
                        HappyTishkaCorp.
                    </li>
                    <li>
                        Все права защищены      
                    </li>
                    <li>
                        <a href="">Политика конфедациальности</a>
                    </li>
                </ul>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="/js/menu.js"></script>
</body>
</html>