<?php

// Example - to be redefined for each gallery
// define('GALLERY_ROOT', '../DVD/Fotky/');
// define('DATA_ROOT', '../../../../../cache/sfpg_gallery/zsmf2019/');
// define('TEXT_GALLERY_NAME', 'Galerie ZŠMF2019');

$file_exclude = array('.htaccess');

define('DATE_FORMAT', 'Hour:Min:Sec Date.Nrmonth.Year');
define('THUMB_JPEG_QUALITY', 80);
define('THUMB_CHARS_MAX', 100);
define('ROUND_CORNERS', 0);
define('TEXT_DIR_MARK_START', '');

include('sfpg_cs.php');
