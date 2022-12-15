<?php require_once('../../private/initialize.php');

if (is_post_request()) {

  $salamander = [];
  $salamander['name'] = $_POST['salName'] ?? '';
  $salamander['habitat'] = $_POST['salHab'] ?? '';
  $salamander['description'] = $_POST['salDesc'] ?? '';

  $result = insert_salamander($salamander);
  if ($result === true) {
    $newId = mysqli_insert_id($db);
    redirect_to((url_for('salamanders/show.php?id=' . $newId)));
  } else {
    $errors = $result;
  }
} else {
  //display the blank form
}

$id = $_GET['id'] ?? '1';
$page_title = 'Create Salamander';
include(SHARED_PATH . '/salamander-header.php');
?>

<h2>Create Salamander</h2>

<?php echo display_errors($errors); ?>

<form action="<?php echo url_for('salamanders/new.php') ?>" method="post">
  <label for="salName">Name</label><br>
  <input type="text" name="salName"><br>
  <label for="salHab">Habitat</label><br>
  <textarea name="salHab" cols="40" rows="5"></textarea><br>
  <label for="salDesc">Description</label><br>
  <textarea name="salDesc" cols="40" rows="5"></textarea><br>
  <input type="submit" value="Create">
</form>
<?php include(SHARED_PATH . '/salamander-footer.php'); ?>