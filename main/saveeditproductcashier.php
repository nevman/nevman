<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['code'];
$z = $_POST['gen'];
$b = $_POST['name'];
$c = $_POST['cont'];
$m = $_POST['s_product'];
//$c = $_POST['exdate'];
//$d = $_POST['price'];
$e = $_POST['supplier'];
$f = $_POST['qty'];
//$g = $_POST['o_price'];
//$h = $_POST['profit'];
$i = $_POST['date_arrival'];
$j = $_POST['sold'];
// query
$sql = "UPDATE products 
        SET product_code=?, gen_name=?, product_name=?, container=?, s_product=?, supplier=?, qty=?, date_arrival=?, qty_sold=?
		WHERE product_id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$z,$b,$c,$m,$e,$f,$i,$j,$id));
header("location: products.php");

?>