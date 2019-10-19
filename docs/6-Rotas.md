## Rotas
Roteamento é o que acontece quando uma aplicação determina qual controller e action será executado baseado em uma URL requisitada.

Uma rota é um caminho para acessar um recurso através da composição de uma URL válida.


Exemplo:
O framework recebe a URL http://localhost/users/list.html e executa o controller Users e o action list().

Nós precisamos ser hábeis para processar qualquer rota que não case com as que nós definimos para existentes controllers e actions ou mostrar uma mensagem de erro apropriada.

Como uma requisição/request é atendida por uma resposta/response:

- A requisição é recebida pela aplicação
- A aplicação quebra a requisição em seus componentes: métodos (GET, POST, etc), host, path, etc.
- A aplicação procura por uma rota definida que case com a requisição
- Logo que encontre ela determina o controller e o action para atendê-la/response


Rotas não semânticas estão desatualizadas. Não existe razão para um usuário ver uma longa cadeia de query strings na URL. URLs assim não são fáceis de memorizar e expoem a configuração do servidor.

Uma classe para roteamento deve ser capaz de distinguir o tipo de HTTP request. Um request tipo GET requisita geralmente o retorno de um ou mais recursos.
O tipo POST cria um novo recurso.
PUP ou PATCH atualiza um existente.
DELETE remove um recurso existente.

### Protocolo HTTP

Ele é responsável por prover uma interface uma interface para a web. Ele permite que ocorra a troca de dados entre um dispositivo cliente e um servidor.

Quando um cliente faz um pedido de uma página (ou qualquer outro recurso) para um servidor que “fala” HTTP, ele está fazendo um Request. O servidor por sua vez tem a habilidade de compreender esse pedido e responder a ele com um Response. Esse ciclo se repete o tempo todo e quando você programa em PHP passa boa parte do tempo fazendo isso acontecer.

A PSR-7 (https://www.php-fig.org/psr/psr-7/) é a especificação de um conjunto de métodos que podem vir a ser usados para gerenciar Requests, Responses, Messages, e etc.

As Messages serão montadas no cliente para compor um Request informando alguns dados, em especial o método (Method) e que as Responses serão criadas no servidor respondendo no mesmo método.

Os métodos HTTP mais comuns são GET e POST.

Quanto mais simples para o desenvolvedor mais popular a ferramenta se torna, mas note que sempre tem um custo simplificar algo.


### Exemplo bem simples:
https://github.com/azeemhassni/simplest-php-router 

Crie uma pasta em seu diretório web com os arquivos:

index.php
router.php

index.php
```php
<?php
require_once "router.php";

route('/', function () {
    return "Hello World";
});

route('/about', function () {
    return "Hello form the about route";
});

$action = $_SERVER['REQUEST_URI'];
dispatch($action);
```

router.php
```php
<?php
/**
 * Holds the registered routes
 *
 * @var array $routes
 */
$routes = [];

/**
 * Register a new route
 *
 * @param $action string
 * @param \Closure $callback Called when current URL matches provided action
 */
function route($action, Closure $callback)
{
    global $routes;
    $action = trim($action, '/');
    $routes[$action] = $callback;
}

/**
 * Dispatch the router
 *
 * @param $action string
 */
function dispatch($action)
{
    global $routes;
    $action = trim($action, '/');
    $callback = $routes[$action];

    echo call_user_func($callback);
}
```
Executar com:

php -S localhost:8080

http://localhost:8080
http://localhost:8080/about


Mais detalhes em:

https://phpzm.rocks/php-like-a-boss-3-construa-seu-router-e024ea32ee8a 
https://github.com/phpzm/like-a-boss-3 
https://www.taniarascia.com/the-simplest-php-router/ 
