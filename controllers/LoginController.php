<?php

/**
* 
*/
class LoginController extends MainController
{
	public $title;
	public $login_required = false;
	public $level_required = 0;
	public $params = array();

	public function IndexAction()
	{
		$this->title = 'Acesso ao Sistema';
		$this->login_required = false;
		$this->level_required = 0;

		// $stm = $this->db->prepare('SELECT * FROM user');
		// $stm->execute();
		// $luser = $stm->fetchAll(PDO::FETCH_ASSOC);
		

		print_r($luser);

		require_once './views/login/index.php';
	}
}