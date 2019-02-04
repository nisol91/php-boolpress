<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<!-- ********************* -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <title></title>
  </head>
  <body>
    <?php
    include 'data.php';

    //-- visualizza data e ora

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

    $url = 'http://localhost/boolpress/post_detail.php?slug=';

     ?>
    <div class="container">
      <div class="bacheca">
        <?php foreach ($new_data as $value) {?>
          <div class="title">
          <a href="<?php echo $url.$value['slug'] ?>"><h1><?php echo $value['title'] ?></h1></a>
            <h3><?php echo 'Published: '.$value['published_at'] ?></h3>
          </div>
        <h2><?php echo substr($value['content'], 0, 150).'...' ?></h2>
      <?php } ?>
      </div>
    </div>
  </body>
</html>
