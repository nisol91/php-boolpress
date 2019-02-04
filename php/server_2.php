
<?php


//visualizzazione post singolo

  include 'data.php';
  $query_ = $_GET['slug'];
  // var_dump($query_);
  $new_post = [];
  foreach ($posts as $value) {
    // $slug = $value['slug'];
    // var_dump($slug);
    // var_dump($value);die();
    if ($value['slug'] === $query_) {
      $new_post[] = $value;
    }
  }

  // var_dump($new_post);
  $json_2 = json_encode($new_post);
  // var_dump($json_2);die();
  echo $json_2;
 ?>
