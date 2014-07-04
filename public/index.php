<?php
error_reporting(E_ALL);
require_once dirname(dirname(__FILE__)).'/const.php';
chdir(__DIR__);
require_once VENDOR_PATH."/autoload.php";

try {
    require_once ROOT_PATH . "/apps/cms/Application.php";
    $application = new Application();
    $application->run();
    echo $application->getOutput();
} catch (Exception $e) {
    \Engine\Error::exception($e);
    throw $e;
}

