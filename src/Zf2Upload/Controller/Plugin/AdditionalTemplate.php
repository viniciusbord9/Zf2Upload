<?php

namespace Zf2Upload\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;
use Zend\Authentication\AuthenticationService;
use Zend\ServiceManager\ServiceLocatorInterface;

use Zend\View\Model\ViewModel;


class AdditionalTemplate extends AbstractPlugin
{
    public function setAdditionalTemplate(ViewModel $view){
        $scripts = new ViewModel();
        $scripts->setTemplate('partial/scripts');
        $view->addChild($scripts, 'scripts');
    }
}