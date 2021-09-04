<?php

namespace app\controllers;

use \app\models\Reservation as Reservation;
use \app\models\Car as Car;
use \app\models\User as User;
use \app\models\CarType as CarType;
use \sys\core\Controller as Controller;
use \sys\core\View as View;
use \sys\lib\Status as Status;


class Reservations extends Controller {

    public function __construct() {
        parent::__construct(new Reservation());
    }

    public function redirect() {

        return new View('reservations/redirect.php', [
            'title' => 'Redirect'
        ]);
    }



    public function reservation($carId) {

        //User:
        $userModel = new User();
        $user = $userModel->get_user_by_email(Status::get_current_user()['Email']);
        // Cars:
        $carModel = new Car();
        $car = $carModel->get_full_car_info_by_Id($carId);

        if(isset($_POST['submit-reservation'])) {
            $propsArray = [];

            array_push($propsArray, $user['id']);
            array_push($propsArray, $car['id']);

            // Personal info
            array_push($propsArray, $_POST['fullname']);
            array_push($propsArray, $_POST['email']);
            array_push($propsArray, $_POST['phone']);
            array_push($propsArray, strval($_POST['gender']));

            array_push($propsArray, strval($_POST['payment']));

            array_push($propsArray, $_POST['information']);


            // Reservation info
            array_push($propsArray, $_POST['pickup_location']);
            array_push($propsArray, $_POST['dropoff_location']);
            //
            $pickup_date = date("Y-m-d", strtotime($_POST['pickup_date']));
            array_push($propsArray, $pickup_date);
            //
            $pickup_time = substr_replace(str_replace(' ', '', $_POST['pickup_time']), ' ', -2, 0);
            $pickup_time = date("H:i:s", strtotime($pickup_time));
            array_push($propsArray, $pickup_time);
            //
            $dropoff_date = date("Y-m-d", strtotime($_POST['dropoff_date']));
            array_push($propsArray, $dropoff_date);
            //
            $dropoff_time = substr_replace(str_replace(' ', '', $_POST['dropoff_time']), ' ', -2, 0);
            $dropoff_time = date("h:i:s", strtotime($dropoff_time));
            array_push($propsArray, $dropoff_time);

            //Datetime
            array_push($propsArray, date("Y-m-d H:i:s"));


            $reservationModel = new Reservation();
            echo($reservationModel->add_reservation($propsArray));

            
            return new View('reservations/reservationinfo.php', [
                'title' => 'Reservation Info',
                'message' => 'Your Online-Reservation was sent to proceed. Please wait for the confirmation email in 60 minutes!',
                'color' => 'black'
            ]);
        }



        
        $allCars = $carModel->get_full_cars_info();
        $ids = array_rand($carModel->get_full_cars_info(), 5);
        $cars = [];
        for($i = 0; $i < 5; $i++) {
            array_push($cars, $allCars[$ids[$i]]);
        }
        

        return new View('reservations/reservation.php', [
            'title' => 'Car Reservation',
            'car' => $car,
            'cars' => $cars,
            'user' => $user
        ]);
    }



} 