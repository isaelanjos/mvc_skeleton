<?php

/**
* Classe Projeto
*/

class MainClass
{

	public $controller; 
	public $action;
	public $params;

	
	public function __construct()
	{
		$this->get_routes();

		if(!$this->controller) {
			require_once './controllers/LoginController.php';
			$this->controller = new LoginController();
			$this->controller->IndexAction();
			return;
		} else {
			if(!file_exists('./controllers/'.$this->controller.'.php')) {
				require_once './includes/404-controller.php';
				return;
			} else {
				require_once './controllers/'.$this->controller.'.php';
				if(!class_exists($this->controller)) {
					require_once './includes/404-class.php';
					return;
				} else {
					$this->controller = new $this->controller($this->params);
					if(!$this->action) {
						if(!method_exists($this->controller, 'IndexAction')) {
							require_once './includes/404-method.php';
							return;
						} else {
							$this->controller->IndexAction($this->params);
							return;	
						}						
					} else {
						if(!method_exists($this->controller, $this->action)) {
							require_once './includes/404-method.php';
							return;
						}else {
							$this->controller->{$this->action}($this->params);
							return;
						}
					}
					
				}
			}
		}


	}

	public function get_routes()
	{
		if(isset($_GET['url'])) {

			$url = $_GET['url'];
			$url = rtrim($url,'/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);

			//Formato da URL 
			// http://localhost/mvc/index.php/controller/action/params/params/...
			
			//Controller
			$this->controller = check_array($url,0);
			if($this->controller) $this->controller .= 'Controller';

			//Action
			$this->action = check_array($url,1);
			if($this->action) $this->action .= 'Action';

			if(check_array($url,2)) {
				unset($url[0]);
				unset($url[1]);
				$this->params = array_values($url);
			}

            if(DEBUG) {
	            echo $this->controller . '<br>';
	            echo $this->action        . '<br>';
	            echo '<pre>';
	            print_r( $this->params );
	            echo '</pre>';
            }

		}

		return;
	}

}