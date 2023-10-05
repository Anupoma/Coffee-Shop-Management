<?php
include "./config.php";

if (isset($_POST["upload"])) {
   $name = $_POST['name'];
   $price = $_POST['price'];

   $sql = "INSERT INTO `item`(`id`, `name`,`price`) VALUES (NULL,'$name','$price')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: operation1.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPanel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="conatiner-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="./Admin.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                           <h3>Admin Panel</h3> 
                    </div> 
                    <div class="mb-3">
                      Name : 
                      <input type="text" class="form-control" name = "name">
                      
                    </div>
                    <div class="mb-3">
                      Price :
                      <input type="text" class="form-control" name="price">
                    </div>
                    <!-- <div class="mb-3">
                      Image :
                      <input type="file" class="form-control" name="image">
                    </div> -->
                    
                    <button type="submit" class="btn btn-primary col-12" name="upload">upload</button>
                </form>
            </div>
        </div>
</body>
</html>