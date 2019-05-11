<?php
  //check for posted data
  /*if (filter_has_var(INPUT_POST, 'data')) {
    echo "data found";
  }else{
    echo "not found data";
  }*/

  // email validation
  if (filter_has_var(INPUT_POST, 'data')) {
    $email = $_POST['data'];

    //remove illegle characters
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email.'<br>';

    if (filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) {
      echo "e mail is valid";
    }else {
      echo "e mail is not valid";
    }
  }
 ?>


<form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <input type="text" name="data" value="">
  <button type="submit" name="button">Submit</button>
</form>
