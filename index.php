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
	<link rel="stylesheet" href="/css/peppermint.required.css">
	<script src="js/modernizr.custom.79639.js"></script>
    <title>Gravity Falls</title>
</head>
<body>
	<header>
        <img class="logo" src="/img/logo.png" alt="">
        <div class="wrapper">
    		<nav>
    		  <div class="burger-nav">
    		  </div>
    		  <div id="contain">
    		    <div class="bar1"></div>
    		    <div class="bar2"></div>
    		    <div class="bar3"></div>
    		  </div>
    		  <ul id="nav" >
    		    <li><a href="">Home</a></li>
    		    <li><a href="">About</a></li>
    		    <li><a href="">Photos</a></li>
    		    <li><a href="">Videos</a></li>
    		    <li><a href="">Contact</a></li>
    		  </ul>
    		</nav>
  		</div>
    </header>
	<div class="film"> 
		<img class="close-film" onclick="click3()" src="/img/grave.png" alt="">
		<div>
			<p>Чтобы перейти к просмотру сериала нажмите на "</p>
			<img src="/img/question.png" alt="">
			<p>" слева сверху</p>
		</div>
	</div>
	<div id="close-demo"></div>
<div class="bb-custom-wrapper">
				<div id="bb-bookblock" class="bb-bookblock">
				 <div class="bb-item" id="item1">
						<div class="content">
							<div class="scroller">
                                <div class="opasity_block"></div>
								<div class="mainback"></div>
								<img class="background1" src="img/picture.png" alt="">
							</div>
						</div>
					</div> 
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
					<?
						require './functions/connect.php';
						$sql = $connect->query("SELECT * FROM `info` WHERE `id` = 2");
						while($row = $sql->fetch(PDO::FETCH_ASSOC)){
							?>
								<div class="bb-item" id="item1">
									<div class="content">
										<div class="scroller">	
										<div class="opasity_block"></div>
											<div class="background">
												<div class="left-section-block">
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
												
												</div>
													<div class="right-setion-block">
													<?
												$sql = $connect->query("SELECT * FROM `info` WHERE `id` = 3");			
												while($res = $sql->fetch(PDO::FETCH_ASSOC)){
													?>
														<h1 id="h<?=$res['id']?>"><?=$res['h1']?></h1>
														<p id="text<?=$res['id']?>"><?=$res['text']?></p>
														<img id="img<?=$res['id']?>" src="<?='/'.$res['img']?>" alt="">
													<?
												}
												?>
													</div>
											</div>	
										</div>
									</div>
								</div>
							<?
						}
					?>
					<?
						require './functions/connect.php';
						$sql = $connect->query("SELECT * FROM `info` WHERE `id` = 4");
						while($row = $sql->fetch(PDO::FETCH_ASSOC)){
							?>
								<div class="bb-item" id="item1">
									<div class="content">
										<div class="scroller">	
										<div class="opasity_block"></div>
											<div class="background2">
												<div class="left-section-block">
												<?
												$sql = $connect->query("SELECT * FROM `info` WHERE `id` = 4");			
												while($res = $sql->fetch(PDO::FETCH_ASSOC)){
													?>
														<h1 id="h<?=$res['id']?>"><?=$res['h1']?></h1>
														<p id="text<?=$res['id']?>"><?=$res['text']?></p>
														<img id="img<?=$res['id']?>" src="<?='/'.$res['img']?>" alt="">
													<?
												}
												?>
												
												</div>
													<div class="right-setion-block">
													<?
												$sql = $connect->query("SELECT * FROM `info` WHERE `id` = 5");			
												while($res = $sql->fetch(PDO::FETCH_ASSOC)){
													?>
														<h1 id="h<?=$res['id']?>"><?=$res['h1']?></h1>
														<p id="text<?=$res['id']?>"><?=$res['text']?></p>
														<img id="img<?=$res['id']?>" src="<?='/'.$res['img']?>" alt="">
													<?
												}
												?>
													</div>
											</div>	
										</div>
									</div>
								</div>
							<?
						}
					?>
					<?
						require './functions/connect.php';
						$sql = $connect->query("SELECT * FROM `info` WHERE `id` = 6");
						while($row = $sql->fetch(PDO::FETCH_ASSOC)){
							?>
								<div class="bb-item" id="item1">
									<div class="content">
										<div class="scroller">	
										<div class="opasity_block"></div>
											<div class="background3">
												<div class="left-section-block">
												<?
												$sql = $connect->query("SELECT * FROM `info` WHERE `id` = 6");			
												while($res = $sql->fetch(PDO::FETCH_ASSOC)){
													?>
														<h1 id="h<?=$res['id']?>"><?=$res['h1']?></h1>
														<p id="text<?=$res['id']?>"><?=$res['text']?></p>
														<img id="img<?=$res['id']?>" src="<?='/'.$res['img']?>" alt="">
													<?
												}
												?>
												
												</div>
													<div class="right-setion-block">
													<?
												$sql = $connect->query("SELECT * FROM `info` WHERE `id` = 7");			
												while($res = $sql->fetch(PDO::FETCH_ASSOC)){
													?>
														<h1 id="h<?=$res['id']?>"><?=$res['h1']?></h1>
														<p id="text<?=$res['id']?>"><?=$res['text']?></p>
														<img id="img<?=$res['id']?>" src="<?='/'.$res['img']?>" alt="">
													<?
												}
												?>
													</div>
											</div>	
										</div>
									</div>
								</div>
							<?
						}
					?>
					<div class="bb-item" id="item5">
						<div class="content">
							<div class="scroller">
                            <div class="opasity_block"></div>
							<div class="mainback"></div>
                            <img class="background4" src="img/backpicture.png" alt="">
                        </div>
						</div>
					</div>
				</div>
			</div>
			<button id="btn1" onclick="clicking()">
			<p id="p-in-btn">Войти в демо-режим</p>
			</button>
			<a class="go-film" href="/output/videohost.php"><p>Перейти к просмотру</p><div></div></a>
			<section class="slider">
				<div class="cd-slider">
    			  <ul>
    			    <li class="item current" style="background: #5AA0D8;">
						<img id="first" src="/img/firstpageslider.png" alt="NO Ethernet">
    			    </li>
    			    <li class="item" style="background: #E0DBD8;">
						<img id="second"src="/img/secondpageslider.png" alt="NO Ethernet">
    			    </li>
    			    <li class="item" style="background: #565656">
						<img id="trith" src="/img/trithpageslider.png" alt="NO Ethernet">
    			    </li>
					<li class="item" style="background: #565656">
						<img id="fourth" src="/img/fourthpageslider.png" alt="NO Ethernet">
    			    </li>
					<li class="item" style="background: #565656">
						<img id="fifth" src="/img/fifthpageslider.png" alt="NO Ethernet">
    			    </li>
					<li class="item" style="background: #565656">
						<img id="last"src="/img/lastpageslider.png" alt="NO Ethernet">
    			    </li>
    			  </ul>		
    			<nav>
    			    <a href="#" class="prev">
    			      <svg viewBox="0 0 20 20">
    			        <path fill="#FFFFFF" stroke-width="0" d="M8.388,10.049l4.76-4.873c0.303-0.31,0.297-0.804-0.012-1.105c-0.309-0.304-0.803-0.293-1.105,0.012L6.726,9.516c-0.303,0.31-0.296,0.805,0.012,1.105l5.433,5.307c0.152,0.148,0.35,0.223,0.547,0.223c0.203,0,0.406-0.08,0.559-0.236c0.303-0.309,0.295-0.803-0.012-1.104L8.388,10.049z"></path>
    			      </svg>
    			    </a>
    			    <a href="#" class="next">
    			      <svg viewBox="0 0 20 20">
    			        <path fill="#FFFFFF" stroke-width="0" d="M11.611,10.049l-4.76-4.873c-0.303-0.31-0.297-0.804,0.012-1.105c0.309-0.304,0.803-0.293,1.105,0.012l5.306,5.433c0.304,0.31,0.296,0.805-0.012,1.105L7.83,15.928c-0.152,0.148-0.35,0.223-0.547,0.223c-0.203,0-0.406-0.08-0.559-0.236c-0.303-0.309-0.295-0.803,0.012-1.104L11.611,10.049z"></path>
    			      </svg>
    			    </a>
    			  </nav>
				</div>
			</section>
			<section class="mobile-slider">
			<div class="peppermint peppermint-inactive" id="slider">
				<div class="slide">
					<img src="/img/firstpageslider.png" alt="">
				</div>
        		<div class="slide">
					<img src="/img/secondpageslider.png" alt="">
				</div>
        		<div class="slide">
					<img src="/img/trithpageslider.png" alt="">
				</div>
        		<div class="slide">
					<img src="/img/fourthpageslider.png" alt="">
				</div>
        		<div class="slide">
					<img src="/img/fifthpageslider.png" alt="">
				</div>
        		<div class="slide">
					<img src="/img/lastpageslider.png" alt="">
				</div>
    		</div>
			</section>
			<img src="/img/tablet-version-photo.jpg" alt="" class="tablet-version-photo">
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
			<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
		<script src="js/jquery.mousewheel.js"></script>
		<script src="js/jquery.jscrollpane.min.js"></script>
		<script src="js/jquerypp.custom.js"></script>
		<script src="js/jquery.bookblock.js"></script>
		<script src="js/page.js"></script>
		<script src="/js/script.js"></script>
		<script src="/js/slider.js"></script>
		<script src="/js/peppermint.min.js"></script>
		<script src="/js/mobile-slider.js"></script>
		<script>
			$(function() {

				Page.init();

			});
		</script>
</body>
</html>