<?php
/**
 *
 * PHP version 7
 *
 * @category   Framework
 * @package    Neotis
 * @copyright  2021 - ~
 * @version    1.0.0
 * @link       https://github.com/neotis/php
 */

use App\Kernel\Kernel;

define('APP_PATH', realpath('..') . DIRECTORY_SEPARATOR);
define('DS', DIRECTORY_SEPARATOR);

$dependencies = APP_PATH . 'vendor/autoload.php';
if (!file_exists($dependencies))
    throw new Exception('Dependencies directory is not exist! (Run "composer install" in root directory)');
require_once($dependencies);

$kernel = Kernel::getInstance();
$kernel->fire();