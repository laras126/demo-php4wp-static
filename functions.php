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

    if ( is_array($value) ) {

      // If the value is an array, loop through and echo it.
      // Alternative syntax with colon and endforeach.
      foreach ($value as $val):

        // Now, how not have after the last one in the list?
        // There are many ways, and I don't feel like figuring it out. WordPress usually handles this.
        // http://stackoverflow.com/questions/2435216/how-to-create-comma-separated-list-from-array-in-php
        echo $val . ', ';

      endforeach;

    } else {

      // Otherwise, just print the single value.
      echo $value;

    }
    // Create a break between each list item
    echo '<br>';
  }
}

