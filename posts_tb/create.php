
<?php
require_once 'func.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Read posts_tb </title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/bootstrap-3.3.7-dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/bootstrap-3.3.7-dist/css/jumbotron-narrow.css">
    <script src="<?php echo BASE_URL; ?>/bootstrap-3.3.7-dist/js/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  </head>

  <body>
    <div class='container'>
      <div class='col-sm-1'></div>
      <div class='col-sm-10'>
        <div class='panel panel-info'>
          <div class='panel-heading'>Form Input posts_tb </div>
          <div class='panel-body'>
          <form action='func.php' method='POST'>
          
              <div class="form-group">
                <label for="title"> title:</label>
                <input type="text" class="form-control" id="title" name='title' placeholder='title'>
              </div>
              <div class="form-group">
                <label for="content"> content:</label>
                <input type="text" class="form-control" id="content" name='content' placeholder='content'>
              </div>
              <div class="form-group">
                <label for="createdBy"> createdBy:</label>
                <input type="text" class="form-control" id="createdBy" name='createdBy' placeholder='createdBy'>
              </div><input type='submit' name='insert' value='Save' class='btn btn-sm btn-primary'>
          </form>
          </div>
        </div>
      </div>
      <div class='col-sm-1'></div>
    </div>
  </body>
</html>

