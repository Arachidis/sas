<?php require_once('../../private/initialize.php');
if (is_post_request()) {

  $salamander = [];
  $salamander['name'] = $_POST['salName'] ?? '';
  $salamander['habitat'] = $_POST['salHab'] ?? '';
  $salamander['description'] = $_POST['salDesc'] ?? '';
  $result = insert_salamander($salamander);

  if ($result) {
    $newId = mysqli_insert_id($db);
    redirect_to((url_for('salamanders/show.php?id=' . $newId)));
  } else {
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
} else {
  redirect_to(url_for('salamanders/new.php'));
}
