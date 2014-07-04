<?php
/**
 * @namespace
 */
namespace User\Grid\Extjs;

use Engine\Crud\Grid\Extjs as Grid;

/**
 * Class Base.
 *
 * @category   Module
 * @package    Event
 * @subpackage Grid
 */
abstract class Base extends Grid
{

    /**
     * Content managment system module router prefix
     * @var string
     */
    protected $_modulePrefix = ADMIN_PREFIX;

    /**
     * Extjs module name
     * @var string
     */
    protected $_module = 'user';
}