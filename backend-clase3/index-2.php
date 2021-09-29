<?php

$array1 = array(
      3=>'banana',
      1=> 'pera',
      3=> 'manzana',
);


echo '<pre>';
print_r($array1);
var_dump($array1);
echo '</pre>';

echo '<br><br>';

$array2=array(
       'uno'=>'banana',
       'dos'=>'pera',
       'cinco'=>'manzana',
       '1'=>'ppp'
);
echo '<pre>';
print_r($array2);
echo '</pre>';

echo '<br><br>';
echo 'elementos: ' .count($array2). '<br>';

echo $array2['1'].'<br>';








$array3 =array(
    'frutas' => array(
     1 => 'nanana',
      2 =>'papa',
    )



    'verduras' => array(
            'papa',
            'papapa',

            )

    );


    echo '<pre>';
    print_r($array3);
    echo '</pre>';

    echo $array3['verduras'][0];
        
