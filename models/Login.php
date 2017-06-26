<?php
/**
 * AccessControl
 */

namespace app\classes;

class Login
{

    public $access_data		=	array();
    public $access_logged	=	false;
    public $access_errors 	=	null;

    public function check_session()
    {

    }

    public function check_userlogin()
    {

        if(isset($_POST['form_login'])) {

        }

        if(isset($_GET['logout'])) {

        }

        if(isset($_SESSION[KEY])) {

        }



    }

    public function logout($redirect = false)
    {
        return;
    }

}