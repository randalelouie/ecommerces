<?php


$indexArr = ["john doe", "BSIT", "jdoe@test.com", "bacoor, cavite"];
echo $indexArr[3];


$student = ["name" => "John Doe",
            "course" => "BSIT",
            "email" => "jdoe@test.com",
            "address" => "Bacoor, Cavite"];

//$student["address"] = "Bacoor, Cavite";
//echo json_encode($student);
//echo $student["address"];
foreach($student as $row){
    echo $row."<br>";
}



/*
$color = array();


//          0       1        2
$color = ["green", "blue", "red", "black"]; //
echo $color[2];

$color[] = "black";
echo json_encode($color);

//UPDATE ARRAY
$color[0] = "yellow";
echo json_encode()


echo json_encode($color), "<br>";
unset ($color[3]);
echo json_encode($color), "<br>";

$data = ["john doe", 23, "Bacoor, Cavite", "BSIT", "4102"];
echo json_encode($data);


//echo $color;
*/

function showname($name){
    echo "Hello there, ".$name;
}
$username = "apogi";
showname(($username);)
//showName("Adrian Pogi");




function showname($name = "",$number = 0){
    //"blank name"
    //"0"
    echo "Hello there, ".$name.", your total amount due is ".$number;
}
$amout = "3500";
showname("John Doe", $amout);

//////
function computefare($fareAmount, $discount){
    $totalfare = $totalfare * ($discount/100);
    fareamount - $totalamount - $totalDiscount;
    return $totalfare;
    //$fareAmount * ($discount/100)
    //return "inside computefare";
}

echo computefare(200,20);
//$displayValue = computefare(2,2);
//echo $displayValue;

?>