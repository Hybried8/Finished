<?php
session_start();
if (!isset($_SESSION['uid'])) header('location: ../login.php');
$uid = $_SESSION['uid'];

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/index.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <title>ToDo'S List App!</title>
</head>

<body>
  <h1 class="text-center py-4 my-4">Update Your ToDo</h1>

  <?php
  include '../includes/database.php';
  if (!isset($_GET['id'])) header('location: ../dashboard/');
  $id = $_GET['id'];

  $sql = "SELECT * FROM todos WHERE id='$id' AND uid='$uid'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) < 1 || !$result) header('location: ../dashboard/');

  $row = mysqli_fetch_assoc($result);
  $title = $row['Title'];


  ?>
  <div class="w-50 m-auto">
    <form action="../includes/editaction.php" method="post" autocomplete="off">
      <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" id="title" value="<?php global $title;
                                                                                echo $title ?>" placeholder="Edit Here Your ToDo'S" Required>
        <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
      </div><br>
      <button role="form" class="btn btn-success">Update Task</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>