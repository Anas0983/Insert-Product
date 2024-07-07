<!-- 01 start (insert product start) -->
<?php
$conn = mysqli_connect('localhost','root','','card'); // 'card' database ka name card he is lye yha card likha he
if(!$conn)
{
    die('sorry we failed to connect' .mysqli_connect_error());
}
else
{
    //echo "connected successfully"; // 05 me ise cmnt krdege
}
?>
<!-- 01 end -->