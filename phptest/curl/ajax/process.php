<?php
  // Get the data from the AJAX request
  $inputData = $_POST['data'];

  // Process the data (e.g. perform database query)
  $result = "You entered: " . $inputData;

  // Return the response
  echo $result;
?>