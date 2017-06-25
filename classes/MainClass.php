<?php

/**
* Classe Projeto
*/


class MainClass
{

	private $controller; 
	private $controllerClass;
	private $action;
	private $params;

	
	public function __construct()
	{
		$this->get_routes();

		if(!$this->controller)
		{
			require_once './controllers/LoginController.php';
			$this->controller = new LoginController();
			$this->controller->IndexAction();
			return;
		} else {
			return;
		}
	}

	public function get_routes()
	{
		if(isset($_GET['url']))
		{
			$url = $_GET['url'];
			$url = rtrim($url,'/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);

			//Formato da URL 
			// http://localhost/mvc/index.php/controller/action/params/params/...
			
			//Controller
			$this->controller = check_array($url,0);
			$this->controller .= 'Controller';

			//Action
			$this->action = check_array($url,1);
			$this->action .= 'Action';

			if(check_array($url,2))
			{
				unset($url[0]);
				unset($url[1]);
				$this->params = array_values($url);
			}

            if(DEBUG)
            {
	            echo $this->controller . '<br>';
	            echo $this->action        . '<br>';
	            echo '<pre>';
	            print_r( $this->params );
	            echo '</pre>';
            }
		}
	}

}