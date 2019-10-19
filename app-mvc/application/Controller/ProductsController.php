<?php

/**
 * Class ProductsController
 * This is a demo Controller class.
 *
 * If you want, you can use multiple Models or Controllers.
 *
 *
 */

namespace Mvc\Controller;

use Mvc\Model\Product;

class ProductsController
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://localhost/app-mvc/index
     */
    public function index()
    {
        // Instance new Model (Product)
        $Product = new Product();
        // getting all products and amount of products
        $products = $Product->getAllProducts();
        $amount_of_products = $Product->getAmountOfProducts();

       // load views. within the views we can echo out $products and $amount_of_products easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/products/index.php';
        require APP . 'view/_templates/footer.php';
    }

    /**
     * ACTION: add
     * This method handles what happens when you move to http://localhost/app-mvc/add
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "add a product" form on products/index
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to products/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function add()
    {
        // if we have POST data to create a new product entry
        if (isset($_POST["submit_add_product"])) {
            // Instance new Model (Product)
            $Product = new Product();
            // do add() in model/model.php
            $Product->add($_POST["description"], $_POST["unity"],  $_POST["date"]);
        }

        // where to go after Product has been added
        header('location: ' . URL . 'products/index');
    }

    /**
     * ACTION: delete
     * This method handles what happens when you move to http://localhost/app-mvc/delete
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "delete a product" button on products/index
     * directs the user after the click. This method handles all the data from the GET request (in the URL!) and then
     * redirects the user back to customers/index via the last line: header(...)
     * This is an example of how to handle a GET request.
     * @param int $product_id Id of the to-delete product
     */
    public function delete($product_id)
    {
        // if we have an id of a Product that should be deleted
        if (isset($product_id)) {
            // Instance new Model (Product)
            $Product = new Product();
            // do delete() in model/model.php
            $Product->delete($product_id);
        }

        // where to go after product has been deleted
        header('location: ' . URL . 'products/index');
    }

     /**
     * ACTION: edit
     * This method handles what happens when you move to http://localhost/app-mvc/edit
     * @param int $product_id Id of the to-edit product
     */
    public function edit($product_id)
    {
        // if we have an id of a Product that should be edited
        if (isset($product_id)) {
            // Instance new Model (Product)
            $Product = new Product();
            // do getProductr() in model/model.php
            $product = $Product->getProduct($product_id);

            // If the Product wasn't found, then it would have returned false, and we need to display the error page
            if ($product === false) {
                $page = new \Mini\Controller\ErrorController();
                $page->index();
            } else {
                // load views. within the views we can echo out $product easily
                require APP . 'view/_templates/header.php';
                require APP . 'view/products/edit.php';
                require APP . 'view/_templates/footer.php';
            }
        } else {
            // redirect user to Products index page (as we don't have a product_id)
            header('location: ' . URL . 'products/index');
        }
    }

    /**
     * ACTION: update
     * This method handles what happens when you move to http://localhost/app-mvc/update
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "update a product" form on products/edit
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to products/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function update()
    {
        // if we have POST data to create a new Product entry
        if (isset($_POST["submit_update_product"])) {
            // Instance new Model (Product)
            $Product = new Product();
            // do update() from model/model.php
            $Product->update($_POST["description"], $_POST["unity"],  $_POST["date"], $_POST['product_id']);
        }

        // where to go after Product has been added
        header('location: ' . URL . 'products/index');
    }

}
