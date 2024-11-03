<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Discuss - Coding Forums</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <?php include 'partials/_header.php';?>
  <?php include 'partials/_dbconnect.php';?>
  <?php
$id = $_GET['threadid'];
$sql = "SELECT * FROM `threads` WHERE thread_id = $id";
  $result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_assoc($result)){
    $title = $row['thread_title'];
    $desc = $row['thread_desc'];

  }
?>

  <div class="container mt-4">
    <div class="container mt-4">
      <div class="col-md-12">
        <div class="h-150 p-5 bg-dark text-light border rounded-3">
          <h2> <?php echo $title ?> </h2> <hr>
          <p> <?php echo $desc ?> </p>
          <p class="mt-4"><b>Posted by : Ritikk </b></p>
          <!-- <button class="btn btn-outline-success" type="button">Posted by : Ritik</button> -->
        </div>
      </div>
    </div>
    <div class="container">
      <h2 class="my-4">Discussions</h2>

      <!-- <?php
        $id = $_GET['catid'];
        $sql = "SELECT * FROM `threads` WHERE `thread_cat_id` = $id";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
          $id = $row['thread_id'];
          $title = $row['thread_title'];
          $desc = $row['thread_desc'];
          
      echo '<div class="d-flex my-3">
        <div class="flex-shrink-0">
          <img height="55" src="image/user.jpg" alt="...">
        </div>
        <div class="flex-grow-1 ms-3">
          <h5 class="mt-0"><a href="thread.php">'. $title .'</a></h5> 
          '. $desc .'
        </div>
      </div>';

    }
  ?> -->

    </div>
  </div>
  <?php include 'partials/_footer.php';?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>