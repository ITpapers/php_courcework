<?php

namespace sys\core;

use \sys\lib\Field as Field;
use \app\models\Brand as Brand;
use \app\models\Transmission as Transmission;
require_once('sys/config/constants.php');

class Form {

    public $name;
    public $title;
    public $className;
    public $methodName;
    public $actionPath;
    public $enctype;
    public $fields;

    public function generate() {
        echo('<section class="pt-120 pb-120">');
        echo('<div class="container">');
        echo('<div class="row">');
        echo('<div class="col-lg-12">');
        //
        echo('<div class="block text-center">');
        echo('<div class="block-inner text-center">');
        echo('<h3 class="title">'.$this->title.'</h3>');
        //
        echo('<form');
        echo(' id="'.$this->name.'"');
        echo(' class="form"');
        echo(' method="'.$this->methodName.'"');
        echo(' action="'.$this->actionPath.'"');
        //
        if ($this->enctype !== '') {
            echo(' enctype="'.$this->enctype.'"');
        }

        if($this->name === 'regform') {
            echo(' onsubmit="return false"');
        }

        echo('>');

        if($this->name === 'entryform') {
            echo ('
            <div class="frm-group text-center">
                <a href="https://facebook.com" class="facebook">facebook</a>
                <a href="https://google.com" class="google">google plus</a>
                <a href="https://twitter.com" class="twitter">twitter</a>
            </div>
            <div class="frm-group text-center">
                <span class="or">or</span>
            </div>');
        }
        
        //
        if (is_array($this->fields) && count($this->fields) > 0) {
            foreach ($this->fields as $field) {
                if ($field instanceof Field) {
                    echo('<div class="frm-group">');
                    //
                    if($field->name !== 'stand' && $field->name !== 'brand' && $field->name !== 'transmission') {
                        $field->generate();
                    } elseif($field->name === 'stand') {
                        echo('<p style="text-align: center; margin: -30px 0px 10px 0px; font-size: 18px">');
                        echo('<input type="checkbox" id="stand" name="stand" value="yes">');
                        echo('&nbsp;');
                        echo('<label for="stand">Stay in the system</label>');
                        echo('</p>');
                    } elseif($field->name === 'brand') {
                        //
                        $brandModel = new Brand();
                        $brands = $brandModel->get_all_brands();
                        echo('<select name="'.$field->name.'" class="'.$field->className.'">');
                        foreach($brands as $brand) {
                            echo('<option value="');
                            echo($brand['id'].'" ');
                            if($brand['id'] == $field->fieldValue) 
                            {
                                echo('selected');
                            }
                            echo('>');
                            echo($brand['name']);
                            echo('</option>');
                        }
                        echo('</select>');
                    } elseif($field->name === 'transmission') {
                        //
                        $transmissionModel = new Transmission();
                        $transmissions = $transmissionModel->get_all_transmissions();
                        echo('<select name="'.$field->name.'" class="'.$field->className.'">');
                        foreach($transmissions as $transmission) {
                            echo('<option value="');
                            echo($transmission['id'].'" ');
                            if($transmission['id'] == $field->fieldValue) 
                            {
                                echo('selected');
                            }
                            echo('>');
                            echo($transmission['name']);
                            echo('</option>');
                        }
                        echo('</select>');
                    }
                    //
                    echo('<div class="error"');
                    echo(' id="'.$field->name.'-error">');
                    echo('');
                    echo('</div>');
                    //
                    echo('</div>');
                }
            }
        }
        
        
        //
        echo('<div class="frm-group">');
        echo("<input type='submit' id='submit' name='submit' value='".$this->btnName."'  />");
       // echo("<input type='reset' id='reset' name='reset' value='Clear' class='btn-sm btn-danger my-btn' />");
        echo("</div>");
        //
        if($this->name === 'entryform') {
            echo('<p>');
            echo('<a href="'.SITE_ROOT_DIR.'/auth/reg">Haven\'t your any account in here?</a>');
            echo('<a href="'.SITE_ROOT_DIR.'/auth/recovery">Forget password?</a>');
            echo('</p>');
        }
        //
        echo('</form>');
        //

        echo('</div>');
        echo('</div>');
        //
        echo('</div>');
        echo('</div>');
        echo('</div>');
        echo('</section>');
    }

    public function fill(){
        if (is_array($this->fields) && count($this->fields)>0){
            foreach ($this->fields as $field){
                if (isset($_POST[$field->name])){
                    $field->fieldValue = $_POST[$field->name];
                }
                if(isset($_FILES[$field->name])) {
                    $field->fieldValue = $_FILES[$field->name];
                }
            }
        }
    }
}