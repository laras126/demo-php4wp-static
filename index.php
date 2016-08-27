<?php

require('functions.php');

goShopping($groceries);
goShopping($clothes);

echo '<pre>';
print_r($groceries);
echo '</pre>';
