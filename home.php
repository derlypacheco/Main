<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Main</title>
    <?php
      include 'inc/html/header.php';  ?>
  </head>
  <body>
   <div class="wrapper">
      <?php include 'inc/html/nav.php'; ?>
      <div id="content">
        <?php include 'inc/html/nav_sub.php'; ?>
          <div class="content">
            <div class="body-content">
                <?php include 'contenido.php'; ?>
            </div>
          </div><!-- content -->
          <?php include 'inc/html/footer.php'; ?>
      </div><!-- termina warpper -->
  </div><!-- Warapper -->
    <?php include 'inc/html/scripts.php'; ?>
  </body>
</html>
