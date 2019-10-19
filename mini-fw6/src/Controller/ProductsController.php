<?php

/**
 * Class ProductsController
 * This is a demo Controller class.
 *
 * If you want, you can use multiple Models or Controllers.
 *
 */

declare(strict_types = 1);

namespace Mini\Controller;
use Mini\Model\ProductsModel;
use Mini\View\ProductsView;

class ProductsController
{

    /**
     * PAGE: index
     * This method handles what happens when you move to http://localhost/mini-fw/products/index
     */
    public function index()
    {
		// View products/index send request to Router, it request ProductsContoller/index, it request model Products/getAllProducts,
		// it response to ProductsContoller/index, it response to View products/index finally
        // Instance new Model (Products)
        $Products = new ProductsModel();
        // getting all products and amount of products to use in view products/index
        $products = $Products->getAllProducts();
        $amount_of_products = $Products->getAmountOfProducts();

       // load views. within the views we can echo out $products and $amount_of_products easily
		$view = new ProductsView();
		$view->index('products','index',$products,$amount_of_products);
    }

    /**
     * ACTION: add
     * This method handles what happens when you move to http://localhost/mini-fw/products/add
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "add a product" form on product s/index
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to product s/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function add()
    {
        // if we have POST data to create a new product entry. If button 'submit_add_product' in view products/index has clicked
        if (isset($_POST['submit_add_product'])) {
            // Instance new Model (Products)
            $Products = new ProductsModel();
            // do add() in model/Products.php
            $Products->add($_POST['description'], $_POST['unity'],  $_POST['date']);
	        // where to go after Products has been added
	        header('location: ' . URL . 'products/index');	
        }

        // load views. within the views we can echo out $product easily
		$view = new ProductsView();
		$view->add('products','add');
    }

    /**
     * ACTION: delete
     * This method handles what happens when you move to http://localhost/mini-fw/products/delete
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "delete a product" button on products/index
     * directs the user after the click. This method handles all the data from the GET request (in the URL!) and then
     * redirects the user back to products/index via the last line: header(...)
     * This is an example of how to handle a GET request.
     * @param int $product_id Id of the to-delete  product
     */
    public function delete($product_id)
    {
		// View products/index send request to Router, it request ProductsContoller/delete, it request model Products/delete,
		// it response to ProductsContoller/delete, it response/redirect to View products/index finally

        // if we have an id of a product that should be deleted
        if (isset($product_id)) {
            // Instance new Model (Products)
            $Products = new ProductsModel();
            // do delete() in model/model.php
            $Products->delete($product_id);
        }

        // where to go after product has been deleted
        header('location: ' . URL . 'products/index');
    }

     /**
     * ACTION: edit
     * This method handles what happens when you move to http://localhost/mini-fw/products/edit
     * @param int $product_id Id of the to-edit product
     */
    public function edit($product_id)
    {
        // if we have an id of a product that should be edited
        if (isset($product_id)) {
            // Instance new Model (Products)
            $Products = new ProductsModel();
	        $products = $Products->getAllProducts();

            // do getProducts() in model/model.php
            $product = $Products->getProduct($product_id);

            // If the product wasn't found, then it would have returned false, and we need to display the error page
            if ($product === false) {
                $page = new \Mini\Controller\ErrorController();
                $page->index();
            } else {
                // load views. within the views we can echo out $product easily
				$view = new ProductsView();
				$view->edit('products','edit',$products, $product);
            }
        } else {
            // redirect user to Products index page (as we don't have a product_id)
            header('location: ' . URL . 'products/index');
        }
    }

    /**
     * ACTION: update
     * This method handles what happens when you move to http://localhost/mini-fw/products/update
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "update a product" form on products/edit
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to products/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function update()
    {
        // if we have POST data to create a new product entry
        if (isset($_POST['submit_update_product'])) {
            // Instance new Model (Products)
            $Products = new ProductsModel();
            // do update() from model/model.php
            $Products->update($_POST['description'], $_POST['unity'],  $_POST['date'], $_POST['product_id']);
        }

        // where to go after product has been added
        header('location: ' . URL . 'products/index');
    }
}
