<html>
<body>
<?php
// define variables and set to empty values
$name = $password = $cpassword = $email= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_input($_POST["name"]);
  $email = test_input($_POST["password"]);
  $email = test_input($_POST["cpassword"]);
  $email = test_input($_POST["email"]);

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