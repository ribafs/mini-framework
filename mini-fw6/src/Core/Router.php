<?php
/** For more info about namespaces plase @see http://php.net/manual/en/language.namespaces.importing.php */

declare(strict_types = 1);

namespace Mini\Core;

class Router
{
    /** @var null The controller */
    private $urlController = null;

    /** @var null The method (of the above controller), often also named "action" */
    private $urlAction = null;

    /** @var array URL parameters */
    private $urlParams = array();

    /**
     * "Start" the application:
     * Analyze the URL elements and calls the according controller/method or the fallback
     */
    public function __construct()
    {
        // create array with URL parts in $url
        $this->splitUrl();

        // check for controller: no controller given ? then load start-page
        if (!$this->urlController) {
			// if none controller is found call HomeController with index action
//            $page = new \Mini\Controller\HomeController(); // In mini3
			$controllerDefault = '\\Mini\\Controller\\' . CONTROLLER_DEFAULT . 'Controller';
			$page = new $controllerDefault;
            $page->index();

		// if encounter a controller
        } elseif (file_exists(APP . 'Controller/' . ucfirst($this->urlController) . 'Controller.php')) {
            // here we did check for controller: does such a controller exist ?

            // if so, then load this file and create this controller
            // like \Mini\Controller\CustomersController
            $controller = '\\Mini\\Controller\\' . ucfirst($this->urlController) . 'Controller';
            $this->urlController = new $controller();

            // check for method: does such a method exist in the controller ?
			// if exists method and if is callable method
            if (method_exists($this->urlController, $this->urlAction) && is_callable(array($this->urlController, $this->urlAction))) {
                
				// check if params is d'ont empty
                if (!empty($this->urlParams)) {
                    // if exists Call the method and pass arguments to it
                    call_user_func_array(array($this->urlController, $this->urlAction), $this->urlParams);
                } else {
                    // If no parameters are given, just call the method without parameters, like $this->home->method();
                    $this->urlController->{$this->urlAction}();
                }

			// if none method is found
            } else {
                if (strlen($this->urlAction) == 0) {
                    // no action defined: call the default index() method of a selected controller
                    $this->urlController->index();

				// otherwise fire ErrorController
                } else {
					$action = $this->urlAction;
					$contr = explode('\\',$controller);// Capture ucfirst($this->urlController) in [3]
                    $page = new \Mini\Controller\ErrorController();
                    $page->index($contr[3],$action);
                }
            }

		// if none controller is found fire ErrorController
        } else {
			$controller = $this->urlController;
			$action = $this->urlAction;
            $page = new \Mini\Controller\ErrorController();
//            $page->index($controller,$action);
            $page->index(ucfirst($controller).'Controller',$action);
        }
    }

    /**
     * Get and split the URL
     */
    private function splitUrl()
    {
		// check if url is isset
        if (isset($_GET['url'])) {

            // split URL
            $url = trim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            // Put URL parts into according properties
            // By the way, the syntax here is just a short form of if/else, called "Ternary Operators"
            // @see http://davidwalsh.name/php-shorthand-if-else-ternary-operators
            $this->urlController = isset($url[0]) ? $url[0] : null;
            $this->urlAction = isset($url[1]) ? $url[1] : 'index';// era null

            // Remove controller and action from the split URL
            unset($url[0], $url[1]);

            // Rebase array keys and store the URL params
            $this->urlParams = array_values($url);

            // For DEBUGGING uncomment lines below if you have problems with the URL
            // echo 'Controller: ' . ucfirst($this->urlController) . '<br>';
            // echo 'Action: ' . $this->urlAction . '<br>';
            // echo 'Parameters: ' . print_r($this->urlParams, true) . '<br>';
        }
    }
}

