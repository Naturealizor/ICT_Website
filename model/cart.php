<?php 

// Adding an item to the cart
function add_item($product_ID, $product_qty) {
    global $products;
    if ($product_qty < 1) return;

// If the item already exists in the cart, update quantity
    if (isset($_SESSION['cart12'][$product_ID])) {
        $product_qty += $_SESSION['cart12'][$product_ID]['qty'];
        update_item($product_ID, $product_qty);
        return;
    }

// Add item
    $price = $products[$]
}

?>