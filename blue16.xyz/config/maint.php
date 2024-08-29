<?php
$offline = false;
if($offline){
if($_COOKIE['BypassMaintenance'] != "lois"){
header("Location: https://www.blue16.xyz/maintenance");
exit;
}
}
?>
