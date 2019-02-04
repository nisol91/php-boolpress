<?php


include 'data_comments.php';

$my_comment = [];

$my_key = $_GET['slug'];
// var_dump($my_key);die();
foreach ($comments as $key => $value) {
  // var_dump($key);die();
  if ($key === $my_key) {
    $my_comment[] = $value;
  }
}

// var_dump($my_comment);die();
$json = json_encode($my_comment);
// var_dump($json);die();
echo $json;



 ?>
