<?php 

// Adding an item to the cart
function add_item($cart, $key, $qty) {
    global $products;
    if ($qty < 1) return;

// If the item already exists in the cart, update quantity
    if (isset($cart[$key])) {
        $product_qty += $cart[$key]['qty'];
        update_item($cart, $key, $qty);
        return;
    }

// Add item
     $price = $products[$key]['price'];
     $total = $price * $qty;
     $item = array(
         'name' => $products[$key]['name'],
         'cost' => $cost,
         'qty' => $qty,
         'total' => $total
     );
     $cart[$key] = $item;
    return $cart;
 }

 // Update the item
 function update_item($cart, $key, $qty) {
     $qty = (int) $qty;
     if (isset($cart[$key])) {
         if ($qty <= 0) {
             unset($cart[$key]);
         } else {
             $cart[$key]['qty'] = $qty;
             $total = $cart[$key]['cost'] *
                      $cart[$key]['qty'];
             $cart[$key]['total'] = $total;
         }
     }
     return $cart;
 }
?>