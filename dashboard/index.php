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
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <title>ToDo'S List App!</title>
</head>

<body>

  <h1 class="text-center py-4 my-4">ToDo'S List App</h1>

  <div class="w-50 m-auto">
    <form action="../includes/data.php" method="post" autocomplete="off">
      <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" id="title" placeholder="Type Here To Add Task" Required>

      </div><br>
      <button class="btn btn-success">Add Task</button>

    </form>

  </div><br>
  <hr class="bg-dark w-50 m-auto">
  <div class="lists w-50 m-auto my-4">
    <div class="d-flex justify-content-between align-items-center">

      <h3>My Todos</h3>
      <a class="btn btn-danger btn-sm" href="../includes/clear.php" role="button">Clear All</a>
    </div>
    <div id="lists">
      <table class="table table-dark table-hover table-bordered">
        <thead>
          <tr>
            <th scope="col" name="id">S.no</th>
            <th scope="col">Title</th>
            <th>Action</th>
            <th>Completed?</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include '../includes/database.php';

          $sql = "SELECT * FROM todos WHERE uid = '$uid'";
          $result = mysqli_query($conn, $sql);

          if ($result) {
            $count = 0;
            while ($row = mysqli_fetch_assoc($result)) {
              $count++;
              $id = $row['id'];
              $title = $row['Title'];
          ?>
              <tr>
                <td><?= $count ?></td>
                <td><?= $title  ?></td>
                <td>
                  <a class="btn btn-success btn-sm" href="edit.php?id=<?= $id ?>" role="button">Edit</a>
                  <a class="btn btn-danger btn-sm" href="../includes/delete.php?id=<?= $id ?>" role="button">Delete</a>
                </td>
                <td>
                  <input type="checkbox">
                </td>

              </tr>

          <?php


            }
          }
          ?>


        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>