<?php

// Include the file with our functionality to keep our markup cleaner.
require('functions.php');

// Include the markup for the header
require('header.php');

// Print out various lists
goShopping($groceries);
goShopping($clothes);

// Print the array object
echo '<pre>';
print_r($groceries);
echo '</pre>';

// Include the markup for the footer
require('footer.php');
