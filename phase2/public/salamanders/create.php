<?php require_once('../../private/initialize.php');
if (is_post_request()) {
  echo "<p>Salamander Name: " . $_POST['salName'] . " </p>";
  $id = $_GET['id'] ?? '1';
  $page_title = 'Create Salamander';
  include(SHARED_PATH . '/salamander-header.php');
?>


  <h2>Create Salamander</h2>
  <form action="<?php echo url_for('salamanders/create.php') ?>" method="post">
    <label for="salName"></label>
    <input type="text" name="salName">
    <input type="submit" value="Create">
  </form>
<?php include(SHARED_PATH . '/salamander-footer.php');
} else {
  redirect_to(url_for('salamanders/index.php'));
}
?>