<?php

//  --------------------- For Loop ------------------

for ($i=0; $i <= 5 ; $i++) { 
    echo " $i \n";
};

// --------------------------While Loop -----------------

$a = 0;
while ($a <= 5) {
    echo "$a \n";
    $a++;
}
// -----------------------------Do while Loop ------------------
$a=0;
do { echo "$a \n";
    $a++;
    # code...
} while ($a <= 10);

// ------------------------------For each loop-------------------

// --------------------indexd array for each loop ---------------
$colors = ["red","blue","green"];

foreach ($colors as $value) { // we just convert colors variable as a $value variable
    echo " $value \n";
}

// --------------------Associative Array for each loop ---------------
$myDetails = array("name" => "arshad","age" => 22, "married" => true, "babyHave" => "no");

foreach ($myDetails as $key => $value) { //if you want to show also key then we just add 
    echo "$key = $value \n";
}

?>