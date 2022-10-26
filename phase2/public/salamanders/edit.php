<?php require_once('../../private/initialize.php');

$id = $_GET['id'] ?? '1';
$page_title = 'Edit Salamander';
include(SHARED_PATH . '/salamander-header.php');
if (is_post_request()) {
  echo "<p>Salamander Name: </p>";
}
?>


<h2>Edit Salamander</h2>
<form action="<?php echo url_for('salamanders/edit.php') ?>" method="post">
  <label for="salName"></label>
  <input type="text" name="salName">
  <input type="submit" value="Edit">
</form>
<?php include(SHARED_PATH . '/salamander-footer.php'); ?>