<?php 
    ob_start();//start output buffering
    define('Private_Path', dirname(__FILE__));
    define('Project_Path', dirname(Private_Path));
    define('Public_Path', Project_Path . '/public');
    define('Shared_Path', Private_Path . '/shared');
    // defining website root url
    $public_end =strpos( $_SERVER['SCRIPT_NAME'], '/public') + 7 ;
    $doc_root = substr($_SERVER['SCRIPT_NAME'], 0 , $public_end);
    define('WWW_ROOT', $doc_root);
?>

<?php require_once('functions.php'); ?>
