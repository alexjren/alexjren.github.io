<?php
// define variables and set to empty values
$fnameErr = $emailErr = $lnameErr = "";
$fname = $email = $lname = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["lname"])) {
    $lnameErr = "Last name is required";
  } else {
    $lname = test_input($_POST["lname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
      $lnameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <div>
      <div>
          <label for="fname">First Name</label>
          <span class="error">* <?php echo $fnameErr;?></span>
          <input type="text" id="fname" name="fname" placeholder="Your name.." required>
      </div>
      <div>
          <label for="lname">Last Name</label>
          <span class="error">* <?php echo $lnameErr;?></span>
          <input type="text" id="lname" name="lname" placeholder="Your last name.." required>
      </div>
  </div>
  <div>
      <label for="email">Email Address</label>
      <span class="error">* <?php echo $emailErr;?></span>
      <input type="text" id="email" name="email" placeholder="Your email..." required>
  </div>
  <div>
      <label for="comment">Message</label>
      <textarea id="comment" name="comment" placeholder="Write something.." style="height:170px" required></textarea>
  </div>
  <input type="submit" value="Submit">
</form>

<?php
$to = "aren3@jhu.edu";
$subject = "Form Submission from $fname $lname";
$body = "You have received a new message from $fname $lname.\n
Here is the message:\n $comment";

mail($to, $subject, $body);

function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($email))
{
    echo "Bad email value!";
    exit;
}