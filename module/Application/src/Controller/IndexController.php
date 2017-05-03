<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function helloAction()
    {
        $request = $this->getRequest();
        $name = $request->getParam('name');

        return sprintf('Hello %s', $name);
    }
}
