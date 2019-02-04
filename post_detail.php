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

    //-- scelgo il post con lo slug corretto

    $query_ = $_GET['slug'];
    $new_post = [];
    foreach ($posts as $value) {
      if ($value['slug'] === $query_) {
        $new_post[] = $value;
      }
    }
    // var_dump($new_post);die();
     ?>
    <div class="container">
      <div class="bacheca_2">
        <?php foreach ($new_post as $value) {?>
          <div class="title">
          <a href="<?php echo $url.$value['slug'] ?>"><h1><?php echo $value['title'] ?></h1></a>
            <h3><?php echo $value['published_at'] ?></h3>
          </div>
          <div class="img_text">
            <img src="<?php echo $value['image']; ?>" alt="">
            <h2><?php echo $value['content']; ?></h2>
          </div>
      <?php } ?>
      </div>
    </div>
  </body>
</html>
