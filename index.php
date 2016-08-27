<?php

// Include the file with our functionality to keep our markup cleaner.
require_once('functions.php');

// Include the markup for the header
require_once('header.php');

// Print out various shopping lists with our goShopping function
goShopping($groceries);
goShopping($clothes);

// Print the array object
echo '<pre>';
print_r($groceries);
echo '</pre>';

// Include the markup for the footer
require_once('footer.php');
