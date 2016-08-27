<?php

/*
 *
 * Define some shopping lists
 *
 */

// A single dimension array
$clothes = array(
            'shoes' => 'sneakers',
            'top' => 't-shirt',
            'bottom' => 'slacks',
            'accessory' => 'watch'
          );

// A multidimensional array
$groceries = array(
              'veggies' => array(
                  'beets',
                  'carrots',
                  'tomatoes'
                ),
              'fruit' => 'apple',
              'sweet' => 'chocolate',
              'meat' => 'lamb'
            );

// A function to echo various shopping lists
function goShopping($arr) {

  // Loop through the array that has been passed to the function
  foreach ($arr as $type => $value) {

    // Print the type, or key, of the array
    echo '<strong>' . $type . ':</strong> ';

    // We need to account for the multidimensional array
    // Check if the value is an array
    if ( is_array($value) ) {

      // We want a comma separated list. There are many ways to do this in PHP.
      // http://stackoverflow.com/questions/2435216/how-to-create-comma-separated-list-from-array-in-php

      // This is the method I copied (yes, I did) from this post. You could also use a foreach loop as in the other answers.

      // Here we manipulate the array object. I don't 100% understand how this works, but it does! And I've copy-pasted responsibly, removing the rtrim because it wasn't needed.
      $string = implode(', ', $value);
      echo $string;

    } else {

      // Otherwise, just print the single value.
      echo $value;

    }

    // Create a break between each list item
    echo '<br>';
  }
}

