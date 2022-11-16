<?php require_once('../../private/initialize.php');

$id = $_GET['id'] ?? '1';
$page_title = 'Edit Salamander';
if (is_post_request()) {
  echo "<p>Salamander Name: " . $_POST['salName'] . "</p>";
}
include(SHARED_PATH . '/salamander-header.php');
?>


<h2>Edit Salamander</h2>
<form action="<?php echo url_for('salamanders/edit.php?id=' . $id) ?>" method="post">
  <label for="salName"></label>
  <input type="text" name="salName">
  <input type="submit" value="Edit">
</form>
<?php include(SHARED_PATH . '/salamander-footer.php'); ?>yyy