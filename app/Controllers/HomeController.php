<?php

namespace Egysatria\Controllers;

use Egysatria\Models\Users;
use Slim\Views\Twig as View;

class HomeController extends Controller
{

	public function index($request, $response)
	{
		return $this->view->render($response, 'home.twig');
	}

}