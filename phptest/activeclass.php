<!DOCTYPE html>
<html>
<head>
  <title>Active Class Check</title>
</head>
<body>
  <ul id="myList">
    <li>Item 1</li>
    <li class="]">Item 2 (active)</li>
    <li>Item 3</li>
    <li>Item 4</li>
    <li class="active">Item 21 (active)</li>
    <li>Item 3</li>
    <li>Item 4</li>
    <li class="active">Item 112 (active)</li>
    <li>Item 3</li>
    <li>Item 4</li>
  </ul>
  <button onclick="checkActiveClass()">Check Active Class</button>


  <script>


    var tagli= document.getElementsByClassName("active");
  
    
    console.warn(tagli.length);



    if(tagli.length > 0){

        // tagli.classList.add("my-class");
        console.warn('have value');

    }else{

        console.warn('remove value');
        // tagli.classList.remove("my-class");
    }
    // console.warn(tagli.classList);


//     tagli.forEach(button => {
//             // button.addEventListener('click', function () {
//             //     buttons.forEach(btn => btn.classList.remove('active'));
//             //     this.classList.add('active');        
//             // });
//             console.log(button.attributes[0]);
// });




function checkActiveClass() {
  const myList = document.getElementById('myList');
  const liElements = myList.getElementsByTagName('li');

  // Find the active class
  let activeElement = null;
  for (let i = 0; i < liElements.length; i++) {
    if (liElements[i].classList.contains('active')) {
      activeElement = liElements[i];
      break;
    }
  }

  if (activeElement) {
    console.log("Active element found:", activeElement.textContent);
  } else {
    console.log("No active element found.");
  }

  // Check if a specific <li> element has the active class
  const specificElementIndex = 2; // Change this to the index of the <li> element you want to check
  if (liElements[specificElementIndex].classList.contains('active')) {
    console.log("The specific element has the active class.");
  } else {
    console.log("The specific element does not have the active class.");
  }
}




  </script>
</body>
</html>