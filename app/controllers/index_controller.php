<?php

class IndexController extends AppController {

    var $uses       = array();
    var $name       = 'A';
    var $components = array('Math');
    
    function index()
    {
        $this->autoRender = false;

        echo $this->Math->sum(1,2);
    }

}
