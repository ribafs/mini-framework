## Estrutura de Arquivos e diretórios

Iremos criar a seguinte estrutura de diretórios e arquivos (vazios por enquanto)

/var/www/html/app-mvc
    /src
		/config
		/Controller
		/Core
		/Libs
		/Model
		/view
    /public
    /db


Detalhando:

```php
/app-mvc
    /src
		bootstrap.php
        /config/
            config.php
        /Controller/
            CustomersController.php
            ErrorController.php
            HomeController.php  
        /Core/
            Model.php
            Route.php
        /Libs/
            Helper.php
        /Model/
            Customer.php
            Product.php    
        /view/
            /customers
                edit.php
                index.php
            /error
                index.php
            /home
                index.php
            /_templates
                footer.php
                header.php
    /db
        /migrations
        /seeds
    /public
        /css
        /images
        /js
        index.php
        .htaccess
composer.json
.htaccess
```


