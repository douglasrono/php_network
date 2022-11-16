<?php
$domain="w3schools.com";
if(dns_get_mx($domain,$mx_details)){
  foreach($mx_details as $key=>$value){
    echo "$key => $value <br>";
  }
}
?>
