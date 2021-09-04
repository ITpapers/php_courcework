<?php

namespace sys\lib;

class Field {

    public $name;
    public $tagName;
    public $typeName;
    public $className;
    public $fieldValue;
    public $placeholder;

    public function __construct($name, $tagName, $typeName, $className, $placeholder = 'Type here:', $fieldValue = '') {
        $this->name = $name;
        $this->tagName = $tagName;
        $this->typeName = $typeName;
        $this->className = $className;
        $this->placeholder = $placeholder;
        $this->fieldValue = $fieldValue;
    }

    public function generate() {
    
        if($this->typeName === 'file') {
            echo('<');
            echo($this->tagName);
            echo(' type="'.$this->typeName.'"');
            echo(' name="'.$this->name.'"');
            echo(' id="'.$this->name.'"');
            echo(' class="'.$this->className.'"');
            echo(' placeholder="'.$this->placeholder.'"');
            echo(' value="'.$this->fieldValue.'"');
            echo('/>');
        }elseif($this->tagName === 'input') {
            echo('<');
            echo($this->tagName);
            echo(' type="'.$this->typeName.'"');
            echo(' name="'.$this->name.'"');
            echo(' id="'.$this->name.'"');
            echo(' class="'.$this->className.'"');
            echo(' placeholder="'.$this->placeholder.'"');
            echo(' value="'.$this->fieldValue.'"');
            echo(' required');
            echo('/>');
        } elseif($this->tagName === 'textarea') {
            echo('<');
            echo($this->tagName);
            echo(' type="'.$this->typeName.'"');
            echo(' name="'.$this->name.'"');
            echo(' id="'.$this->name.'"');
            echo(' class="'.$this->className.'"');
            echo(' placeholder="'.$this->placeholder.'"');
            echo(' rows="5"');
            echo(' required');
            echo('>'.$this->fieldValue.'</textarea>');
        }
    }
}