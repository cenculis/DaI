<?php
include_once('resources/init.php');
?>
<!DOCTYPE html>

<head>

   <!--- Basic Page Needs
   ================================================== -->
  	<meta http-equiv="Content-Type" content="Stranka slavky fratricovej" charset="UTF-8">
	<meta name="Author" content="Peter Tibensky, STU"> 
	<meta http-equiv="content-language" content="sk">

	<!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">  
	<link rel="stylesheet" href="css/media-queries.css"> 

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body>


   <!-- Content
   ================================================== -->
   <div id="content-wrap">

   	<div class="row">

   		<div id="main" class="eight columns">

	   		<article class="entry">
					<header class="entry-header">
	
						<h2 class="entry-title">
							<h2></h2>
						</h2> 				 
					
						<div class="entry-meta">
		<button type='button' value='Add Category' /><a href="upload.php" class="upload-image">Upload Image</a></button>
		<button type='button' value='Add Category' /><a href="add_post.php">Add Post</a></button>
		<button type='button' value='Add Category' /><a href="manage_post.php">Manage Post</a></button>
		<button type='button' value='Add Category' /><a href="reset-password.php" class="btn btn-warning">Reset Your Password</a></button>
      <button type='button' value='Add Category' /><a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a></button>
      <button type='button' value='Add Category' /><a href="register_real.php" class="btn btn-danger ml-3">register new account</a></button>

      <br>
      	<button type='button' value='Add Category' /><a href="index.php" class="upload-image">Home</a></button>
   
		
						</div> 
					 
					</header> 
	
					
					<div class="entry-content">
						


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

	<title>SF</title>
  <link rel="shortcut icon" href="favicon.png" >
</head>

 <link rel="stylesheet" type="text/css" href="stylegalery.css">
<body>




<div class="content home">
 <br>
	<div class="images">
		<?php foreach ($images as $image): ?>
		<?php if (file_exists($image['filepath'])): ?>
		<a href="#">
			<img src="<?=$image['filepath']?>" alt="<?=$image['description']?>" data-id="<?=$image['id']?>" data-title="<?=$image['title']?>" width="300" height="200">
			<span><?=$image['description']?></span>
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
					<a href="delete.php?id=${img_meta.dataset.id}" class="trash" title="Delete Image"><i class="fas fa-trash fa-xs"></i></a>
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


					</div> 


				</article> <!-- end entry -->

   		</div> <!-- end main -->

				
   			
   		</div> <!-- end sidebar -->

   	</div> <!-- end row -->

   </div> <!-- end content-wrap -->





   
  


   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>  
   <script src="js/main.js"></script>





</body>

</html>