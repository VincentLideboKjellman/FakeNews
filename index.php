<?php
declare(strict_types=1);
require __DIR__.'/data.php';
require __DIR__.'/functions.php';


$siteName = "Fake News";

//Sorts the array by comparing the PublisherDate in Articles array.
$sortedArticles = $articles;
usort($sortedArticles, "compareDate");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Cinzel|Montserrat" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>
</head>
<body>

  <!--------------------------------------------------------------------->
  <!-- Page Content -->
  <!--------------------------------------------------------------------->
  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <!-- Blog Entries Column -->
      <div class="col-md-6" align="center">
        <h1 class="my-4">Fake News</h1>
        <!--------------------------------------------------------------------->
        <!-- Blog Post -->
        <!--------------------------------------------------------------------->
        <?php foreach ($sortedArticles as $article): ?>
          <div class="card mb-4">
            <img class="card-img-top" src="<?php echo $article['img']?>" alt="asd" width='750px' height='300px'>
            <div class="card-body card-edit">
              <h2 class="card-title"><?php echo $article['title'];?></h2>
              <p class="card-text"><?php echo $article['content']; ?></p>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo $article['publisherDate'];?> by
              <?php foreach ($authors as $author): ?>
                <?php if ($author['id'] === $article['authorId']): ?>
                  <a href="#"><?php echo $author['name']  ?></a>
                <?php endif; ?>
              <?php endforeach; ?>
              <p>Likes: <?php echo $article['likeCounter'] ?> 💛</p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php


   ?>
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; <?php echo $siteName.' 2018' ?></p>
    </div>
    <!-- /.container -->
  </footer>
</body>
</html>
