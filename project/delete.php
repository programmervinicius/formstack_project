<?php
    require 'db.php';
    $pk = 0;
     
    if ( !empty($_GET['pk'])) {
        $pk = $_REQUEST['pk'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $pk = $_POST['pk'];
         
        // delete data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM users  WHERE pk = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($pk));
        Database::disconnect();
        header("Location: index.php");
         
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="view/css/bootstrap.min.css" rel="stylesheet">
    <script src="view/js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Delete a User</h3>
                    </div>
                     
                    <form class="form-horizontal" action="delete.php" method="post">
                      <input type="hidden" name="pk" value="<?php echo $pk;?>"/>
                      <p class="alert alert-error">Are you sure to delete ?</p>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-danger">Yes</button>
                          <a class="btn" href="index.php">No</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>