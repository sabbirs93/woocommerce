<?php 

//rename woocommerce single product page tab

add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {
  
   $tabs['description']['title'] = __( 'Specifications' );       // Rename the description tab 
   
   $tabs['additional_information']['title'] = __( 'Ordering Information' );  // Rename the additional information tab
    
   return $tabs;
}
add_filter( 'woocommerce_product_description_heading', 'rename_product_description_heading', 10, 1 );
function rename_product_description_heading( $heading ) {
   
   return  __( 'Specifications', 'woocommerce' );
}
add_filter( 'woocommerce_product_additional_information_heading', 'rename_product_additional_information_heading', 10, 1 );
function rename_product_additional_information_heading( $heading ) {
    
   return  __( 'Ordering Information', 'woocommerce' );
}
?>
