<?php

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

$clothes = array(
            'shoes' => 'sneakers',
            'top' => 't-shirt',
            'bottom' => 'slacks',
            'accessory' => 'watch'
          );


function goShopping($arr) {
  foreach ($arr as $type => $value) {

    echo '<strong>' . $type . ':</strong> ';

    if ( is_array($value) ) {
      foreach ($value as $val) {
        echo $val . ', ';
      }
    } else {
      echo $value;
    }
    echo '<br>';
  }
}
