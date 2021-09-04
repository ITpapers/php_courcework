<?php

namespace app\forms;

use \sys\core\Form as Form;
use \sys\lib\Field as Field;

class BrandForm extends Form {

    public function __construct($title = 'Adding Brand', $btnName = 'Submit' ,$nameValue = '') {
        $this->name = 'brandform';
        $this->title = $title;
        $this->btnName = $btnName;
        $this->className = 'brand-form';
        $this->methodName = 'POST';
        $this->actionPath = '#';
        $this->enctype = '';
        $this->fields = [
            new Field('name', 'input', 'text', 'form-control', 'Brand Name', $nameValue)
        ];
    }
}