<!-- 11 start (view inner product start) -->
<?php
include 'connection.php';
?>
<style type="text/css">
    <?php include 'style.css'; ?>
</style>
<!-- 11 end -->

<!-- 12 start -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="product-detail">
        <?php
        if(isset($_GET['pid']))
        {
            $pid = $_GET['pid'];
            $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE id = '$pid'") or die('query failed');
            if(mysqli_num_rows($select_products) > 0)
            {
                while($fetch_products = mysqli_fetch_assoc($select_products))
                {

        ?>
        <div class="popup-card">
            <div class="popup-card-detail">
                <div class="popup-img">
                    <figure>
                        <img src="img/<?php echo $fetch_products['thumb1']; ?>" id="mainImage" alt="">
                    </figure>
                    <div class="thumb-list">
                        <ul>
                            <li><img src="img/<?php echo $fetch_products['thumb1']; ?>" id="thumb1" alt=""></li>
                            <li><img src="img/<?php echo $fetch_products['thumb2']; ?>" id="thumb2" alt=""></li>
                            <li><img src="img/<?php echo $fetch_products['thumb3']; ?>" id="thumb3" alt=""></li>
                            <li><img src="img/<?php echo $fetch_products['thumb4']; ?>" id="thumb4" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="info">
                    <span>Featured - Design</span>
                    <h2>The service Desisign Provide</h2>
                    <h3>price <span><?php echo $fetch_products['price']; ?></span></h3>
                    <p><?php echo $fetch_products['detail']; ?></p>
                    <a href="" class="btn">add to cart <i class="bi bi-cart-check-fill"></i></a>
                    <a href="" class="btn">add to wishlist <i class="bi bi-heart-fill"></i></a>
                </div>
            </div>
        </div>
        <?php
                }
            }
        }
        ?>
    </section>

    <!-- 14 start javascript -->
    <script type="text/javascript">
        const mainImage = document.querySelector('#mainImage'),

        thumb1 = document.querySelector('#thumb1'),
        thumb1Src = document.querySelector('#thumb1').src,

        thumb2 = document.querySelector('#thumb2'),
        thumb2Src = document.querySelector('#thumb2').src,

        thumb3 = document.querySelector('#thumb3'),
        thumb3Src = document.querySelector('#thumb3').src,

        thumb4 = document.querySelector('#thumb4'),
        thumb4Src = document.querySelector('#thumb4').src;

        thumb1.addEventListener('click', ()=>{mainImage.src = thumb1Src})
        thumb2.addEventListener('click', ()=>{mainImage.src = thumb2Src})
        thumb3.addEventListener('click', ()=>{mainImage.src = thumb3Src})
        thumb4.addEventListener('click', ()=>{mainImage.src = thumb4Src});
    </script>
    <!-- 14 end -->
</body>
</html>
<!-- 12 end -->
