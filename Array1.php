<?php
    $cars = 
    [
        "Maruti" => ['white', 4, true],
        "Tata" => ['red', 6, false],
        "Toyota" => ['Grey', 4, true]
    ];

    echo "Maruti car has ".$cars['Maruti'][0] . " color. It has " . $cars['Maruti'][1] . " seats. Also, have an Air Bag[". $cars['Maruti'][2]."]";
?>