<?php

namespace app\models;

use \sys\core\Model as Model;

class Reservation extends Model {


    public function add_reservation($propsArray) {

        $sql =  'insert into reservation (user_id, car_id, fullname, email, phone, gender, payment, information, pickup_location, dropoff_location, pickup_date, pickup_time, dropoff_date, dropoff_time, reservation_date) ';
        $sql .= 'values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $result = $this->execute_dml_query($sql, $propsArray);
        
        return $result;
    }

    public function add_reservation_call($propsArray) {

        $sql =  'insert into reservation_call (user_id, car_type_id, pickup_location, dropoff_location, pickup_date, pickup_time, dropoff_date, dropoff_time, reservation_date) ';
        $sql .= 'values (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $result = $this->execute_dml_query($sql, $propsArray);
        return $result;
    }

}