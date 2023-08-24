<?php 
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);

         
// Student JSON data
$jsondata = 
'[
 {"student":"sravan kumar","age":22,"subject":"java"},
 {"student":"ojaswi","age":21,"subject":"java"},
 {"student":"rohith","age":22,"subject":"dbms"},
 {"student":"bobby","age":22,"subject":"sql1"}]';
 
// Decode json data and convert it
// into an associative array
// $jsonans = json_decode($jsondata, true);
 
// // CSV file name => geeks.csv
// $csv = 'geeks.csv';
 
// // File pointer in writable mode
// $file_pointer = fopen($csv, 'w');
 
// // Traverse through the associative
// // array using for each loop
// foreach($jsonans as $i){
    
//   // Write the data to the CSV file
//   fputcsv($file_pointer, $i);
// }
 
// // Close the file pointer.
// fclose($file_pointer);



header('Content-type: text/plain; charset=UTF-8');

//$file = "student.json";

// $file = json_decode($jsondata, true);
// $json = file_get_contents($jsondata);

$fcsv = fopen('student1.csv', 'w');
$array = json_decode($jsondata, true);

// echo "<pre>";
// print_r($array);
// echo "/<pre>";

// die();



$csv = '';

$header = false;
foreach ($array as $line) {	
    if (empty($header)) {
        $header = array_keys($line);

       // print_r($header);

        fputcsv($fcsv, $header);

       // $header = array_flip($header);	

       // print_r($header);
    }
	
	$line_array = array();
	
	foreach($line as $value) {
		array_push($line_array, $value);
	}

     print_r($line_array);

    fputcsv($fcsv, $line_array);
}

//echo "<pre>";
// print_r($arrfcsvay);
//echo "/<pre>";

// die();




//close CSV file after write
fclose($fcsv);




?>