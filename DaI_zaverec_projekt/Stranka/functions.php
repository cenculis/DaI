<?php
function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'blog';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	exit('Failed to connect to database!');
    }
}

function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>$title</title>
  <link rel="stylesheet" type="text/css" href="stylegalery.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <nav class="navtop">
        <div>
            <h1>Gallery System</h1>
            <a href="foto.php"><i class="fas fa-image"></i>Gallery</a>
        </div>
    </nav>
EOT;
}


function template_footer() {
echo <<<EOT
    </body>
</html>
EOT;
}
?>