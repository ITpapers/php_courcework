<?php

namespace app\controllers;

use \sys\core\View as View;
use \sys\core\Controller as Controller;

class Blogs extends Controller {

    public function index() {

        return new View('blogs/index.php', [
            'title' => 'Blogs'
        ]);
    }

    public function blog_details() {
        return new View('blogs/blog-details.php', [
            'title' => 'Blog Details'
        ]);
    }

} 