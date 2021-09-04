<?php

namespace app\forms;

use \sys\core\Form as Form;
use \sys\lib\Field as Field;

class Regform extends Form {
    public function __construct(){
        $this->name = 'regform';
        $this->title = 'Create Your Account';
        $this->btnName = 'Register';
        $this->className='registration';
        $this->methodName='post';
        $this->actionPath='#';
        $this->enctype='';
        $this->fields=[
            new Field('name','input','text','form-control','First Name'),
            new Field('lastname','input','text','form-control', 'Last Name'),
            new Field('age','input','number','form-control', 'Your Age'),
            new Field('phone','input','tel','form-control', 'Your Phone'),
            new Field('email','input','email','form-control', 'Your Email'),
            new Field('pass1','input','password','form-control', 'Your Password'),
            new Field('pass2','input','password','form-control', 'Enter Re-Password')
        ];
    }
}