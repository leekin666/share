<?php

namespace Bike\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class Index extends AbstractController
{

    public function index(Request $request, Response $response)
    {
		$args = array('name' => "leesin");
        return $this->view->render('index.html',$args);
    }

    public function login(Request $request, Response $response)
    {
        return $this->view->render('Index/login.html');
    }

    public function getAdmin(Request $request, Response $response)
    {
    	$rs = $this->db->admin()->select('*');
        // $adminlist = $rs->toArray();
        // print_r($rs);die;
        $data = ['age'=>'ss'];
        return $this->view->render('Index/index.html',$data);
    	
    	// return $this->renderer->render($response, 'adminlist.html',$admins);
    }




}
