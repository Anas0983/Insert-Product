<!-- 02 start -->
<?php
include "connection.php";

// -- 06 start --
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $price = $_POST['price'];
    $detail = $_POST['detail'];

    $thumb1 = $_FILES['thumb1']['name'];
    $thumb1_tmp_name = $_FILES['thumb1']['tmp_name'];
    $thumb1_folder1 = 'img/' .$thumb1;

    $thumb2 = $_FILES['thumb2']['name'];
    $thumb2_tmp_name = $_FILES['thumb2']['tmp_name'];
    $thumb2_folder2 = 'img/' .$thumb2;

    $thumb3 = $_FILES['thumb3']['name'];
    $thumb3_tmp_name = $_FILES['thumb3']['tmp_name'];
    $thumb3_folder3 = 'img/' .$thumb3;

    $thumb4 = $_FILES['thumb4']['name'];
    $thumb4_tmp_name = $_FILES['thumb4']['tmp_name'];
    $thumb4_folder4 = 'img/' .$thumb4;

    $query = mysqli_query($conn, "INSERT INTO `products`(`name`, `price`, `detail`, `thumb1`, `thumb2`, `thumb3`, `thumb4`) VALUES ('$name','$price','$detail','$thumb1','$thumb2','$thumb3','$thumb4')") or die('query failed');
    if($query)
    {
        move_uploaded_file($thumb1_tmp_name, $thumb1_folder1);
        move_uploaded_file($thumb2_tmp_name, $thumb2_folder2);
        move_uploaded_file($thumb3_tmp_name, $thumb3_folder3);
        move_uploaded_file($thumb4_tmp_name, $thumb4_folder4);

        echo "product added successfully";

        // -- 07 start (insert product end) --
        header('location: display.php');
        // -- 07 end --
    }
    else
    {
        echo "query failed" .mysqli_error();
    }
}
// -- 06 end --

?>
<style type="text/css">
    <?php include 'style.css'; ?>
</style>
<!-- 02 end -->

<!-- 03 start -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data" class="form">
        <h1>Add Products</h1>
        <div class="input-field">
            <label for="">product name</label>
            <input type="text" name="name">
        </div>
        <div class="input-field">
            <label for="">product price</label>
            <input type="text" name="price">
        </div>
        <div class="input-field">
            <label for="">thumb1</label>
            <input type="file" name="thumb1" accept="image/jpg, image/jpeg, image/png, image/webp">
        </div>
        <div class="input-field">
            <label for="">thumb2</label>
            <input type="file" name="thumb2" accept="image/jpg, image/jpeg, image/png, image/webp">
        </div>
        <div class="input-field">
            <label for="">thumb3</label>
            <input type="file" name="thumb3" accept="image/jpg, image/jpeg, image/png, image/webp">
        </div>
        <div class="input-field">
            <label for="">thumb4</label>
            <input type="file" name="thumb4" accept="image/jpg, image/jpeg, image/png, image/webp">
        </div>
        <div class="textarea">
            <label for="">product detail</label>
            <textarea name="detail" id="" ></textarea>
        </div>
        <input type="submit" name="submit" value="add product">
    </form>
</body>
</html>
<!-- 03 end -->