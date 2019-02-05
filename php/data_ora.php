<?php
include 'data.php';

foreach ($posts as $key => $value) {
  $date = substr($value['published_at'], 0, 10);
  $date_mod = str_replace('/', '-', $date);
  $time = substr($value['published_at'], 10, 20);
  $new_time = date("H", strtotime($time));
  $new_date = date("d-M", strtotime($date_mod));
  //in alternativa potevo usare DateTime::createFromFormat.
  $value['published_at'] = $new_date. ' at ' .$new_time;
  $new_data[] = $value;
}
?>
