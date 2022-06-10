<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VideoHost</title>
</head>
<body>
    <?
        require '../functions/connect.php';
        $sql = $connect->query("SELECT * FROM `video`");
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