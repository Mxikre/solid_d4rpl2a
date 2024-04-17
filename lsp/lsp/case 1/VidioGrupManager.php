<?php
include_once "SocialMedia.php";

// Interface for managing video group
interface VideoGroupManager extends SocialMedia{
    public function callGroupVideo();
}

?>