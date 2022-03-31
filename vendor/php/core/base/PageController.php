<?php

namespace php\base;

use app\controllers\AppController;

class PageController extends AppController
{
    public function indexAction()
    {


        $this->setMeta('Title', 'Descr', 'Key');


    }

}