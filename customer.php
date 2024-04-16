<?php
define('MyConst', TRUE);
include  __DIR__.'/db_connect.php';

$email = $_POST["email"];

$count = 0;

if($email=='' || $email==NULL)
{
	header('Location: index.php?empty=1/#footer');
  	exit;
}

if ($result = $conn->query("SELECT * FROM customer WHERE customer_email='$email'")) {
  $count = $result -> fetch_row();
}

if(isset($count) && $count[0]>0)
{
  header('Location: index.php?exists=1/#footer');
  exit;
}

$sql = "INSERT INTO customer(customer_email)
      VALUES('$email')";

if ($conn->query($sql) === TRUE) {
  header('Location: index.php?subscribed=1/#footer');
  exit;
} else {
  //echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>