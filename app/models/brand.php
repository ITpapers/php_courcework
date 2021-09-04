<?php

namespace app\models;

use \sys\core\Model as Model;

class Brand extends Model {


    public function add_brand($brandName) {

        $sql =  'insert into brands (name) values (?)';
        $params = [$brandName];
        $result = $this->execute_dml_query($sql, $params);
        return $result;
    }

    public function del_brand($brandId) {
        $sql =  'delete from brands where id=?';
        $params = [$brandId];
        $this->execute_dml_query($sql, $params);
    }

    public function edit_brand($brandName, $brandId) {
        $sql =  'update brands set name=? where id=?';
        $params = [$brandName, $brandId];
        $this->execute_dml_query($sql, $params);
    }

    public function get_all_brands() {
        $sql = 'select * from brands';
        $result = $this->execute_select_query($sql);
        return $result;
    }

    public function get_all_used_brands() {
        $sql = 'select brands.id, brands.name FROM brands ';
        $sql .= 'inner JOIN cars ON cars.brand_id = brands.id ';
        $sql .= 'GROUP by brands.id';
        $result = $this->execute_select_query($sql);
        return $result;

    }

    public function get_brand_name($brandId) {
        $sql = 'select name from brands where id=?';
        $params = [$brandId];
        $result = $this->execute_select_query($sql, $params);
        return $result[0]['name'];
    }

}