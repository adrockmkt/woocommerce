// Clear cart and update

add_filter( 'woocommerce_add_cart_item_data', 'wdm_empty_cart', 10,  3);

function wdm_empty_cart( $cart_item_data, $product_id, $variation_id ) 
{

    global $woocommerce;
    $woocommerce->cart->empty_cart();

    // Do nothing with the data and return
    return $cart_item_data;
}
