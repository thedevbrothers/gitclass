<?php 
// function getNextAlphaNumeric($code) {
//     $base_ten = base_convert($code,36,10);
//     return base_convert($base_ten+1,10,36);
//  }


//  $number = '000';
//  do{

// $number= getNextAlphaNumeric($number);

// echo $number. "<br";


//  }while($number = '222');


?>

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
    $outputArr=[];
    // $hex = '00a'; 
    // $a= base_convert($hex,36,10);
    // echo $a."<br>";
    // $b =base_convert($a+1,10,36);
    // echo $b."<br>";;
 
    function convertOutput($code){

        //die($code);

        $hex = strtoupper($code); 
        $a= base_convert($hex,36,10);
        $b =base_convert($a+1,10,36);

       return $b;
       

 
    }
  
    foreach($inputArr as $val){

    //     $va = strtoupper($val); 
    //    echo $val."<br>"; 


      $b= convertOutput($val);

       array_push($outputArr, $b);
      
     }

     print_r($outputArr);

    





?>



