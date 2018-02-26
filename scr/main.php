<?php
/**
 * Created by PhpStorm.
 * User: N.T.T
 * Date: 2/26/2018
 * Time: 10:11 AM
 */
$imgPath = "../images/banner.png";
$text = "Hehe";
require_once('TextOverlayImage.php');
$textOverlay = new TextOverlayImage();
$textOverlay->Process($imgPath,$text);
//phpinfo();
?>