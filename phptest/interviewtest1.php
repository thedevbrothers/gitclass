<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>


<?php 

    $inputArr=['001','009','00A','002','010','019','01a','012','222'];
    $outoutArr=[];
    // $hex = '00a'; 
    // $a= base_convert($hex,36,10);
    // echo $a."<br>";
    // $b =base_convert($a+1,10,36);
    // echo $b."<br>";;
 
    function convertOutput($code){

       

        $hex = strtoupper($code); 
        $a = strtoupper($code); 
       // $a= base_convert($hex,36,10);
        $b =base_convert($hex+1,10,36);


          

        return $a.'~'.$b; 
    }
  
    foreach($inputArr as $val){

        $convertedOutput = convertOutput($val,$tableHtml);

        array_push($outoutArr, $convertedOutput);

        //print_r($convertedOutput);

       /// die;
 
     }

print_r($outoutArr);
echo "<pre>";
foreach($outoutArr as $val){


   $vale= explode('~',$val);

   print_r($vale);


}



    // echo' <table class="table">
    // <thead>
    //     <tr>
    //         <th>Input</th>
    //         <th>Output</th>
             
    //     </tr>
    // </thead>
    // <tbody> '.$convertedOutput.'
    
    // </tbody>
    // </table>';





?>



