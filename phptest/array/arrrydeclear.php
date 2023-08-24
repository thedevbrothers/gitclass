<?php
$fruits = array (
    "fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes"   => array("first", 5 => "second", "third")
);

echo'<pre>';

// print_r($fruits);

 
// $input = array("red", "green", "blue", "yellow");
// array_splice($input, 2);
// var_dump($input);

// $input = array("red", "green", "blue", "yellow");
// array_splice($input, 1, -1);
// var_dump($input);

// $input = array("red", "green", "blue", "yellow");
// array_splice($input, 1, count($input), "orange");
// var_dump($input);

// $input = array("red", "green", "blue", "yellow");
// array_splice($input, -1, 1, array("black", "maroon"));
// var_dump($input);
 
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

$d = array_merge($a, $b);

print_r($c);
print_r($d);
?>


<?php
// This will generate a Notice that an array cannot be cast to a string.
$source = [4, 5, 3, [6]];
$filter = [3, 4, [5], 6];
$result = array_diff($source, $filter);

// // Whereas this is fine, since the objects can cast to a string.
// class S {
//   private $v;

//   public function __construct(string $v) {
//     $this->v = $v;
//   }

//   public function __toString() {
//     return $this->v;
//   }
// }

// $source = [new S('a'), new S('b'), new S('c'), new S('d'), new S('f')];
// $filter = [new S('b'), new S('c'), new S('a')];

// $result = array_diff($source, $filter);

print_r($source);
 print_r($filter);
print_r($result);
// $result now contains one instance of S('a');





$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);

print_r($result);



echo addcslashes('fjhbkjbkh kjbjno lnjojnl', 'A..z');


define('CHARSET', 'ISO-8859-1');
define('REPLACE_FLAGS', ENT_COMPAT | ENT_XHTML);

// $new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);


$new = htmlspecialchars("<a href='test'>Test</a>", REPLACE_FLAGS, CHARSET);
echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;






  
// Store a string into the variable which
// need to be Encrypted
$simple_string = "Welcome to GeeksforGeeks";
echo"<br>";
  
// Display the original string
echo "Original String: " . $simple_string;
echo"<br>";
// Store the cipher method
$ciphering = "AES-128-CTR";
  
// Use OpenSSl Encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
  
// Non-NULL Initialization Vector for encryption
$encryption_iv = '1234567891011121';
  
// Store the encryption key
$encryption_key = "GeeksforGeeks";
  
// Use openssl_encrypt() function to encrypt the data
$encryption = openssl_encrypt($simple_string, $ciphering,
            $encryption_key, $options, $encryption_iv);
  
// Display the encrypted string
echo "Encrypted String: " . $encryption . "\n";
  
// Non-NULL Initialization Vector for decryption
$decryption_iv = '1234567891011121';
  
// Store the decryption key
$decryption_key = "GeeksforGeeks";
  
// Use openssl_decrypt() function to decrypt the data
$decryption=openssl_decrypt ($encryption, $ciphering, 
        $decryption_key, $options, $decryption_iv);
  
// Display the decrypted string
echo "Decrypted String: " . $decryption;
  
?>