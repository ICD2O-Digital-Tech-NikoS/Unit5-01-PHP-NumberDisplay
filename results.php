<?php 
  
  // get user input for min
  $user_max = $_POST["usermax"];
  // get user input for max
  $user_min = $_POST["usermin"];
  // empty string for displaying numbers
  $numbers = "";
  // counter to see if user Min is equal to user Max
  $counter = $user_min;
  
  // while counter is not equal to userMax, update the counter unti it is equal to userMax
  while ($counter <= $user_max) {
    $numbers = $numbers . $counter . " ";
    $counter++;
  }
  
  if ($user_min > $user_max) {
    echo "Your minimum is greater than your maximum. Please try again.";
  } else {
    // display the numbers
    echo $numbers;
  }

?>
