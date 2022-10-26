<?php require_once('../../private/initialize.php');

//Test for 404 and 500 errors.
// $test = $_GET['test'] ?? '';
// if ($test == '404') {
//   error_404();
// } elseif ($test == '500') {
//   error_500();
// } elseif ($test == 'redirect') {
//   redirect_to(url_for('/salamanders/index.php'));
// } else {
//   echo 'No error';
// }

$id = $_GET['id'] ?? '1';
$page_title = 'Create Salamander';
include(SHARED_PATH . '/salamander-header.php');
?>

<h2>Create Salamander</h2>
<form action="<?php echo url_for('salamanders/create.php') ?>" method="post">
  <label for="salName">Name</label><br>
  <input type="text" name="salName">
  <input type="submit" value="Create">
</form>
<?php include(SHARED_PATH . '/salamander-footer.php'); ?>