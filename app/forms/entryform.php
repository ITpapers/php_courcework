<?php

namespace app\forms;

use \sys\core\Form as Form;
use \sys\lib\Field as Field;

class Entryform extends Form {
    public function __construct(){
        $this->name = 'entryform';
        $this->title = 'Login Your Account';
        $this->btnName = 'Login';
        $this->className='login';
        $this->methodName='post';
        $this->actionPath='#';
        $this->enctype='';
        $this->fields=[
            new Field('email','input','email','form-control', 'Your Email'),
            new Field('passw','input','password','form-control', 'Your Password'),
            new Field('stand','input','checkbox','form-control')
        ];
    }
}