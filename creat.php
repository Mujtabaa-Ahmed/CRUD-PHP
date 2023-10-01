<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="w-50 container mt-5 border-start border-primary">
    <form action="" method="POST" class="container-fluid ">
        <h1 class="text-center">Add Comment</h1>
    <div class="mb-3">
  <input type="text" name="uname" class="form-control" id="exampleFormControlInput1" placeholder="Your Name">
</div>
<div class="mb-3">
  <input type="email" name="umail" class="form-control" id="exampleFormControlInput1" placeholder="E-Mail">
</div>
<div class="mb-3">
  <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" placeholder="Your Comment" rows="3"></textarea>
</div>
<div class="text-center"><button class="w-50 btn btn-primary mb-3" type="submit" name="btn">Add</button></div>
</form>
    </div>
    <?php
    include("connection.php");
if (isset($_POST['btn'])) {
    $name = $_POST['uname'];
    $email = $_POST['umail'];
    $des = $_POST['comment'];

    $insert = "INSERT INTO `data`(`name`, `email`, `comment`) VALUES ('$name','$email','$des')";
    $add = mysqli_query($connect , $insert);
    if ($add) {
        echo "<script>alert('comment is Added')</script>";
    }else{echo "<script>alert('comment is not Added')</script>";}
}
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>