<?php

/**
 * Class HomeController
 *
 *
 */

declare(strict_types = 1);

namespace Mini\Controller;

class HomeController
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://localhost/mini-fw/home/index (which is the default page btw)
     */
    public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }

}

