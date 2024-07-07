<!-- 08 strat (Show product start) -->
<?php
include 'connection.php';
?>
<style type="text/css">
    <?php include 'style.css'; ?>
</style>
<!-- 08 end -->

<!-- 09 start -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="product.php" class="add">+</a>
    <section class="show-products">
        <div class="box-container">
            <?php
            $select_products=mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
            if(mysqli_num_rows($select_products) > 0)
            {
                while ($fetch_products = mysqli_fetch_assoc($select_products))
                {
            ?>
            <div class="box">
                <a href="view_detail.php?pid=<?php echo $fetch_products['id']; ?>" class="add"><i class="bi bi-eye-fill"></i></a>
                <img src="img/<?php echo $fetch_products['thumb1']; ?>">
                <div class="heading">
                    <h2><?php echo $fetch_products['name']; ?></h2>
                    <h2>Price <span><?php echo $fetch_products['price']; ?>/-</span></h2>
                </div>
            </div>
            <?php
                }
            }
            ?>
        </div>
    </section>
</body>
</html>
<!-- 09 end -->