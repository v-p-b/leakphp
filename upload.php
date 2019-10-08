<?php
require __DIR__ . '/vendor/autoload.php';
use Jcupitt\Vips;

$target_dir = "/app/instance/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
	// fast thumbnail generator
	$image = Vips\Image::newFromFile($_FILES["fileToUpload"]["tmp_name"]);
	$image->resize(0.5);
    $outid=uniqid();
	$outname=$outid.'.png';
	$image->writeToFile($target_dir.$outname);
    echo '<html><head><meta http-equiv="refresh" content="2;url=show.php?id=$outid" /></head></html>';
}
?>
