<?php
$domain="w3schools.com";
if(checkdnsrr($domain,"MX")) {
  echo "Passed";
} else {
  echo "Failed";
}
?>
