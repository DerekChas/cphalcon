<?php

namespace Phalcon\Test\Modules\Backend;

use Phalcon\Mvc\View;
use Phalcon\DiInterface;
use Phalcon\Mvc\ModuleDefinitionInterface;

class Module implements ModuleDefinitionInterface
{
    public function registerAutoloaders(DiInterface $di = null)
    {
    }

    public function registerServices(DiInterface $di)
    {
        $di->set('view', function() {
            $view = new View();
            $view->setViewsDir(PATH_DATA . 'modules/backend/views/');

            return $view;
        });
    }
}
