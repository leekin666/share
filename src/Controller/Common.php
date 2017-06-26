<?php

namespace Bike\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class Common extends AbstractController
{

    // public function __construct()
    // {
        //$this->checkLogin();
       //new AbstractController;

    // }

    public function checkLogin()
    {
		if (!isset($_SESSION['LOGIN_ADMIN'])) {
            header('Location : /login.html');
        }else{
            return true;
        }
    }

    public function iterator_array($obj) 
    {
        foreach($obj as $row) {
            $ret[] = iterator_to_array($row); 
        }
        return $ret;
    }




}
