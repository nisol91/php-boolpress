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

       //-- visualizza data e ora
       include 'php/data_ora.php';
       $new_post_tag = [];
       $my_tag = $_GET['mio_tag'];
       foreach ($new_data as $value) {
         if (in_array($my_tag, $value['tag'])) {
           $new_post_tag[] = $value;
         }
       }

       $url = 'http://localhost/boolpress/post_detail.php?slug=';

     ?>
     <div class="container">
       <div class="input_c">
         <form class="" action="http://localhost/boolpress/php/ricerca_tag.php" method="get">
           <label for="mio_tag">Ricerca per tag</label>
           <input type="text" placeholder="inserisci tag" name="mio_tag">
           <input type="submit" name="" value="Search">
         </form>
       </div>
       <div class="bacheca">
         <?php foreach ($new_post_tag as $value) {?>
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
