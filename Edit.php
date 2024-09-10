<?php
include "Config.php";

$id=$_GET['updateid'];
$sql = "SELECT * FROM `element`  WHERE id=$id ";
$result = mysqli_query($Conn, $sql);
$row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $description = $row['description'];
    $price = $row['price'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];

    $sql = "UPDATE `element` SET id='$id',`name`='$name',`description`='$description',`price`='$price' WHERE id=$id ";
    $result = mysqli_query($Conn,$sql);
    if($result){
        echo '<div class="alert alert-success" role="alert">
        Update successfully </div>';
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
        <h2 class="mt-5">Edit Product</h2>
        <form method="POST" novalidate>
        <div class="mb-3">
            <label class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" autocomplete="off" value="<?php echo $name; ?>" > 
        </div>
        <div class="mb-3">
            <label  class="form-label">Description:</label>
            <input type="text" class="form-control" name="description" autocomplete="off"value="<?php echo $description; ?>" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Price:</label>
            <input type="number" class="form-control" name="price" autocomplete="off" value="<?php echo $price; ?>" >
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Save Changes</button>
        <br>
        <a class="btn btn-secondary mt-3 " href="Home.php" role="button">Back to product list</a>
        </form>
    </div