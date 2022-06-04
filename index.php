<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.custom.css" />
	<link rel="stylesheet" type="text/css" href="css/bookblock.css" />
	<link rel="stylesheet" type="text/css" href="css/custom.css" />
	<script src="js/modernizr.custom.79639.js"></script>
    <title>Gravity Falls</title>
</head>
<body>
<div class="bb-custom-wrapper">
				<div id="bb-bookblock" class="bb-bookblock">
				<!-- <div class="bb-item" id="item1">
						<div class="content">
							<div class="scroller">
                                <div class="opasity_block"></div>
								<img class="background1" src="img/picture.png" alt="">
							</div>
						</div>
					</div> -->
					<?
						require './functions/connect.php';
						$sql = $connect->query("SELECT * FROM `info` WHERE `id` = 1");
						while($row = $sql->fetch(PDO::FETCH_ASSOC)){
							?>
								<div class="bb-item" id="item1">
									<div class="content">
										<div class="scroller">	
										<div class="opasity_block"></div>
											<div class="background">
												<div class="left-section">
												<h1 class="h<?=$row['id']?>"><?=$row['h1']?></h1>
												<p id="text<?=$row['id']?>"><?=$row['text']?></p>
												<img id="img<?=$row['id']?>" src="<?='/'.$row['img']?>" alt="">
												<?
												$sql = $connect->query("SELECT * FROM `info` WHERE `id` = 2");			
												while($res = $sql->fetch(PDO::FETCH_ASSOC)){
													?>
														<h1 id="h<?=$res['id']?>"><?=$res['h1']?></h1>
														<p id="text<?=$res['id']?>"><?=$res['text']?></p>
														<img id="img<?=$res['id']?>" src="<?='/'.$res['img']?>" alt="">
													<?
												}
												?>
												<img class="tape-1" src="/img/tape.png" alt="">
														<img class="tape-2" src="/img/tape.png" alt="">
												</div>
													<div class="right-setion">
														<img class="img-2" src="/img/img2.png" alt="">
														<img class="img-3" src="/img/img3.png" alt="">
													</div>
											</div>	
										</div>
									</div>
								</div>
							<?
						}
					?>
					
					
					<!-- <div class="bb-item" id="item2">
						<div class="content">
							<div class="scroller">
                            <div class="opasity_block"></div>
                            <img src="img/page3.png" alt="">
							</div>
						</div>
					</div>
					<div class="bb-item" id="item4">
						<div class="content">
							<div class="scroller">
                            <div class="opasity_block"></div>
                            <img src="img/page3.png" alt="">
                        </div>
						</div>
					</div>
					<div class="bb-item" id="item5">
						<div class="content">
							<div class="scroller">
                            <div class="opasity_block"></div>
                            <img src="img/page3.png" alt="">
                        </div>
						</div>
					</div>
				</div> -->
			</div>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/jquery.mousewheel.js"></script>
		<script src="js/jquery.jscrollpane.min.js"></script>
		<script src="js/jquerypp.custom.js"></script>
		<script src="js/jquery.bookblock.js"></script>
		<script src="js/page.js"></script>
		<script>
			$(function() {

				Page.init();

			});
		</script>
</body>
</html>