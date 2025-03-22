<?php 
  $cname = $_POST['cname'];
  $cemail = $_POST['cemail'];
  $text = $_POST['text'];
     
  require 'config.php';

  $stmt = $conn->prepare("INSERT INTO contact(cname, cemail, text) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $cname, $cemail, $text);
  $execval = $stmt->execute();
  echo $execval;
  echo "Submit successfully";
  $stmt->close();
  $conn->close();
?>
