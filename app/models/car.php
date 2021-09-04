<?php

namespace app\models;

use \sys\core\Model as Model;

class Car extends Model {

    public function add_car($propsArray) {
        $sql = 'insert into cars ';
        $sql .= '(brand_id, model, transmission_id, about, image, year, mileage, price, publish_date) ';
        $sql .= 'values (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $this->execute_dml_query($sql, $propsArray);
    }

    public function del_car($carId) {
        $sql =  'delete from cars where id=?';
        $params = [$carId];
        $this->execute_dml_query($sql, $params);
    }

    public function edit_car($carId, $propsArray) {
        $sql =  'update cars set ';
        $sql .= 'brand_id = '.$propsArray[0].', model = \''.$propsArray[1].'\', transmission_id = '.$propsArray[2].', about = \''.$propsArray[3].'\', image = \''.$propsArray[4].'\', year = '.$propsArray[5].', mileage = '.$propsArray[6].', price = '.$propsArray[7].', publish_date = \''.$propsArray[8].'\' ';
        $sql .= 'where id='.$carId;
        //$sql .= '(brand_id, model, transmission_id, about, image, year, mileage, price, publish_date) ';

        //$sql .= 'values (?, ?, ?, ?, ?, ?, ?, ?, ?) ';
        //$sql .= 'where id='.$carId.' ';

        $this->execute_dml_query($sql);
    }

    public function get_car_by_page($brandId, $pageSize, $pageNumber) {
        //
    }

    public function get_car_by_Id($carId) {
        $sql = "select *";
        $sql .= "FROM cars ";    
        $sql .= "where cars.id=?";
        $params = [$carId];
        $result = $this->execute_select_query($sql, $params);
        return $result[0];
    }

    public function get_all_cars() {
        $sql = 'select * from cars order by id';
        $result = $this->execute_select_query($sql);
        return $result;
    }

    public function get_cars_by_brand($brandId) {
        $sql = 'select * from cars where brand_id=?';
        $params = [$brandId];
        $result = $this->execute_select_query($sql, $params);
        return $result;

    }

    
    public function get_full_car_info_by_Id($carId) {
        $sql = "select cars.id, brands.name as 'brand_name', cars.model, transmissions.name as 'transmission_name', cars.about, cars.image, cars.year, cars.mileage, cars.price, cars.publish_date ";
        $sql .= "FROM cars ";    
        $sql .= "INNER JOIN brands ON cars.brand_id = brands.id ";
        $sql .= "INNER JOIN transmissions ON cars.transmission_id = transmissions.id ";
        $sql .= "where cars.id=?";
        $params = [$carId];
        $result = $this->execute_select_query($sql, $params);
        return $result[0];
    }

    public function get_full_cars_info() {
        $sql = "select cars.id, brands.name as 'brand_name', cars.model, transmissions.name as 'transmission_name', cars.about, cars.image, cars.year, cars.mileage, cars.price, cars.publish_date ";
        $sql .= "FROM cars ";    
        $sql .= "INNER JOIN brands ON cars.brand_id = brands.id ";
        $sql .= "INNER JOIN transmissions ON cars.transmission_id = transmissions.id ";
        $sql .= "order by cars.publish_date DESC";
        $result = $this->execute_select_query($sql);
        return $result;
    }

    public function get_full_cars_info_by_brand($brandId) {
        $sql = "select cars.id, brands.name as 'brand_name', cars.model, transmissions.name as 'transmission_name', cars.about, cars.image, cars.year, cars.mileage, cars.price, cars.publish_date ";
        $sql .= "FROM cars ";    
        $sql .= "INNER JOIN brands ON cars.brand_id = brands.id ";
        $sql .= "INNER JOIN transmissions ON cars.transmission_id = transmissions.id ";
        $sql .= "where cars.brand_id=? ";
        $sql .= "order by cars.publish_date DESC";
        $params = [$brandId];
        $result = $this->execute_select_query($sql, $params);
        return $result;
    }
}