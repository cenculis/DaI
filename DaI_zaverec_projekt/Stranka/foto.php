<?php
include 'functions.php';
// Connect to MySQL
$pdo = pdo_connect_mysql();
// MySQL query that selects all the images
$stmt = $pdo->query('SELECT * FROM images ORDER BY uploaded_date DESC');
$images = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE HTML>

<head>
	<meta http-equiv="Content-Type" content="Stranka slavky fratricovej" charset="UTF-8">
	<meta name="Author" content="Peter Tibensky, STU"> 
	<meta http-equiv="content-language" content="sk">
   <link rel="stylesheet" href="css/default.css"> 
     <link rel="stylesheet" href="css/layout.css"> 
     <link rel="stylesheet" href="css/media-queries.css"> 
  <link rel="stylesheet" type="text/css" href="style.css">
<meta http-equiv="Content-Type" content="Stranka slavky fratricovej" charset="UTF-8">
	<meta name="Author" content="Peter Tibensky, STU"> 
	<meta http-equiv="content-language" content="sk">
  <link rel="shortcut icon" href="favicon.png" >
</head>

 <link rel="stylesheet" type="text/css" href="stylegalery.css">
<body>



<div class="logo center">
<a href="index.php"><img src="favicon.png" alt='Home' ></a>
</div>

<div class="topnav">
<div class="flex-parent jc-center ">

    <a href='indexx.php' class="button button1 font">texty</a>

    <a href='foto.php' class="button button1hover font">foto</a>

    <a href='portfolko.php' class="button button1 font">portfolko</a>

</div>
 </div>

<div class="content home">
 <br>
	<div class="images">
		<?php foreach ($images as $image): ?>
		<?php if (file_exists($image['filepath'])): ?>
		<a href="#">
			<img src="<?=$image['filepath']?>" alt="<?=$image['description']?>" data-id="<?=$image['id']?>" data-title="<?=$image['title']?>" width="300" height="200">
			<h2><span><?=$image['description']?></span></h2>
		</a>
		<?php endif; ?>
		<?php endforeach; ?>
	</div>
</div>
<div class="image-popup"></div>

<script>
// Container we'll use to output the image
let image_popup = document.querySelector('.image-popup');
// Iterate the images and apply the onclick event to each individual image
document.querySelectorAll('.images a').forEach(img_link => {
	img_link.onclick = e => {
		e.preventDefault();
		let img_meta = img_link.querySelector('img');
		let img = new Image();
		img.onload = () => {
			// Create the pop out image
			image_popup.innerHTML = `
				<div class="con">
					<h3>${img_meta.dataset.title}</h3>
					<p>${img_meta.alt}</p>
					<img src="${img.src}" width="500px" height="500px">
				
				</div>
			`;
			image_popup.style.display = 'flex';
		};
		img.src = img_meta.src;
	};
});
// Hide the image popup container, but only if the user clicks outside the image
image_popup.onclick = e => {
	if (e.target.className == 'image-popup') {
		image_popup.style.display = "none";
	}
};
</script>

</body>