<?php require_once('../../private/initialize.php');

$id = $_GET['id'] ?? '1';
$page_title = 'Create Salamander';
include(SHARED_PATH . '/salamander-header.php');
?>

<h2>Create Salamander</h2>
<form action="<?php echo url_for('salamanders/create.php') ?>" method="post">
  <label for="salName">Name</label><br>
  <input type="text" name="salName"><br>
  <label for="salHab">Habitat</label><br>
  <textarea name="salHab" cols="40" rows="5"></textarea><br>
  <label for="salDesc">Description</label><br>
  <textarea name="salDesc" cols="40" rows="5"></textarea><br>
  <input type="submit" value="Create">
</form>
<?php include(SHARED_PATH . '/salamander-footer.php'); ?>