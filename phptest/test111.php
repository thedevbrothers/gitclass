<?php 



function incrementAlphanumericString($str) {
    // Convert the alphanumeric string to a numeric value
    $num = intval($str, 36);
    
    // Add 1 to the numeric value
    $num++;
    
    // Convert the numeric value back to an alphanumeric string
    $newStr = base_convert($num, 10, 36);
    
    return $newStr;

    
}





// $number = '000';

// //$number= incrementAlphanumericString($number);
// do{

// $number= incrementAlphanumericString($number);



// echo $number. "<br";

 
 

// }while($number <= 'zzz');







//

// Example usage
// $str = 'abc123';

$inputArr=['001','009','00A','00z','010','019','01a','01z','0zz'];

$outputArr=[];

foreach($inputArr as $val){

    $newStr = incrementAlphanumericString($val);

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


 
 

// $finalArr=[];
// $finalArr1=[];


// foreach($outputArr as $key=>$val){


//     $finalArr[$key] = $val;

//     $finalArr1[$key] = $inputArr[$key];







// }









echo "<pre>";
print_r($outputArr);
echo "</pre>";


// $out = array_merge($finalArr, $finalArr1); 

// echo "<pre>";
// print_r($merged_array);
// echo "</pre>";



// $newStr = incrementAlphanumericString($str);
// echo $newStr; // Outputs 'abc124'



?>

 <table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>Input</th>
            <th>Output</th>
           
        </tr>
        </thead>
        <tbody>


    <?php 

            for($i=0; $i>count($inputArr);$i++){

                echo ' <tr>
                
                        <td>'.$inputArr[$i].'</td>
                        <td>'.$inputArr[$i].'</td>
                    </tr>';


            }
            ?>
 
            
          
        </tbody>
 </table>