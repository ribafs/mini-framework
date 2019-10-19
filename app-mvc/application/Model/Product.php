<?php

/**
 * Class Product
 * This is a demo Model class.
 *
 */

namespace Mvc\Model;

use Mvc\Core\Model;

class Product extends Model
{
    /**
     * Get all Products from database
     */
    public function getAllProducts()
    {
        $sql = "SELECT id, description, unity, date FROM products";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

    /**
     * Add a Product to database
     * TODO put this explanation into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $description Description
     * @param string $unity Unity
     * @param string $date Date
     */
    public function add($description, $unity, $date)
    {
        $sql = "INSERT INTO products (description, unity, date) VALUES (:description, :unity, :date)";
        $query = $this->db->prepare($sql);
        $parameters = array(':description' => $description, ':unity' => $unity, ':date' => $date);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Delete a product in the database
     * Please note: this is just an example! In a real application you would not simply let everybody
     * add/update/delete stuff!
     * @param int $product_id Id of product
     */
    public function delete($product_id)
    {
        $sql = "DELETE FROM products WHERE id = :product_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':product_id' => $product_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get a product from database
     * @param integer $product_id
     */
    public function getProduct($product_id)
    {
        $sql = "SELECT id, description, unity, date FROM products WHERE id = :product_id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':product_id' => $product_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // fetch() is the PDO method that get exactly one result
        return ($query->rowcount() ? $query->fetch() : false);
    }

    /**
     * Update a product in database
     * // TODO put this explaination into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $name Name
     * @param string $email E-mail
     * @param string $birthday Birthday
     * @param int $product_id Id
     */
    public function update($description, $unity, $date, $product_id)
    {
        $sql = "UPDATE products SET description = :description, unity = :unity, date = :date WHERE id = :product_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':description' => $description, ':unity' => $unity, ':date' => $date, ':product_id' => $product_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get simple "stats". This is just a simple demo to show
     * how to use more than one model in a controller (see application/controller/songs.php for more)
     */
    public function getAmountOfProducts()
    {
        $sql = "SELECT COUNT(id) AS amount_of_products FROM products";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_products;
    }

}
