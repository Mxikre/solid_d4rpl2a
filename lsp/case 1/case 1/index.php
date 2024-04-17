<?php
include_once "SocialMedia.php";
include_once "VidioGrupManager.php";
include_once "PostMediaManager.php";
include_once "WhatsApp.php";
include_once "Instagram.php";

$whatsapp = new WhatsApp();
$instagram = new Instagram();

echo "Pake WhatsApp: <br>";
$whatsapp->chat();
$whatsapp->sendPhotosAndVideos();
$whatsapp->callGroupVideo();

echo "<br>Pake Instagram: <br>";
$instagram->chat();
$instagram->sendPhotosAndVideos();
$instagram->publishPost();

?>
