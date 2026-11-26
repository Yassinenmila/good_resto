<?php

namespace App\core;

use eftec\bladeone\BladeOne;

class Controller
{
    protected BladeOne $blade;

    public function __construct()
    {
        $view = dirname(__DIR__, 2) . "/App/views";
        $cache = dirname(__DIR__, 2) . "/cache";

        $this->blade = new BladeOne(
            $view,
            $cache,
            BladeOne::MODE_DEBUG
        );
    }

    protected function view($view, $data = [])
    {
        echo $this->blade->run($view, $data);
    }
}
