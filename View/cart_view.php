<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    
    <!-- <style>
    </style> -->

</head>

<body>
    <h1>Shopping Cart</h1>
    <main>
    <h2>Your orders</h2><hr>
      <?php if (empty($_SESSION['cart']) || count($_SESSION['cart']) == 0) : ?>
          <p>Your cart is empty.</p>
      <?php else: ?>
          <form action="." method="post">
              <input type="hidden" name="action" value="update">
              <table>
                  <tr id="cart_header">
                      <th class="left">Item</th>
                      <th class="right">Item Cost</th>
                      <th class="right">Quantity</th>
                      <th class="right">Item Total</th>
                  </tr>
                  <?php foreach($_SESSION['cart'] as $key => $item) :
                    $price = number_format($item['price'], 2);
                    $total = number_format($item['total'], 2);
                  ?>
                      <tr>
                          <td>
                              <?php echo $item['product_Name']; ?>
                          </td>
                          <td class="right">
                              <?php echo $price; ?>
                          </td>
                      <td class="right">
                        <input type="text" class="cart_qty"
                            name="newqty[<?php echo $key; ?>]"
                            value="<?php echo $item['qty']; ?>">
                    </td>
                    <td class="right">
                        $<?php echo $total; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
                <tr id="cart_footer">
                    <td colspan="3"><b>Subtotal</b></td>
                <td>$<?php echo get_subtotal(); ?></td>
                </tr>
                <tr>
                    <td colspan="4" class="right">
                        <input type="submit" value="Update Cart">
                    </td>
                </tr>
            </table>
            <p>Click "Update Cart" to update quantities in your
                cart. Enter a quantity of 0 to remove an item.
            </p>
            </form>
        <?php endif; ?>
        <p><a href=".?action=show_add_item">Add Item</a></p>
        <p><a href=".?action=empty_cart">Empty Cart</a></p>
</main> 
</body>

</html>

<?php include('footer.php') ?>