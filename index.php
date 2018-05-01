<?php 
$site_name = "Callestasia.org";
$url = $_SERVER['HTTP_HOST'];
$description = "Mari Berteman di Instagram @nikkoenggaliano";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<link rel="shortcut icon" href="https://res.cloudinary.com/teepublic/image/private/s--1LCC4Yjf--/t_Preview/b_rgb:ffffff,c_limit,f_jpg,h_630,q_90,w_630/v1512052793/production/designs/2122621_1.jpg">
	<?php  


$path = 'image';
$core = array
(
	array('Nayeon','1.jpg','2.jpg','3.jpg'),
	array('Jungyeon','1.jpg','2.jpg','3.jpg'),
	array('Momo','1.jpg','2.jpg','3.jpg'),
	array('Sana','1.jpg','2.jpg','3.jpg'),
	array('Jihyo','1.jpg','2.jpg','3.jpg'),
	array('Mina','1.jpg','2.jpg','3.jpg'),
	array('Dahyun','1.jpg','2.jpg','3.jpg'),
	array('Chaeyoung','1.jpg','2.jpg','3.jpg'),
	array('Tzuyu','1.jpg','2.jpg','3.jpg')


);
$key = array_rand($core);
$stack = rand(1, count($core[$key])-1);

	if (!empty($_GET['nama'])) {
		$getnama = $_GET['nama'] ? $_GET['nama'] : "Nepska";

		$text1 = array
		(
						$getnama." Kamu Akan Berkencan Dengan ".$core[$key][0], 
						$getnama." Kamu Akan Makan Malam Dengan ".$core[$key][0], 
						$getnama." Kamu akan Di Telfon ".$core[$key][0], 
						$getnama." Kamu akan Selfie Bersama ".$core[$key][0], 
						$getnama." Kamu Akan Di followback oleh ".$core[$key][0], 
						$getnama." Kamu Akan Dance bersama ".$core[$key][0]
		);

		$rand_keys = array_rand($text1);
		$nama = $text1[$rand_keys];
		$gambar = "https://".$_SERVER['SERVER_NAME']."/twice/".$path."/".strtolower($core[$key][0])."/".$core[$key][$stack];
// 		echo $gambar;
		?>
		<meta name=description content="<?= $description ?>">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta name="author" content="callestasia.org">
		<!-- Open Graph meta tags -->
		<meta property="og:title" content="<?= $nama ?>"/>
		<meta property="og:type" content="article" />
		<meta property="og:url" content="<?= $url ?>"/>
		<meta property="og:image" content="<?= $gambar ?>" />
		<meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="300" />
        <meta property="og:image:alt" content="Twice JJANG!" />
		<meta property="og:site_name" content="<?= $site_name ?>" />
		<meta property="og:description" content="<?= $description ?>" />
		<title><?= $nama ?></title>
		<?php
	}else {
		$getnama = "Nikko Enggaliano";

		?>
		<meta name=description content="<?= $description ?>">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta name="author" content="Kapansukses.ga">
		<!-- Open Graph meta tags -->
		<meta property="og:title" content="<?= $getnama ?>"/>
		<meta property="og:type" content="article" />
		<meta property="og:url" content="<?= $url ?>"/>
		<meta property="og:image" content="https://0.soompi.io/wp-content/uploads/2018/01/12093918/twice-candy-pop.jpg" />
		<meta property="og:site_name" content="<?= $site_name ?>" />
		<meta property="og:description" content="<?= $description ?>" />
		<title><?= $getnama ?></title>
		<?php	
	}
	?>
</head>
<body>

	<style>
		body, html {
			height: 100%;
			margin: 0;
			font: 400 15px/1.8 "Lato", sans-serif;
			color: #777;
		}

		.bgimg-1, .bgimg-2, .bgimg-3 {
			position: relative;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;

		}
		.bgimg-1 {
			background-image: url(https://i.ytimg.com/vi/wQ_POfToaVY/maxresdefault.jpg);
			height: 100%;
		}

		.caption {
			position:absolute;
			left:50%;
			top:50%;
			width: 100%;
			text-align: center;
			position:absolute;left:50%;top:50%;
			transform:translate(-50%,-50%);
			transform:-mz-translate(-50%,-50%);
			-webkit-transform:translate(-50%,-50%)
		}

		.caption .border {
			background-color: rgba(208, 246, 255, 0.67);
			font-family: sans-serif;
			font-weight: bold;
			color: #000;
			padding: 18px;
			font-size: 25px;
			letter-spacing: 10px;
		}

	</style>

	<div class="bgimg-1">
		<div class="caption">
			<div class="border">
				Created <a href="https://www.instagram.com/nikkoenggaliano/"> Nikko Enggaliano</a> <br/>(Callestasia, Osirish)
				<br/><a href="//fb.com/nepska">&copy; Nepska</a>
			</div>
		</div>
	</div>

</body>
</html>