<?php
$target_dir="/app/instance/uploads/";

header("Content-Type: image/png");

echo file_get_contents($target_dir.$_GET["id"].".png");
unlink($target_dir.$_GET["id"].".png");

?>
