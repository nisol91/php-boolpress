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

      // include 'php/comments.php';

      include 'php/data_ora.php';

      //-- scelgo il post con lo slug corretto

      $query_ = $_GET['slug'];
      $tags = $_GET['tag'];
      $my_tag_url = 'http://localhost/boolpress/post_detail.php?tag=';

      $new_post = [];
      foreach ($new_data as $value) {
        if (empty($tags)) {
          if ($value['slug'] === $query_) {
            $new_post[] = $value;
          }
        } else {
          if (in_array($tags, $value['tag'])) {
            $new_post[] = $value;
          }
        }
      }

    ?>
    <div class="container">
      <div class="templates">
        <div class="com">
          <div class="top">
            <h1></h1>
            <h2></h2>
          </div>
          <h3></h3>
        </div>
      </div>
      <div class="bacheca_2">
        <?php foreach ($new_post as $value) {?>
          <div class="title">
            <h1><?php echo $value['title'] ?></h1>
            <h3><?php echo $value['published_at'] ?></h3>
          </div>
          <div class="img_text">
            <img src="<?php echo $value['image']; ?>" alt="">
            <h2><?php echo $value['content']; ?></h2>
          </div>
          <div class="tag">
            <h2>Tag:</h2>
            <?php foreach ($value['tag'] as $value) { ?>
            <a href="<?php echo $my_tag_url.$value ?>"><h3><?php echo $value; ?></h3></a> <?php } ?>
          </div>
      <?php }; ?>
      </div>
      <div class="comments">
        <h4>Comments</h4>
      </div>
    </div>
    <script src="js/script.js"></script>
  </body>
</html>
