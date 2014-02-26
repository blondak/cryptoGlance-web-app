<?php
error_reporting(E_ERROR);
//error_reporting(E_ALL);

require_once('functions.php');

rigwatch_session();

require_once('config.php');

define('DATA_PATH', getcwd() . '/' . DATA_FOLDER . '/');


//
//// DEV ONLY:
//
// We are incrementing our developer version. That way we can see how many times we've attempted to code something!
require_once('classes/filehandler.php');
$fileHandler = new Class_FileHandler('dev/CURRENT_VERSION');
$currentVersion = intval($fileHandler->read());
$newVersion = intval($currentVersion + 1);
$fileHandler->write($newVersion);
define('CURRENT_VERSION', 'v0.0.' . $newVersion);
//define('CURRENT_VERSION', 'v0.1-test');
//// END DEV ONLY
//

// PRODUCTION:
//define('CURRENT_VERSION', 'v0.0.');
?>