<?php

/*
Plugin Name: Remove Product Count
Plugin URI: https://github.com/nwcybersolutions/Remove-WooProduct/Count
Description: Removes Product Count From Catagories and Sub Catagories
Author: Northwest Cyber Solutions
Author URI: https://nwcybersolutions.com
Version: 1.0.0
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: Remove Product Count
Domain Path: /languages
*/

add_filter( 'woocommerce_subcategory_count_html', 'woo_remove_category_products_count' );

function woo_remove_category_products_count() {
  return;
}
