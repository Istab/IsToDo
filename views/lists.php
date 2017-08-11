<html>
  <head>
     <title>IsToDo</title>
     <link rel="stylesheet" type="text/css" href="./style.css">
  <body>
    <?php include 'header.php'; ?>
  <h3 class='red-text'><?php echo $error ?></h3>
    <div class='lists'>
      <h2>Lists</h2>
      <?php include 'lists_table.php'; ?>
    </div>
  </body>
</html>
