<?php
define('PHALCON_VERSION_REQUIRED', '1.2.0');
define('PHP_VERSION_REQUIRED', '5.4.0');
define('DS', DIRECTORY_SEPARATOR);
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__FILE__));
}
if (!defined('VENDOR_PATH')) {
    define('VENDOR_PATH', dirname(__FILE__).'/vendor');
}
if (!defined('PUBLIC_PATH')) {
    define('PUBLIC_PATH', dirname(__FILE__).'/public');
}
if (!defined('DOCUMENT_ROOT')) {
    define('DOCUMENT_ROOT', dirname(__FILE__).'/public');
}
if (!defined('ENGINE_PATH')) {
    define('ENGINE_PATH', VENDOR_PATH.'/temafey/phalcon-engine/Engine');
}
if (!defined('ADMIN_PREFIX')) {
    define('ADMIN_PREFIX', 'cms');
}