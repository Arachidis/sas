<?php require_once('../../private/initialize.php');

//Test for errors.
$test = $_GET['test'] ?? '';
if ($test == '404') {
  error_404();
} elseif ($test == '500') {
  error_500();
} elseif ($test == 'redirect') {
  redirect_to(url_for('/salamanders/index.php'));
} else {
  echo 'No error';
}

$id = $_GET['id'] ?? '1';
$page_title = 'Create a Salamander';
include(SHARED_PATH . '/salamander-header.php');
?>

<h2>Create a Salamander</h2>
<form action="<?php echo url_for('salamanders/create.php') ?>" method="post">
  <label for="salName"></label>
  <input type="text" name="salName">
  <input type="submit" value="Create">
</form>
<?php include(SHARED_PATH . '/salamander-footer.php'); ?>