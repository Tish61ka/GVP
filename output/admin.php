<?
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>