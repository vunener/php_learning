<?php
function selectProduct() {
    if ($productName == 'product1') {
        $_GET['product'] = 'product1';
        $productSelected = 'product1';
        $basePrice = 50;
    } elseif ($productName == 'product2') {
        $_GET['product'] = 'product2';
        $productSelected = 'product2';
        $basePrice = 510;
    } else {
        $productSelected = "";
        $basePrice = 0;
        echo "Please select a product to buy";
    }
    return calculatePrice($productName);
}

function calculatePrice() {
    $discountPercentage = 0.1;
    $vatPercentage = 0.15;
    $discountedAmount = $basePrice * $discountPercentage;
    $discountedBasePrice = $basePrice - $discountedAmount;
    $vatAmountCharged = $basePrice * $vatPercentage;
    $finalBasePrice = $basePrice + $vatAmountCharged - $discountedAmount;
    echo $finalBasePrice;
  }

// Valid options. A whitelist of allowed options.
$productOptions = array(
    'product1',
    'product2'
);

// Empty array by default.
$products = array();

// If the POST var "products" is a valid array.
if(!empty($_POST['products']) && is_array($_POST['products'])) {
    //Loop through the array of checkbox values.
    foreach($_POST['products'] as $product){
        //Make sure that this option is a valid one.
        if(in_array($product, $productOptions)){
            //Add the selected options to our $products array.
            $products[] = $product;
        }
    }
}

var_dump($produts);

if (isset($_POST['products'])) {
    calculatePrice();
}
include 'menu.inc';
?>
<form action="" method="post">
    <label>
        Product1
        <input type="checkbox" name="products[]" value="product1">
    </label>
    <label>
		Product2
        <input type="checkbox" name="products[]" value="product2">
    </label>
    <input type="submit" value="Submit">
</form>
<iframe src="task2.txt" height="400" width="1200">
    Your browser does not support iframes.
</iframe>
