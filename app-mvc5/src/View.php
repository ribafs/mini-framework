<?php
// Used in methods from controllers to views

declare(strict_types = 1);

namespace Mvc;

class View{

	public function index($controller, $action, $customers,$amount_of_customers){

        require APP . 'view/_templates/header.php';
        require APP . 'view/'.$controller.'/'.$action.'.php';
        require APP . 'view/_templates/footer.php';
	}

	public function edit($controller, $action, $customers,$customer){

        require APP . 'view/_templates/header.php';
        require APP . 'view/'.$controller.'/'.$action.'.php';
        require APP . 'view/_templates/footer.php';
	}

	public function add($controller, $action){

        require APP . 'view/_templates/header.php';
        require APP . 'view/'.$controller.'/'.$action.'.php';
        require APP . 'view/_templates/footer.php';
	}

}

