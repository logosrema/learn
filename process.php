<?php
$conn = mysqli_connect("localhost", "root", "", "bettest");

// Load the JSON data from the file
$json = file_get_contents('data.json');
// // Convert the JSON data into a PHP object
$array = json_decode($json,true);
// //  $rootID = array_keys($data)[2];
// //  echo $rootID;
// echo "<pre>";
// var_dump($data);

foreach ($array as $key => $value) {
    //  echo "<pre>";
    //  print_r($value['sample']);

     $sample = json_encode($value['sample']);
     $rows = intval($value['rows']);
     $start = intval($value['start']);
     $end = intval($value['end']);
     $columnSelection = $value['columnSelection'];
     $rowSelection = $value['rowSelection'];
     $showRowName = $value['showRowName'];
    $startingPoint = intval($value['startingPoint']);
    $endingPoint = $value['endingPoint'];
    $sql = "UPDATE game_name SET 
    row = '{$rows}',
    start = '{$start}', 
    end = '{$end}',
    columnSelection = '{$columnSelection}',
    rowSelection = '{$rowSelection}',
    showRowName = '{$showRowName}',
    startingPoint = '{$startingPoint}',
    endingPoint = '{$endingPoint}',
    sample = '{$sample}'
     WHERE gn_id = '$key'";
     mysqli_query($conn,$sql);
    
    
}

echo "Records updated successfully";
// // Access the object properties
// echo $data->name; // Output: John Doe
// echo $data->age; // Output: 30
// echo $data->email; // Output: johndoe@example.com
?>
