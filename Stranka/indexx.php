<?php
include_once('resources/init.php');
//$posts = (isset($_GET['id'])) ? get_posts($_GET['id']) : get_posts();
$posts = get_posts((isset($_GET['id']))? $_GET['id'] : null); 
?>

<!DOCTYPE html>
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
	<link rel="stylesheet" type="text/css" href="style.css">

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body>



<div class="logo center">
<a href="index.php"><img src="favicon.png" alt='Home' ></a>
</div>

<div class="topnav">
<div class="flex-parent jc-center ">

    <a href='indexx.php' class="button button1hover font">texty</a>

    <a href='foto.php' class="button button1 font">foto</a>

    <a href='portfolko.php' class="button button1 font">portfolko</a>

</div>
 </div>



   <!-- Content
   ==================================================-->
   <div id="content-wrap">

   	<div class="row">

   		

	   		<article class="entry">
		<?php
     foreach($posts as $post){
      ?>
					<header class="entry-header">

						
							<h2><a href='indexx.php?id=<?php echo $post['post_id']; ?>' ><?php echo $post['title']; ?></a></h2>
								 
					
						<div class="entry-meta">
							<ul>
								<li> <?php echo date('d-m-y h:i:s',strtotime($post['date_posted'])); ?></li>
								
							</ul>
						</div> 
					 
					</header> 

					
					
					 
									 <?php   
     }
     ?>

  					 <div class="entry-content font">
						<p><?php echo nl2br($post['contents']); ?></p>
					</div>
					
				</article> <!-- end entry -->
			
   </div> <!-- end content-wrap -->
   






   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>  
   <script src="js/main.js"></script>


 					
   		
 				   	

</body>

</html>