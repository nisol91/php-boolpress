<?php

include 'data_comments.php';

$my_comments = $_GET['slug'];

$comments_array = [];

foreach ($comments as $key => $value) {
  if ($key === $my_comments) {
    $comments_array[] = $value;
  }
}

$json = json_encode($comments_array);
echo $json;

 ?>
