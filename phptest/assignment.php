<!DOCTYPE html>
<html lang="en">
<head>
  <title>Duskbyte Assignment </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>
<body>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Alpha Numeric String Increment By One</h1>
  
</div>


<?php

function increment($str) {
    // Convert the alphanumeric string to a numeric value
    $num = intval($str, 36);
    
    // Add 1 to the numeric value
    $num++;
    
    // Convert the numeric value back to an alphanumeric string
    $newStr = base_convert($num, 10, 36);
    
    return $newStr;

    
}


$inputArr=['001','009','00A','00z','010','019','01a','01z','0zz'];

$outputArr=[];

foreach($inputArr as $val){

    $newStr = increment($val);

    $newStr = strtoupper($newStr);

    $strlength = strlen($newStr);

    if($strlength == 2){

        $newStr = '0'. $newStr;

        array_push($outputArr, $newStr);

    }else if($strlength  == 1){

        $newStr = '00'. $newStr;
        array_push($outputArr, $newStr);
    }else{

        array_push($outputArr, $newStr);


    }


   

}



?>



  
<div class="container mt-5">
  <div class="row">
  <div class="col-md-3"></div>
    <div class="col-md-6">
     <table class="table table-striped table-inverse table-responsive text-center">
        <thead class="thead-inverse">
            <tr>
                <th>Input</th>
                <th>Output</th>
                
            </tr>
            </thead>
            <tbody>
               
             <?php 

                for($i=0; $i<count($inputArr);$i++){

                    echo ' <tr>
                    
                            <td>'.$inputArr[$i].'</td>
                            <td>'.$outputArr[$i].'</td>
                        </tr>';


                }
                ?>
            </tbody>
     </table>
     </div>
     <div class="col-md-3"></div>
  </div>
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p><i class="fa fa-copyright" aria-hidden="true"></i> by Gurjeet Singh </p>
</div>

</body>
</html>