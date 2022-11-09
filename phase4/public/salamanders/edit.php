<?php require_once('../../private/initialize.php');

$id = $_GET['id'] ?? '1';
$page_title = 'Edit Salamander';
include(SHARED_PATH . '/salamander-header.php');

if (is_post_request()) {
  // Handle form values sent by new.php
  $salamander = [];
  $salamander['id'] = $id;
  $salamander['name'] = $_POST['name'];
  $salamander['habitat'] = $_POST['habitat'];
  $salamander['description'] = $_POST['description'];

  $result = update_salamander($salamander);
  if ($result) {
    redirect_to(url_for('salamanders/show.php?id=' . $id));
  } else {
    //Update failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
} else {
  $salamander = find_salamander_by_id($id);
}

?>

<h2>Edit Salamander</h2>
<form action="<?php echo url_for('salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
  <label for="salName">Name</label><br>
  <input type="text" name="name" value="<?php echo ($salamander['name']); ?>"><br>
  <label for="salHab">Habitat</label><br>
  <textarea name="habitat" cols="40" rows="5"><?php echo ($salamander['habitat']); ?></textarea><br>
  <label for="salDesc">Description</label><br>
  <textarea name="description" cols="40" rows="5"><?php echo ($salamander['description']); ?></textarea><br>
  <input type="submit" value="Make Changes">
</form>
<?php
include(SHARED_PATH . '/salamander-footer.php');

?>