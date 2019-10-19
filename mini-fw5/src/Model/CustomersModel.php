<?php

/**
 * Class Customer s
 * This is a demo Model class.
 *
 */

declare(strict_types = 1);

namespace Mini\Model;

use Mini\Core\Model;
use Mini\Libs\Helper;

class CustomersModel extends Model
{

    /**
     * Get all customers from database
     */
    public function getAllCustomers()
    {
        $sql = 'SELECT id, name, email, birthday FROM customers ORDER BY id DESC';
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...

        return $query->fetchAll();
    }

    /**
     * Add a customer to database
     * TODO put this explanation into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $name Name
     * @param string $email E-amil
     * @param string $birthday Birthday
     */
    public function add($name, $email, $birthday)
    {
        $sql = 'INSERT INTO customers (name, email, birthday) VALUES (:name, :email, :birthday)';
        $query = $this->db->prepare($sql);
        $parameters = array(':name' => $name, ':email' => $email, ':birthday' => $birthday);

        // UNCOMMENT THE LINE BALOW, useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Delete a customer in the database
     * Please note: this is just an example! In a real application you would not simply let everybody
     * add/update/delete stuff!
     * @param int $customer_id Id of  customer
     */
    public function delete($customer_id)
    {
        $sql = 'DELETE FROM customers WHERE id = :customer_id';
        $query = $this->db->prepare($sql);
        $parameters = array(':customer_id' => $customer_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get a customer from database
     * @param integer $customer_id
     */
    public function getCustomer($customer_id)
    {
        $sql = 'SELECT id, name, email, birthday FROM customers WHERE id = :customer_id LIMIT 1';
        $query = $this->db->prepare($sql);
        $parameters = array(':customer_id' => $customer_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // fetch() is the PDO method that get exactly one result
        return ($query->rowcount() ? $query->fetch() : false);
    }

    /**
     * Update a customer in database
     * // TODO put this explaination into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $name Name
     * @param string $temail E-mail
     * @param string $birthday Birthday
     * @param int $customer_id Id
     */
    public function update($name, $email, $birthday, $customer_id)
    {
        $sql = 'UPDATE customers SET name = :name, email = :email, birthday = :birthday WHERE id = :customer_id';
        $query = $this->db->prepare($sql);
        $parameters = array(':name' => $name, ':email' => $email, ':birthday' => $birthday, ':customer_id' => $customer_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get simple "stats". This is just a simple demo to show
     * how to use more than one model in a controller (see application/controller/customres.php for more)
     */
    public function getAmountOfCustomers()
    {
        $sql = 'SELECT COUNT(id) AS amount_of_customers FROM customers';
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result

        return $query->fetch()->amount_of_customers;
    }
}
