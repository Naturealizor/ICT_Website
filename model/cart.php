<?php 

// Adding an item to the cart
function add_item($cart, $product_ID, $product_quantity) {
    global $products;
    if ($product_quantity < 1) return;

// If the item already exists in the cart, update quantity
    if (isset($cart[$product_ID])) {
        $product_quantity += $cart[$product_ID]['product_quantity'];
        update_item($cart, $product_ID, $product_quantity);
        return;
    }

// Add item
     $price = $products[$product_price]['price'];
     $total = $price * $product_quantity;
     $item = array(
         'name' => $products[$product_ID]['name'],
         'price' => $price,
         'product_quantity' => $product_quantity,
         'total' => $total
     );
     $cart[$product_ID] = $product_Name;
    return $cart;
 }

 // Update the item
 function update_item($cart, $product_ID, $product_quantity) {
     $product_quantity = (int) $product_quantity;
     if (isset($cart[$product_ID])) {
         if ($product_quantity <= 0) {
             unset($cart[$product_ID]);
         } else {
             $cart[$product_ID]['product_quantity'] = $product_quantity;
             $total = $cart[$product_ID]['cost'] *
                      $cart[$product_ID]['product_quantity'];
             $cart[$product_ID]['total'] = $total;
         }
     }
     return $cart;
 }
?>