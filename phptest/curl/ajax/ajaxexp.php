<!DOCTYPE html>
<html>
<head>
  <title>AJAX Example</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <h1>AJAX Example</h1>
  <form id="myForm">
    <input type="text" id="inputData">
    <button type="button" onclick="sendData()">Submit</button>
  </form>
  <div id="result"></div>

  <script>
    function sendData() {
      var inputData = $('#inputData').val();
      $.ajax({
        type: "POST",
        url: "process.php",
        data: {data: inputData},
        success: function(response) {
          $('#result').html(response);
        }
      });
    }
  </script>
</body>
</html>
