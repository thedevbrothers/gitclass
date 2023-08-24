<?php 

function SplitEmailAddress($email){
    $pieces = explode('@', $email);
    $arr['user']=$pieces[0];
     $arr['domain']=$pieces[1];
 return $arr;
}

$data=SplitEmailAddress('arun.tiwari@laitkor.com');



print_r($data);









?>

<div id="myDiv">Hello, world!</div>

<script>

var divValue = document.getElementById("myDiv").innerHTML;
console.log(divValue); // output: "Hello, world!"



</script>



<div id="outer">
  <div id="inner">
    <button>Click me</button>
  </div>
</div>

<script>
  const outer = document.getElementById('outer');
  const inner = document.getElementById('inner');
  const button = document.querySelector('button');

  outer.addEventListener('click', () => {
    console.log('outer clicked');
  });

  inner.addEventListener('click', () => {
    console.log('inner clicked');
  });

  button.addEventListener('click', () => {
    console.log('button clicked');
  });
</script>

// Output when button is clicked:
// button clicked
// inner clicked
// outer clicked
