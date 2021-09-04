<?php

namespace app\controllers;

use \sys\core\View as View;
use \app\models\User as User;
use \sys\core\Controller as Controller;
use \app\forms\Regform as Regform;
use \app\forms\Entryform as Entryform;
use \sys\lib\Mailer as Mailer;

class Auth extends Controller {

    public function __construct() {
        parent::__construct(new User());
    }

    public function reg() {
        $form = new Regform();
        if (empty($_POST['submit'])){
            return new View('auth/reg.php', [
                'title' => 'Registration',
                'form'=>$form,
                'script' => View::RES.'/js/reg.js'
            ]);
        }else{
            //
            $form->fill();
            //
            $name=$form->fields[0]->fieldValue;
            $lastname=$form->fields[1]->fieldValue;
            $age=$form->fields[2]->fieldValue;
            $phone=$form->fields[3]->fieldValue;
            $email=$form->fields[4]->fieldValue;
            $passw =md5($form->fields[5]->fieldValue);
            
            $regdate = date('Y-m-d H:i:s');
            $role_id=3;
            $status_id=1;
            $email_confirm='no';
            //
            $this->model->register($name, $lastname, $phone, $email, $passw, $age, $regdate, $role_id, $status_id, $email_confirm);
            //
            //mail...
            $mailer = new Mailer($email);
            $mailer->send();

            
            $message = "<h4>You have successfully registered on the Car-Rental website!</h4><hr>";
            $message .="The corresponding letter has been sent to the $email address specified by you,";
            $message .=' which contains a link to confirm your registration.';
            
            $color="#721c24";
            //
            return new View('auth/reginfo.php',[
                'title'=>'Registration Info',
                'message'=>$message,
                'color'=>$color
            ]);
        }

    }

    public function entry() {

        $form = new Entryform();
        if(empty($_POST['submit'])) {
            return new View('auth/entry.php', [
                'title' => 'Authorization',
                'form' => $form
            ]);
        } else {
            // Сценарий авторизации
            $form->fill();
            //
            $email = $form->fields[0]->fieldValue;
            $passw = md5($form->fields[1]->fieldValue);
            $stand = $form->fields[2]->fieldValue;
            //
            $result = $this->model->authenticate($email,$passw);
            if($result !== '') {
                if($this->model->check_confirm($email)) {
                    $_SESSION['user'] = ['Name' => $result, 'Email' => $email];
                    if($stand === 'yes') {
                        setcookie('user', serialize(['Name' => $result, 'Email' => $email]), time() + 3600 * 24 * 7);
                    }
                    $message = 'You have succesfuly authorize on Car-Rental website!';
                    $color = 'black';
                } else {
                    $message = 'Authentification denied - Email not confirmed!';
                    $color = 'red';
                }
            } else {
                $message = 'Authentification denied - User not found!';
                $color = 'red';
            }
            //
            return new View('auth/entryinfo.php',[
                'title'=>'Authentification Report',
                'message'=>$message,
                'color'=>$color
            ]);

        }
    }

    public function confirm($email){
        $this->model->reg_confirm($email);
        return new View("auth/confirm.php",[
            'title'=>'Register-Confirm',
            'message'=>"User registration $email - confirmed successfully",
            'color'=>'black'

        ]);
    }

    public function recovery(){
        $this->model->reg_confirm($email);
        return new View("auth/confirm.php",[
            'title'=>'Password Recovery',
            'message'=>"On your email was sent your password!",
            'color'=>'black'

        ]);
    }

    public function profile() {
        return new View('auth/profile.php', [
            'title' => 'Profile'
        ]);
    }

    public function exit() {
        session_destroy();
        if(isset($_COOKIE['user'])) {
            setcookie('user','',time() - 3600);
        }
        return new View('auth/exit.php', [
            'title' => 'Exit'
        ]);
    }


    public function ajax_check_email() {
        $emailX = $_POST['email'];
        if($this->model->check_email($emailX)) {
            echo("Free");
        } else {
            echo ("Taken");
        }
    }
    public function ajax_check_phone() {
        $phoneX = $_POST['phone'];
        if($this->model->check_phone($phoneX)) {
            echo("Free");
        } else {
            echo ("Taken");
        }
    }
}