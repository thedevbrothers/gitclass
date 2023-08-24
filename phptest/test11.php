<?php


function alphanumeric_increment( $string, $position=false ) {
    if ( false === $position ) {
            $position = strlen( $string ) - 1;
    }
    $increment_str = substr( $string, $position, 1 );
    switch ( $increment_str ) {
            case '9':
                    $string = substr_replace( $string, 'a', $position, 1 );
                    break;
            case 'z':
                    $string = substr_replace( $string, 'A', $position, 1 );
                    break;
            case 'Z':
                    if ( 0 === $position ) {
                            $string = substr_replace( $string, '0', $position, 1 );
                            $string .= '0';
                    } else {
                            $inc_position = $position - 1;
                            $string = increment( $string, $inc_position );
                            $string = substr_replace( $string, '0', $position, 1 );
                    }
                    break;
            default:
                    $increment_str++;
                    $string = substr_replace( $string, $increment_str, $position, 1 );
                    break;
    }
    return $string;
}










     $number = '000';
 do{

$number= alphanumeric_increment($number);

echo $number. "<br";
$number +=$number;

 }while($number = '222');













?>