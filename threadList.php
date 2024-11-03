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
$id = $_GET['catid'];
$sql = "SELECT * FROM `categories` WHERE category_id = $id";
  $result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_assoc($result)){
    $catname = $row['category_name'];
    $catdesc = $row['category_description'];
    $catimage = $row['image'];
  }
?>

  <div class="container">
    <div class="container">
      <div class="container my-5">
        <div class="p-5 text-center bg-body-tertiary rounded-3">
          <img class="bi mt-4 mb-3" style="color: var(--bs-indigo);" width="100" height="100"
            src="<?php echo $catimage ?>" alt="">
          <h1 class="text-body-emphasis">Welcome to <?php echo $catname ?> Forum</h1>
          <p class="col-lg-8 mx-auto fs-5 text-muted">
            <?php echo $catdesc ?>
            <br> Welcome to our community forum! Here, we encourage respectful discussions, knowledge sharing, and
            active participation. Join us to connect, <br> share ideas, and explore topics that matter—all in a
            welcoming, well-moderated space designed for everyone.
          </p>
          <div class="d-inline-flex gap-2 mb-5">
            <button class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="button">
              Learn more About us
              <svg class="bi ms-2" width="24" height="24">
                <use xlink:href="#arrow-right-short"></use>
              </svg>
            </button>
            <button class="btn btn-outline-secondary btn-lg px-4 rounded-pill" type="button">
              Back to Home
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <h2 class="my-4">Browse Questions</h2>

      <?php
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
          <h5 class="mt-0"><a href="thread.php?threadid=' . $id . '">'. $title .'</a></h5>
          '. $desc .'
        </div>
      </div>';

    }
  ?>
      <!-- remove later -->
      <!-- <div class="d-flex my-3">
        <div class="flex-shrink-0">
          <img height="55" src="image/user.jpg" alt="...">
        </div>
        <div class="flex-grow-1 ms-3">
          <h5>This is my problem someone resolve it.</h5>
          This is some content from a media component. You can replace this with any content and adjust it as needed.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi asperiores possimus dolorem rem obcaecati.
          Veniam culpa eum reprehenderit, temporibus commodi, veritatis mollitia pariatur nobis fugiat vel delectus at a
          magni?
        </div>
      </div> -->

    </div>
  </div>
  <?php include 'partials/_footer.php';?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>