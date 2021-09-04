<?php

namespace app\controllers;

use \app\models\Reservation as Reservation;
use \app\models\CarType as CarType;
use \app\models\Car as Car;
use \sys\core\View as View;
use \sys\core\Controller as Controller;
use \sys\lib\Status as Status;
use \app\models\User as User;


class Home extends Controller {

    public function index() {
        $carModel = new Car();
        $cars = $carModel->get_full_cars_info();

        //Заполнена форма быстрой резервации по телефону
        if(isset($_POST['submit-reservation'])) {
            
            $user = Status::get_current_user()['Email'];
            
            if($user === 'Guest') {
                $this->redirect();
            }

            $propsArray = [];

            $userModel = new User();
            array_push($propsArray, $userModel->get_user_id_by_email(Status::get_current_user()['Email']));

            array_push($propsArray, $_POST['car_type']);
            array_push($propsArray, $_POST['pickup_location']);
            array_push($propsArray, $_POST['dropoff_location']);

            $pickup_date = date("Y-m-d", strtotime($_POST['pickup_date']));
            array_push($propsArray, $pickup_date);


            $pickup_time = substr_replace(str_replace(' ', '', $_POST['pickup_time']), ' ', -2, 0);
            $pickup_time = date("H:i:s", strtotime($pickup_time));
            array_push($propsArray, $pickup_time);

            
            $dropoff_date = date("Y-m-d", strtotime($_POST['dropoff_date']));
            array_push($propsArray, $dropoff_date);

            $dropoff_time = substr_replace(str_replace(' ', '', $_POST['dropoff_time']), ' ', -2, 0);
            $dropoff_time = date("h:i:s", strtotime($dropoff_time));
            array_push($propsArray, $dropoff_time);
            
            array_push($propsArray, date("Y-m-d H:i:s"));

            $reservationModel = new Reservation();
            $reservationModel->add_reservation_call($propsArray);
            
            return new View('reservations/reservationinfo.php', [
                'title' => 'Reservation Info',
                'message' => 'Your Call-Reservation was sent to our operators. Please wait for the phone call in 30 minutes!',
                'color' => 'black'
            ]);
        }

        // Car Types:
        $carTypeModel = new CarType();
        $carTypes = $carTypeModel->get_all_car_types();

        return new View('home/index.php', [
            'title' => 'Main',
            'cars' => $cars,
            'carTypes' => $carTypes
        ]);
    }

    public function redirect() {

        return new View('home/redirect-auth.php', [
            'title' => 'Redirect'
        ]);
    }

    public function about() {
        return new View('home/about.php', [
            'title' => 'About'
        ]);
    }

    public function contact() {
        return new View('home/contact.php', [
            'title' => 'Contact'
        ]);
    }
} 