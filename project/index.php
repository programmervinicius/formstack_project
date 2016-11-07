<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="view/css/bootstrap.min.css" rel="stylesheet">
    <script src="view/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
            <div class="row">
                <h3>FormStack Project</h3>
            </div>
            <div class="row">
                <p>
                    <a href="create.php" class="btn btn-success">New User</a>
                </p>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'db.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM users';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['firstname'] . '</td>';
                            echo '<td>'. $row['lastname'] . '</td>';
                            echo '<td>'. $row['email'] . '</td>';
                            echo '<td>'. $row['pass'] . '</td>';
                            echo '<td width=250>';
                            echo '<a class="btn" href="read.php?pk='.$row['PK'].'">Read</a>';
                            echo ' ';
                            echo '<a class="btn btn-success" href="update.php?pk='.$row['PK'].'">Update</a>';
                            echo ' ';
                            echo '<a class="btn btn-danger" href="delete.php?pk='.$row['PK'].'">Delete</a>';
                            echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
            </table>
        </div>
    </div> <!-- /container -->
  </body>
</html>