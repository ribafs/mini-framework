![MVC-APP - A little PHP MVC application]

# MVC-APP

A little PHP MVC application created on MINI3 (an extremely simple and easy to understand skeleton PHP application, reduced to the max).
APP-MVC is NOT a professional framework and it does not come with all the stuff real frameworks have.
If you just want to show some pages, do a few database calls then APP-MVC might be very useful for you.
Easy to install, runs nearly everywhere and doesn't make things more complicated than necessary.

MINI3 (https://github.com/panique/mini3) is an excellent and improved version of the original MINI, made by [JaoNoctus](https://github.com/JaoNoctus). Big thanks, man! :)


## Features

- extremely simple, easy to understand
- simple but clean structure
- makes "beautiful" clean URLs
- demo CRUD actions: Create, Read, Update and Delete database entries easily
- tries to follow PSR coding guidelines
- uses PDO for any database requests, comes with an additional PDO debug tool to emulate your SQL statements
- commented code
- uses only native PHP code, so people don't have to learn a framework
- uses PSR-4 autoloader

## Requirements

- PHP 5.6 or PHP 7.0
- MySQL
- mod_rewrite activated (see below for tutorials)
- basic knowledge of PHPOO and Composer for sure
- Uses dependencies:
	- fzaninotto/faker
	- robmorgan/phinx

## Security

The script makes use of mod_rewrite and blocks all access to everything outside the /public folder.
Your .git folder/files, operating system temp files, the application-folder and everything else is not accessible
(when set up correctly). For database requests PDO is used, so no need to think about SQL injection (unless you
are using extremely outdated MySQL versions).

## Goodies

MINI3 comes with a little customized [PDO debugger tool](https://github.com/panique/pdo-debug) (find the code in
application/libs/helper.php), trying to emulate your PDO-SQL statements. It's extremely easy to use:

```php
$sql = "SELECT id, artist, track, link FROM song WHERE id = :song_id LIMIT 1";
$query = $this->db->prepare($sql);
$parameters = array(':song_id' => $song_id);

echo Helper::debugPDO($sql, $parameters);

$query->execute($parameters);
```

## License

This project is licensed under the MIT License.
This means you can use and modify it for free in private or commercial projects.

## Quick-Start

#### The structure in general

The application's URL-path translates directly to the controllers (=files) and their methods inside
application/controllers.

`http://localhost/app-mvc/customers/index` will do what the *index()* method in application/Controller/CustomersController.php says.

`http://localhost/app-mvc/customers` will do what the *index()* method in application/Controller/CustomersController.php says.

`http://localhost/app-mvc` will do what the *index()* method in application/Controller/HomeController.php says (default fallback).

`http://localhost/products` will do what the *index()* method in application/Controller/ProductsController.php says.

`http://localhost/products/edit/17` will do what the *edit()* method in application/Controller/ProductsController.php says and
will pass `17` as a parameter to it.

Self-explaining, right ?

#### Showing a view

Let's look at the edit()-method in the customers-controller (application/Controller/CustomersController.php): This simply shows
the header, footer and the edit.php page (in views/customers/). By intention as simple and native as possible.

```php
public function edit()
{
    // load view
    require APP . 'views/_templates/header.php';
    require APP . 'views/customers/edit.php';
    require APP . 'views/_templates/footer.php';
}
```  

#### Working with data

Let's look into the index()-method in the customers-controller (application/Controller/ControllersController.php): Similar to exampleOne, but here we also request data. Again, everything is extremely reduced and simple: $Customer->getAllCustomers() simply
calls the getAllCustomers()-method in application/Model/Customer.php (when $Customer = new Customer()).

```php
namespace Mvc\Controller

use Mvc\Model\Customer;

class CustomersController
{
    public function index()
    {
        // Instance new Model (Customer)
        $Customer = new Customer();
        // getting all customers and amount of customers
        $customers = $Customer->getAllCustomers();
        $amount_of_customers = $Customer->getAmountOfCustomers();

        // load view. within the view files we can echo out $customers and $amount_of_customers easily
        require APP . 'views/_templates/header.php';
        require APP . 'views/customers/index.php';
        require APP . 'views/_templates/footer.php';
    }
}
```

For extreme simplicity, data-handling methods are in application/model/ClassName.php. Have a look how getAllCustomers() in model.php looks like: Pure and super-simple PDO.

```php
namespace Mvc\Model

use Mvc\Core\Model;

class Customer extends Model
{
    public function getAllCustomers()
    {
        $sql = "SELECT id, name, email, birthday FROM customers";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }
}
```

The result, here $customers, can then easily be used directly
inside the view files (in this case application/views/customers/index.php, in a simplified example):

```php
<tbody>
<?php foreach ($customers as $customer) { ?>
    <tr>
        <td><?php if (isset($customer->name)) echo htmlspecialchars($customer->name, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($customer->email)) echo htmlspecialchars($customer->email, ENT_QUOTES, 'UTF-8'); ?></td>
    </tr>
<?php } ?>
</tbody>
```

## Contribute

Please commit into the develop branch (which holds the in-development version), not into master branch
(which holds the tested and stable version).

## Other stuff

And by the way, I'm also blogging at [Dev Metal](http://www.dev-metal.com) :)

## Support the MINI3 project

Rent your next server at [1&1](http://www.kqzyfj.com/click-8225476-12015878-1477926464000) to support this open source project.
