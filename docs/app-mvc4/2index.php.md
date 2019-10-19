## index.php
Criar a pasta
/var/www/html/app-mvc/public

E dentro dela o arquivo index.php

Este é o ponto de entrada do aplicativo/entry point, chamado de front controller. Contendo as linhas abaixo:

```php
<?php

declare(strict_types = 1);

require __DIR__ . '/../src/bootstrap.php';
```

