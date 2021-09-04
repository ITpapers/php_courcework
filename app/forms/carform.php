<?php

namespace app\forms;

use \sys\core\Form as Form;
use \sys\lib\Field as Field;

class CarForm extends Form {

    public function __construct($title, $btnName, $propValues) {
        $this->name = 'carform';
        $this->title = $title;
        $this->btnName = $btnName;
        $this->className = 'car-form';
        $this->methodName = 'POST';
        $this->actionPath = '#';
        $this->enctype = 'multipart/form-data';
        $this->fields = [
            new Field('brand', 'select', '-', 'frm-control frm-control-select', 'Car\'s Brand', $propValues['brandId']),
            new Field('model', 'input', 'text', 'form-control', 'Car\'s Model', $propValues['model']),
            new Field('transmission', 'select', '-', 'frm-control frm-control-select', 'Car\'s Transmission', $propValues['transmissionId']),
            new Field('about', 'textarea', '-', 'form-control', 'About Car', $propValues['about']),
            new Field('image', 'input', 'file', 'form-control form-control-file', 'Car\'s image', $propValues['image']),
            new Field('year', 'input', 'number', 'form-control', 'Car\'s year', $propValues['year']),
            new Field('mileage', 'input', 'number', 'form-control', 'Car\'s mileage', $propValues['mileage']),
            new Field('price', 'input', 'number', 'form-control', 'Car\'s price', $propValues['price'])
        ]; 
    }
}