<?php
/**
 * MainController
 */

namespace app\base;

class Controller
{
	
	public $db;
	public $view;
	public $title = 'Title Base Controller';
	public $login_required = true;
	public $level_required = 0;
	public $params = array();

	private $model;

	public function __construct($params = array())
	{
		$this->db = new DB();

		$this->params = $params;
		//$this->check_userlogin();
	}

	public final function render($view)
	{
	    if(!$view) return;



//	    if(file_exists('./views/'.))

		return;
	}

	public final function load_model($model=false)
	{
		if(!$model) return;

		$this->model = $model;

		if(file_exists('./models/'.$this->model.'.php')) {
			require_once './models/'.$this->model.'.php';
			if(class_exists($this->model)) {
				return new $this->model($this->db,$this);
			}
			return;
		}
		return;
	}
}