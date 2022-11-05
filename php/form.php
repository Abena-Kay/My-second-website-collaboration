<html>
<body>
<?php
// define variables and set to empty values
$emailErr="";
$email= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $emailErr = "email is required";
      } else {
        $email = test_input($_POST["email"]);
      }

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data; 
}
?>

</body>
</html>