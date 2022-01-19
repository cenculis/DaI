<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check that the image ID exists
if (isset($_GET['id'])) {
    // Select the record that is going to be deleted
    $stmt = $pdo->prepare('SELECT * FROM images WHERE id = ?');
    $stmt->execute([ $_GET['id'] ]);
    $image = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$image) {
        exit('Image doesn\'t exist with that ID!');
    }
    // Make sure the user confirms before deletion
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            // User clicked the "Yes" button, delete file & delete record
            unlink($image['filepath']);
            $stmt = $pdo->prepare('DELETE FROM images WHERE id = ?');
            $stmt->execute([ $_GET['id'] ]);
            // Output msg
            $msg = 'You have deleted the image!';
        } else {
            // User clicked the "No" button, redirect them back to the home/foto page
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