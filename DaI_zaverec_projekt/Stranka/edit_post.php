<?php
include_once('resources/init.php');
$post = get_posts($_GET['id']);
if(isset($_POST['title'],$_POST['contents'],$_POST['category'])){
    
    $errors = array();
    
    $title      = trim($_POST['title']);
    $contents   = trim($_POST['contents']);
    
    if(empty($title)){
     $errors[] = 'You need to supply a title';
    }
    else if(strlen($title)>255){
     $errors[] = 'The title can not be longer than 255 characters';   
    }
    
    if(empty($contents)){
     $errors[] = 'You need to supply some text';   
    }
    if(!category_exists('id',$_POST['category'])){
    $errors[] = 'That category does not exists';   
    }
    
    if(empty($errors)){
        edit_post($_GET['id'],$title,$contents,$_POST['category']);
       
        header("Location:indexx.php?id={$post[0]['post_id']}");
        die();
    }
}
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

</head>

<body>

   <div id="content-wrap">

   	<div class="row">

   		<div id="main" class="eight columns">

	   		<article class="entry">
					<header class="entry-header">
	       <?php
        if(isset($errors) && !empty($errors)){
            echo"<ul><li>",implode("</li><li>",$errors),"</li></ul>";
        }
        ?>
						<h2 class="entry-title">
							<h2>Add Category</h2>
						</h2> 				 
					
						<div class="entry-meta">
		        <form action='' method='post'>
     <div>
        <label for='title'>Title</label>
         <input type='text' name='title' value='<?php echo $post[0]['title']; ?>' />
     </div>
     <div>
         <label for='contents'>Content</label>
         <textarea name='contents' cols=20 rows=10><?php echo $post[0]['contents']; ?></textarea>
      </div>
     <div>
       <label for='category'>Category</label>
       <select name='category'>
        <?php
        foreach(get_categories() as $category){
         $selected = ($category['name'] == $post[0]['name']) ? 'selected' : '';   
         ?>
         <option value='<?php echo $category['id'] ?>' <?php echo $selected; ?> ><?php echo $category['name'] ?></option>
         <?php
        }
        ?>
       </select>
     </div>
     <p><input type='submit' value='Add Post' /></p>
     </form>
						</div> 
					 
					</header>  


				</article>

   		</div>

   	</div> 

   </div> 
   

   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>  
   <script src="js/main.js"></script>

</body>

</html>