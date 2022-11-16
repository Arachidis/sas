<?php require_once('../../private/initialize.php');
$id = $_GET['id'] ?? '1';
$salamander = find_salamander_by_id($id);
$page_title = 'Salamander Details';
include(SHARED_PATH . '/salamander-header.php');
?>

<h2>Salamander Details</h2>
<h3>Salamander ID: <?php echo h($salamander['id']); ?></h3>
<h3>Salamander Name: <?php echo h($salamander['name']); ?></h3>
<h3>Salamander Habitat: </h3>
<p><?php echo h($salamander['habitat']); ?></p>
<h3>Salamander Description: </h3>
<p><?php echo h($salamander['description']); ?></p>
<p><a href="<?php echo (url_for('salamanders/index.php')); ?>">&laquo; Back to Salamander List</a></p>
<?php include(SHARED_PATH . '/salamander-footer.php'); ?>