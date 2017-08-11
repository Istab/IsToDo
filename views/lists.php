<html>
  <head>
     <title>IsToDo</title>
     <link rel="stylesheet" type="text/css" href="./style.css">
  <body>
    <?php include 'header.php'; ?>

    <!-- Errors are display in the next h3 tag -->
    <h3 class='red-text'><?php echo $error ?></h3>

    <div class='list-details'>
      <?php include 'list_details.php'; ?>
    </div>
    <div class='lists'>
      <h2>Lists</h2>
      <?php include 'lists_table.php'; ?>
    </div>
  </body>
</html>
