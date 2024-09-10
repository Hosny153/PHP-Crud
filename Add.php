<?php 
include "Config.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];

    $sql = "INSERT INTO `element` (name,description,price) values ('$name' , '$description' ,'$price')";
    $result = mysqli_query($Conn,$sql);
    if($result){
        echo '<div class="alert alert-success" role="alert">
        Product added successfully </div>';
    }else{
        die(mysqli_error($Conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="mt-5">Add New Product</h2>
        <form method="Post" novalidate>
        <div class="mb-3">
            <label class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" autocomplete="off">
        </div>
        <div class="mb-3">
            <label  class="form-label">Description:</label>
            <input type="text" name="description" class="form-control" autocomplete="off">
        </div>
        <div class="mb-3">
            <label  class="form-label">Price:</label>
            <input name="price" type="number" class="form-control" autocomplete="off">
        </div>
        <button type="submit" class="btn btn-success" name="submit">Add Product</button>
        <br>
        <a class="btn btn-secondary mt-3 " href="Home.php" role="button">Back to product list</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>