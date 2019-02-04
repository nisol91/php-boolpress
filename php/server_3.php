<?php

//ricerca tags

  include 'data.php';

  $tag = $_GET['tag'];
  // var_dump($tag);die();

  $new_arr = [];
  foreach ($posts as $value) {
    $my_tag = $value['tag'];
    // var_dump($my_tag);die();
    if (in_array($tag, $my_tag)) {
      $new_arr[] = $value;
      // var_dump($my_tag);
    }
  };

  $json_3 = json_encode($new_arr);
  // var_dump($json_3);
  echo $json_3;
?>
