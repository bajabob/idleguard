<?php

class MoxtraController extends Zend_Controller_Action
{

    public function init()
    {
    	$this->_helper->layout()->setLayout("home");
        $authNamespace = new Zend_Session_Namespace('Zend_Auth');
        $this->view->user = $authNamespace;
    }
    
    public function indexAction(){
    	
    }
    

    
    
}