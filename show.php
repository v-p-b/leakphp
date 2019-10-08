<?php
$target_dir="/app/instance/uploads/"

header("Content-Type: image/png");

echo file_get_contents($targer_dir.$_GET["id"].".png");

?>
