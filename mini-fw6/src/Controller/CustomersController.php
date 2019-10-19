<?php

/**
 * Class CustomersController
 * This is a demo Controller class.
 *
 * If you want, you can use multiple Models or Controllers.
 *
 */

declare(strict_types = 1);

namespace Mini\Controller;
use Mini\Model\CustomersModel;
use Mini\View\CustomersView;

class CustomersController
{

    /**
     * PAGE: index
     * This method handles what happens when you move to http://localhost/mini-fw/customers/index
     */
    public function index()
    {
		// View customers/index send request to Router, it request CustomersContoller/index, it request model Customer/getAllCustomers,
		// it response to CustomersContoller/index, it response to View customers/index finally
        // Instance new Model (Customers)
        $Customer = new CustomersModel();
        // getting all customers and amount of customers to use in view customers/index
        $customers = $Customer->getAllCustomers();
        $amount_of_customers = $Customer->getAmountOfCustomers();

       // load views. within the views we can echo out $customers and $amount_of_customers easily
		$view = new CustomersView();
		$view->index('customers','index',$customers,$amount_of_customers);
    }

    /**
     * ACTION: add
     * This method handles what happens when you move to http://localhost/mini-fw/customers/add
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "add a customer" form on customer s/index
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to customer s/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function add()
    {
        // if we have POST data to create a new customer entry. If button 'submit_add_customer' in view customers/index has clicked
        if (isset($_POST['submit_add_customer'])) {
            // Instance new Model (Customers)
            $Customer = new CustomersModel();
            // do add() in model/Customer.php
            $Customer->add($_POST['name'], $_POST['email'],  $_POST['birthday']);
	        // where to go after Customer has been added
	        header('location: ' . URL . 'customers/index');	
        }

        // load views. within the views we can echo out $customer easily
		$view = new CustomersView();
		$view->add('customers','add');
    }

    /**
     * ACTION: delete
     * This method handles what happens when you move to http://localhost/mini-fw/customers/delete
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "delete a customer" button on customers/index
     * directs the user after the click. This method handles all the data from the GET request (in the URL!) and then
     * redirects the user back to customers/index via the last line: header(...)
     * This is an example of how to handle a GET request.
     * @param int $customer_id Id of the to-delete  customer
     */
    public function delete($customer_id)
    {
		// View customers/index send request to Router, it request CustomersContoller/delete, it request model Customer/delete,
		// it response to CustomersContoller/delete, it response/redirect to View customers/index finally

        // if we have an id of a customer that should be deleted
        if (isset($customer_id)) {
            // Instance new Model (Customers)
            $Customer = new CustomersModel();
            // do delete() in model/model.php
            $Customer->delete($customer_id);
        }

        // where to go after customer has been deleted
        header('location: ' . URL . 'customers/index');
    }

     /**
     * ACTION: edit
     * This method handles what happens when you move to http://localhost/mini-fw/customers/edit
     * @param int $customer_id Id of the to-edit customer
     */
    public function edit($customer_id)
    {
        // if we have an id of a customer that should be edited
        if (isset($customer_id)) {
            // Instance new Model (Customers)
            $Customer = new CustomersModel();
	        $customers = $Customer->getAllCustomers();

            // do getCustomer() in model/model.php
            $customer = $Customer->getCustomer($customer_id);

            // If the customer wasn't found, then it would have returned false, and we need to display the error page
            if ($customer === false) {
                $page = new \Mini\Controller\ErrorController();
                $page->index();
            } else {
                // load views. within the views we can echo out $customer easily
				$view = new CustomersView();
				$view->edit('customers','edit',$customers, $customer);
            }
        } else {
            // redirect user to Customers index page (as we don't have a customer_id)
            header('location: ' . URL . 'customers/index');
        }
    }

    /**
     * ACTION: update
     * This method handles what happens when you move to http://localhost/mini-fw/customers/update
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "update a customer" form on customers/edit
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to customers/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function update()
    {
        // if we have POST data to create a new customer entry
        if (isset($_POST['submit_update_customer'])) {
            // Instance new Model (Customers)
            $Customer = new CustomersModel();
            // do update() from model/model.php
            $Customer->update($_POST['name'], $_POST['email'],  $_POST['birthday'], $_POST['customer_id']);
        }

        // where to go after customer has been added
        header('location: ' . URL . 'customers/index');
    }
}
