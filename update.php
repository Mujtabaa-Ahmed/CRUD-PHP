<?php
    include("connection.php");
    $forUpdate = $_GET['updateid'];
    $select = "SELECT * FROM `data` WHERE `data`.`id` = $forUpdate";
    $run = mysqli_query($connect , $select);
    $data = mysqli_fetch_assoc($run);





if (isset($_POST['btn'])) {
    $name = $_POST['uname'];
    $email = $_POST['umail'];
    $des = $_POST['comment'];

    $update = "UPDATE `data` SET `name`='$name',`email`='$email',`comment`='$des' WHERE `data`.`id` = $forUpdate";
    $add = mysqli_query($connect , $update);
    if ($add) {
        header("location:reade.php");
    }else{echo "<script>alert('comment is not Added')</script>";}
}
    ?>



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
  <input type="text" name="uname" class="form-control "value="<?php echo $data['name']?>" id="exampleFormControlInput1" placeholder="Your Name">
</div>
<div class="mb-3">
  <input type="email" name="umail" class="form-control"value="<?php echo $data['email']?>" id="exampleFormControlInput1" placeholder="E-Mail">
</div>
<div class="mb-3">
  <input class="form-control" name="comment" value="<?php echo $data['comment']?>" id="exampleFormControlTextarea1" placeholder="Your Comment" rows="3">
</div>
<div><button class="w-100 btn btn-primary mb-3" type="submit" name="btn">Add</button></div>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>