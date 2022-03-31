<?php

namespace app\controllers;


use app\controllers\AppController;
use php\Cache;

class MainController extends AppController
{

    public function indexAction()
    {
        $brands = \R::find('brand', 'LIMIT 3');
        $hits = \R::find('product', "hit = '1' AND status - '1'");
        $this->setMeta('BrandPa', 'Описание', 'Магазин ключей');
        $this->set(compact('brands', 'hits'));


    }


}

