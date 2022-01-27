<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (isset($_GET['id'])) {
    $stmt = $pdo->prepare('SELECT * FROM images WHERE id = ?');
    $stmt->execute([ $_GET['id'] ]);
    $image = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$image) {
        exit('Image doesn\'t exist with that ID!');
    }
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            unlink($image['filepath']);
            $stmt = $pdo->prepare('DELETE FROM images WHERE id = ?');
            $stmt->execute([ $_GET['id'] ]);
            $msg = 'You have deleted the image!';
        } else {
            header('Location: foto.php');
            exit;
        }
    }
} else {
    exit('No ID specified!');
}
?>

<?=template_header('Delete')?>

<div class="content delete">
    <h2>Delete Image #<?=$image['id']?></h2>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
    <p>Are you sure you want to delete <?=$image['title']?>?</p>
    <div class="yesno">
        <a href="delete.php?id=<?=$image['id']?>&confirm=yes">Yes</a>
        <a href="delete.php?id=<?=$image['id']?>&confirm=no">No</a>
    </div>
    <?php endif; ?>
</div>

   <button type='button' value='Add Category' /><a href="index.php" class="upload-image">Home</a></button>
   <button type='button' value='Add Category' /><a href="hVe@7hL[8mk'x}=.php" class="upload-image">Admin</a></button>

<?=template_footer()?>