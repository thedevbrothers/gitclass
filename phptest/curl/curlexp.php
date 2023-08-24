<?php 


// Generated by curl-to-PHP: https://api.github.com/octocat
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://restcountries.com/v3.1/all');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

curl_close($ch);

$result = json_decode($result);



 


    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";

    $charCounts = array();


    foreach($result as $key => $val){

        // echo "<pre>";
        // print_r($val->region);
        // echo "</pre>";

        if (isset($charCounts[$val->region])) {
            $charCounts[$val->region]++;
        } else {
            $charCounts[$val->region] = 1;
        }



    }


    echo "<pre>";
        print_r($charCounts);
        echo "</pre>";  


   // Output the character counts
foreach ($charCounts as $char => $count) {
    echo "Character '$char' occurs $count times in the string.<br>";
}




?>
