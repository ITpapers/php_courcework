<?php

namespace app\controllers;

use \sys\lib\Status as Status;
use \sys\core\Controller as Controller;
use \sys\core\View as View;

class Admin extends Controller {


    // [Access]
    public function index() {

        if(Status::check_access()) {
            return new View('admin/index.php', [
                'title' => 'Admin Panel'
            ]);
        } else {
            return new View('errors/forbidden.php', [
                'title' => 'Page 403'
            ]);
        }

        
    }

}


