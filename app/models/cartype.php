<?php

namespace app\models;

use \sys\core\Model as Model;

class CarType extends Model {


    public function get_all_car_types() {
        $sql = 'select * from car_types';
        $result = $this->execute_select_query($sql);
        return $result;
    }

    public function get_brand_name($cartypeId) {
        $sql = 'select name from car_types where id=?';
        $params = [$cartypeId];
        $result = $this->execute_select_query($sql, $params);
        return $result[0]['name'];
    }

}