<?php
//echo "welcome to this app";

//date_default_timezone_set('Australia/Melbourne');
//$date1 = date('m/d/Y h:i:s a', time());

date_default_timezone_set('Asia/Kolkata');
//$date1 = date('m/d/Y h:i:s a');
$results = json_encode(array('status' => 'ok', 'time' => date('m/d/Y H:i:s')), true);
//json_encode($date1);
echo $results;
?>