<?php

namespace app\controllers;

use \app\models\Reservation as Reservation;
use \app\models\Car as Car;
use \app\models\Brand as Brand;
use \app\models\CarType as CarType;
use \app\forms\CarForm as CarForm;
use \sys\core\Controller as Controller;
use \sys\core\View as View;
use \sys\lib\Status as Status;
use \app\models\User as User;

class Cars extends Controller {

    public function __construct() {
        parent::__construct(new Car());
    }

    public function index() {

        //Заполнена форма быстрой резервации по телефону
        if(isset($_POST['submit-reservation'])) {
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

        $brandModel = new Brand();
        //$brands = $brandModel->get_all_brands();
        $brands = $brandModel->get_all_used_brands();
        $cars = $this->model->get_full_cars_info();
        $brandId = -1;
        // Car Types:
        $carTypeModel = new CarType();
        $carTypes = $carTypeModel->get_all_car_types();

        
        //
        if(isset($_POST['submit-filter'])) {
            $brandId = $_POST['brand'];
            if($brandId != -1) {
                $cars = $this->model->get_full_cars_info_by_brand($brandId);
            }
        }
        //
        return new View('cars/index.php', [
            'title' => 'Cars Catalog',
            'cars' => $cars,
            'brands' => $brands,
            'brandId' => $brandId,
            'carTypes' => $carTypes
        ]);
    }

    public function redirect() {

        return new View('cars/redirect.php', [
            'title' => 'Redirect'
        ]);
    }

    // [ACCESS]
    public function create() {

        if(!Status::check_access()) {
            return new View('errors/forbidden.php', [
                'title' => ' Page 403'
            ]);
        } else {
            $propValues = [
                'brandId' => '',
                'model' => '',
                'transmissionId' => '',
                'about' => '',
                'image' => '',
                'year' => '',
                'mileage' => '',
                'price' => ''
            ];
            $form = new CarForm('Adding New Car', 'Add', $propValues);
            // get:
            if(empty($_POST['submit'])) {
                return new View('cars/create.php', [
                    'title' => 'Adding Car',
                    'form' => $form
                ]);
            } else {
                //post:
                $form->fill();
                // imageUpload:
                //-------------
                $imgFile = $form->fields[4]->fieldValue;

                $file = tempnam('app/uploads/img/cars', 'car-');
                $fileName = substr(basename($file), 0, -3); 
                $filePath = 'app/uploads/img/cars/'.$fileName.'jpg';
                unlink($file);
                move_uploaded_file($imgFile['tmp_name'], $filePath);
                
                $form->fields[4]->fieldValue = $filePath;
                //
                $propsArray = [];
                foreach($form->fields as $field) {
                    array_push($propsArray, $field->fieldValue);
                }
                array_push($propsArray, date("Y-m-d H:i:s"));
                $this->model->add_car($propsArray);
                //
                $this->redirect();
            }
        }

    }
    // [ACCESS]
    public function update($carId) {

        if(!Status::check_access()) {
            return new View('errors/forbidden.php', [
                'title' => ' Page 403'
            ]);
        } else {
            $car = $this->model->get_car_by_Id($carId);
            $propValues = [
                'brandId' => $car['brand_id'],
                'model' => $car['model'],
                'transmissionId' => $car['transmission_id'],
                'about' => $car['about'],
                'image' => $car['image'],
                'year' => $car['year'],
                'mileage' => $car['mileage'],
                'price' => $car['price']
            ];
            $form = new CarForm('Updating Car', 'Update', $propValues);
            // get:
            if(empty($_POST['submit'])) {
                return new View('cars/update.php', [
                    'title' => 'Updating Car',
                    'form' => $form
                ]);
            } else {
                //post:
                $form->fill();
                // imageUpload:
                //-------------

                $imgFile = $form->fields[4]->fieldValue;
                $filePath = $car['image'];
                if($imgFile['size'] != 0) {
                    unlink($car['image']);
                    $file = tempnam('app/uploads/img/cars', 'car-');
                    $fileName = substr(basename($file), 0, -3); 
                    $filePath = 'app/uploads/img/cars/'.$fileName.'jpg';
                    unlink($file);
                    move_uploaded_file($imgFile['tmp_name'], $filePath);
                }
                $form->fields[4]->fieldValue = $filePath;
                
                //
                $propsArray = [];
                foreach($form->fields as $field) {
                    array_push($propsArray, $field->fieldValue);
                }
                array_push($propsArray, date("Y-m-d H:i:s"));
                $this->model->edit_car($carId, $propsArray);
                //
                $this->redirect();
            }
        }
    }

    // [ACCESS]
    public function delete($carId) {
        if(!Status::check_access()) {
            return new View('errors/forbidden.php', [
                'title' => ' Page 403'
            ]);
        } else {
            $car = $this->model->get_car_by_Id($carId);
            $propValues = [
                'brandId' => $car['brand_id'],
                'model' => $car['model'],
                'transmissionId' => $car['transmission_id'],
                'about' => $car['about'],
                'image' => $car['image'],
                'year' => $car['year'],
                'mileage' => $car['mileage'],
                'price' => $car['price']
            ];
            $form = new CarForm('Deleting Car', 'Delete', $propValues);
            // get:
            if(empty($_POST['submit'])) {
                return new View('cars/delete.php', [
                    'title' => 'Deleting Car',
                    'form' => $form
                ]);
            } else {
                unlink($car['image']);
                $this->model->del_car($carId);
                //
                $this->redirect();
            }
        }
    }

    
} 