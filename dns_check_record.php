<?php
$domain="w3schools.com";
if(dns_check_record($domain,"MX")) {
  echo "Passed";
} else {
  echo "Failed";
}
?>
