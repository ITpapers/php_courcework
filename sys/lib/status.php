<?php 

namespace sys\lib;
use \sys\core\Model as Model;

class Status {

    public static function get_current_user() {
        $user = ['Name' => 'Guest', 'Email' => 'Guest'];
        if(isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
        } elseif (isset($_COOKIE['user'])) {
            $user = unserialize($_COOKIE['user']);
        }
        return $user;
    }

    public static function check_access() {
        $sql = "select role_id from users where email=?";
        $params = [Status::get_current_user()['Email']];
        $model = new Model();
        $result = $model->execute_select_query($sql, $params);
        //
        if(count($result) > 0 && ( $result[0]['role_id'] == 1 || $result[0]['role_id'] == 2 )) {
            return true;
        } else {
            return false;
        }

        
    }
}