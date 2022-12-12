<?php
$mysqli = new mysqli("localhost", "root", "root", "orto_db");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT price_name
FROM order_item_product WHERE prod_name = ? ORDER BY id DESC LIMIT 1";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($pn);
$stmt->fetch();
$stmt->close();
?>

<input disabled data-type="product_price" type="number" name="product_price[]" id='product_price_1'  class="form-control product_price" for="1" form="order_form"/ value="<?php echo $pn;?>">

<!-- <input disabled type="text" name="price_name[]"  class="form-control quantity" form="order_form"/ value="<?php echo $pn;?>"> -->

