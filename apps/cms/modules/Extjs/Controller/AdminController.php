<?php
/**
 * @namespace
 */
namespace Extjs\Controller;

use ExtjsCms\Controller\AdminController as Base;

/**
 * @RoutePrefix("/cms", name="admin")
 */
class AdminController extends Base
{
    public function initialize()
    {
        $this->view->app_title = 'skeleton cms';
        $this->view->host_title = 'Skeleton';
        $this->view->host = 'skeleton-cms.loc';
    }
}

