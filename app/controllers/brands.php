<?php

namespace app\controllers;

use \app\models\Brand as Brand;
use \app\forms\BrandForm as BrandForm;
use \sys\core\Controller as Controller;
use \sys\core\View as View;
use \sys\lib\Status as Status;

class Brands extends Controller {

    public $grantUser;

    public function __construct() {
        parent::__construct(new Brand());
    }

    // [Access]
    public function index() {

        if(!Status::check_access()) {
            return new View('errors/forbidden.php', [
                'title' => ' Page 403'
            ]);
        } else {
            return new View('brands/index.php', [
                'title' => 'Brands Manipulation',
                'brands' => $this->model->get_all_brands()
            ]);
        }
    }

    public function redirect() {

        return new View('brands/redirect.php', [
            'title' => 'Redirect'
        ]);
    }

    // [Access]
    public function create() {

        if(!Status::check_access()) {
            return new View('errors/forbidden.php', [
                'title' => ' Page 403'
            ]);
        } else {
            $form = new BrandForm('Adding Brand', 'Add');
            // get:
            if(empty($_POST['submit'])) {
                
                return new View('brands/create.php', [
                    'title' => 'Adding Brand',
                    'form' => $form
                ]);
            } else {
                //post:
                $form->fill();
                $brandName = $form->fields[0]->fieldValue;
                $this->model->add_brand($brandName);
                //
                $this->redirect();
            }
        }


        
    }

    // [Access]
    public function update($brandId) {

        if(!Status::check_access()) {
            return new View('errors/forbidden.php', [
                'title' => ' Page 403'
            ]);
        } else {
            $name = $this->model->get_brand_name($brandId);
            $form = new BrandForm('Update Brand','Update',$name);
            // get:
            if(empty($_POST['submit'])) {
                
                return new View('brands/update.php', [
                    'title' => 'Updating Brand',
                    'form' => $form
                ]);
            } else {
                //post:
                $form->fill();
                $brandName = $form->fields[0]->fieldValue;
                $this->model->edit_brand($brandName, $brandId);
                //
                $this->redirect();
            }
        }
    }

    // [Access]
    public function delete($brandId) {

        if(!Status::check_access()) {
            return new View('errors/forbidden.php', [
                'title' => ' Page 403'
            ]);
        } else {
            $name = $this->model->get_brand_name($brandId);
            $form = new BrandForm('Remove Brand?','Remove', $name);
            // get:
            if(empty($_POST['submit'])) {
                
                return new View('brands/delete.php', [
                    'title' => 'Remove Brand',
                    'form' => $form
                ]);
            } else {
                //post:
                $this->model->del_brand($brandId);
                //
                $this->redirect();
            }
        }
    }

}