<?php require_once('../../private/initialize.php');

if (!isset($_GET['id'])) {
  redirect_to(url_for('/staff/subjects/index.php'));
}

$id = $_GET['id'] ?? '1';

if (is_post_request()) {
  $result = delete_salamander($id);
  redirect_to(url_for('salamanders/index.php'));
} else {
  $salamander = find_salamander_by_id($id);
}

$page_title = 'Delete Salamander';
include(SHARED_PATH . '/salamander-header.php');
?>

<h2>Delete Salamander</h2>
<p>Are you sure you want to delete this salamander?</p>
<p><?php echo (h($salamander['name'])) ?></p>
<form action="<?php echo url_for('salamanders/delete.php?id=' . h(u($salamander['id']))); ?>" method="post">
  <input type="submit" value="Delete">
</form>
<?php include(SHARED_PATH . '/salamander-footer.php'); ?>