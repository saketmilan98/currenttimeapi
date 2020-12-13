<?php
date_default_timezone_set('Asia/Kolkata');
$results = json_encode(array('time' => date('d-m-Y H:i:s')), true);
echo $results;
?>