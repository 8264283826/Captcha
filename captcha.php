<?php

 $str = md5(microtime());
 $str = substr($str,0,6);
 
 $img = imagecreate(100, 30);

 imagecolorallocate($img, 255, 255, 255);
 $text = imagecolorallocate($img, 0, 0, 0);

 imagestring($img, 20, 5, 5, $str, $text);
 session_start();
 $_SESSION['cap_cod'] = $str;
 header("Content:image/jpeg");

 imagejpeg($img);
 
?>