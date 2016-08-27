<?php

$groceries = array(
              'veggie' => 'carrot',
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
    echo '<strong>' . $type . ':</strong> ' . $value . '<br>';
  }
}
