<?php
include_once('resources/init.php');
$posts = (isset($_GET['id'])) ? get_posts($_GET['id']) : get_posts();

?>
<!DOCTYPE html>
<head>

	<meta http-equiv="Content-Type" content="Stranka slavky fratricovej" charset="UTF-8">
	<meta name="Author" content="Peter Tibensky, STU"> 
	<meta http-equiv="content-language" content="sk">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">  
	<link rel="stylesheet" href="css/media-queries.css"> 
	<script src="js/modernizr.js"></script>
	<link rel="shortcut icon" href="favicon.png" >

	<script type="text/javascript">
function confirm_delete()
{
return confirm("Are you sure you want to delete this record?");
}
</script>

</head>

<body>


   <div id="content-wrap">

   	<div class="row">

   		<div id="main" class="eight columns">

	   		<article class="entry">
		<?php
     foreach($posts as $post){
      ?>
					<header class="entry-header">

						<h2 class="entry-title">
							<h2><a href='index.php?id=<?php echo $post['post_id']; ?>' ><?php echo $post['title']; ?></a></h2>
						</h2> 				 
					
						<div class="entry-meta">
							<ul>
								<li> <?php echo date('d-m-y h:i:s',strtotime($post['date_posted'])); ?></li>
								<span class="meta-sep">&bull;</span>								
								<li><a href="#" title="" rel="category tag">In <a href='manage_category.php?id=<?php echo $post['category_id']; ?>' ><?php echo "<font color='green'>".$post['name']."</font>"; ?></a></li>
								<span class="meta-sep">&bull;</span>
								<li><a href='delete_post.php?id=<?php echo $post['post_id']; ?>' onclick='return confirm_delete()'><font color="red">Delete This Post</font></a></li>&nbsp;||
								<li><a href='edit_post.php?id=<?php echo $post['post_id']; ?>' ><font color="blue">Edit This Post</font></a></li>
							</ul>
						</div> 
					 
					</header> 
	
					
					<div class="entry-content">
						<p><?php echo nl2br($post['contents']); ?></p>
					</div> 
									 <?php   
     }
     ?>

				</article> 

   		</div> 
   			
   		</div> 

   	</div> 

   </div> 
   
     <button type='button' value='Add Category' /><a href="index.php" class="upload-image">Home</a></button>
   <button type='button' value='Add Category' /><a href="hVe@7hL[8mk'x}=.php" class="upload-image">Admin</a></button>


   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>  
   <script src="js/main.js"></script>

</body>

</html>