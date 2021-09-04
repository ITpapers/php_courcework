<?php

namespace app\models;
use \sys\core\Model as Model;

class User extends Model{

    public function register($name, $lastname, $phone, $email, $passw, $age, $regdate, $role_id, $status_id, $email_confirm){
        $sql = 'insert into users (name, lastname, phone, email, passw, age, regdate, role_id, status_id, email_confirm) ';
        $sql .='values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params=[$name, $lastname, $phone, $email, $passw, $age, $regdate, $role_id, $status_id, $email_confirm];
        $this->execute_dml_query($sql, $params);

    }

    public function reg_confirm($email){
        $sql =  'update users set email_confirm="yes" where email=?';
        $params = [$email];
        $this->execute_dml_query($sql, $params);
    }

    public function check_email($email) {
        $sql = 'select email from users where email=?';
        $params = [$email];
        $result = $this->execute_select_query($sql, $params);
        //
        if(count($result)===0) {
            return true;
        } else {
            return false;
        }

    }

    public function check_phone($phone) {
        $sql = 'select phone from users where phone=?';
        $params = [$phone];
        $result = $this->execute_select_query($sql, $params);
        //
        if(count($result)===0) {
            return true;
        } else {
            return false;
        }

    }

    public function authenticate($email, $passw) {
        $sql = 'select name, email, passw from users where email=? and passw=?';
        $params = [$email, $passw];
        $result = $this->execute_select_query($sql, $params);
        //
        if(count($result) > 0) {
            return $result[0]['name'];
        } else {
            return '';
        }
    }

    public function check_confirm($email) {
        $sql = "select email_confirm from users where email=?";
        $params = [$email];
        $result = $this->execute_select_query($sql,$params);
        //
        if(count($result)>0 && $result[0]['email_confirm']==='yes') {
            return true;
        } else {
            return false;
        }
    }

    public function get_user_id_by_email($email) {
        $sql = "select id from users where email=?";
        $params = [$email];
        $result = $this->execute_select_query($sql,$params);
        //
        return $result[0]['id'];
    }

    public function get_user_by_email($email) {
        $sql = "select * from users where email=?";
        $params = [$email];
        $result = $this->execute_select_query($sql,$params);
        //
        return $result[0];
    }



}