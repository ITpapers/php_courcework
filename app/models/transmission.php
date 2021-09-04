<?php

namespace app\models;

use \sys\core\Model as Model;

class Transmission extends Model {


    public function add_transmission($transmissionName) {

        $sql =  'insert into transmissions (name) values (?)';
        $params = [$transmissionName];
        $result = $this->execute_dml_query($sql, $params);
        return $result;
    }

    public function del_transmission($transmissionId) {
        $sql =  'delete from transmissions where id=?';
        $params = [$transmissionId];
        $this->execute_dml_query($sql, $params);
    }

    public function edit_transmission($transmissionName, $transmissionId) {
        $sql =  'update transmissions set name=? where id=?';
        $params = [$transmissionName, $transmissionId];
        $this->execute_dml_query($sql, $params);
    }

    public function get_all_transmissions() {
        $sql = 'select * from transmissions';
        $result = $this->execute_select_query($sql);
        return $result;
    }

    public function get_transmission_name($transmissionId) {
        $sql = 'select name from transmissions where id=?';
        $params = [$transmissionId];
        $result = $this->execute_select_query($sql, $params);
        return $result[0]['name'];
    }

}