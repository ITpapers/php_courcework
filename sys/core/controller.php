<?php

namespace sys\core;

class Controller {

    protected $model;

    public function __construct($model = null) {
        $this->model = $model;
    }

}
