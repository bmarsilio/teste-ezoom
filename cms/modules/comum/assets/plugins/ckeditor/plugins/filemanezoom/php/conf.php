<?php
if(!session_id())
    session_start();

(isset($_SESSION['ezoom_cms'][$_SERVER['HTTP_HOST']])) or exit('No direct script access allowed');

define('DS', DIRECTORY_SEPARATOR);

$root = dirname(str_replace('modules'.DS.'comum'.DS.'assets'.DS.'plugins'.DS.'ckeditor'.DS.'plugins'.DS.'filemanezoom'.DS.'php', '', dirname(__FILE__)));
$tmp = array(
    "FILES_ROOT" =>          str_replace('\\', '/', $root.DS.'userfiles'.DS.'ckeditor'),
    "RETURN_URL_PREFIX" =>   "",
    "SESSION_PATH_KEY" =>    "",
    "THUMBS_VIEW_WIDTH" =>   "140",
    "THUMBS_VIEW_HEIGHT" =>  "120",
    "PREVIEW_THUMB_WIDTH" => "100",
    "PREVIEW_THUMB_HEIGHT" =>"100",
    "MAX_IMAGE_WIDTH" =>     "1250",
    "MAX_IMAGE_HEIGHT" =>    "1000",
    "INTEGRATION" =>         "ckeditor",
    "DIRLIST" =>             "php/dirtree.php",
    "CREATEDIR" =>           "php/createdir.php",
    "DELETEDIR" =>           "php/deletedir.php",
    "MOVEDIR" =>             "php/movedir.php",
    "COPYDIR" =>             "php/copydir.php",
    "RENAMEDIR" =>           "php/renamedir.php",
    "FILESLIST" =>           "php/fileslist.php",
    "UPLOAD" =>              "php/upload.php",
    "DOWNLOAD" =>            "php/download.php",
    "DOWNLOADDIR" =>         "php/downloaddir.php",
    "DELETEFILE" =>          "php/deletefile.php",
    "MOVEFILE" =>            "php/movefile.php",
    "COPYFILE" =>            "php/copyfile.php",
    "RENAMEFILE" =>          "php/renamefile.php",
    "GENERATETHUMB" =>       "php/thumb.php",
    "DEFAULTVIEW" =>         "list",
    "FORBIDDEN_UPLOADS" =>   "js jsp jsb mhtml mht xhtml xht php phtml php3 php4 php5 phps shtml jhtml pl sh py cgi application gadget hta cpl msc jar vb jse ws wsf wsc wsh ps1 ps2 psc1 psc2 msh msh1 msh2 inf reg scf msp scr dll msi vbs bat com pif cmd vxd cpl htpasswd htaccess",
    "ALLOWED_UPLOADS" =>     "pdf doc docx jpg jpeg gif png xls xlsx ppt pptx txt 7z rar zip odt psd ai eps exe svg",
    "FILEPERMISSIONS" =>     "0644",
    "DIRPERMISSIONS" =>      "0755",
    "LANG" =>                isset($_SESSION['user_lang']) ? $_SESSION['user_lang'] : "pt",
    "DATEFORMAT" =>          "dd/MM/yyyy HH:mm",
    "OPEN_LAST_DIR" =>       "yes"
);

if(!isset($isIncluded))
    echo json_encode($tmp);
?>