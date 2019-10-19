## Tratamento de Erros

### Possíveis causas de erros no sistema:

- Programar de maneira errada
- Esconder erros usando @ ou include ou setando no PHP.INI display_errors = off (recomendado on)

	Toda string deve ser delimitada por apóstrofos ('Ribamar'), caso contrário será confundida com uma constante

- Falta de uma lógica mais apurada e desenvolvida
- Não pensar nos usuários
- Falta de conhecimento na linguagem com a qual se está programando
- Falha por parte de hardware

### Usos da função rror_reporting()
```php
<?php 
// Desativa o relatório de todos os erros
error_reporting(0);
// Reporta erros simples
error_reporting(E_ERROR | E_WARNING | E_PARSE);
 
// Reportar E_NOTICE pode ser bom também (para reportar variáveis não iniciadas
// ou erros de digitação em nomes de variáveis ...)
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
 
// Reportar todos os erros exceto E_NOTICE
// Este é o valor padrão no php.ini
error_reporting(E_ALL ^ E_NOTICE);
 
// Reporta todos os erros (bitwise 63 deve ser usado no PHP 3)
error_reporting(E_ALL);
// O mesmo que error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
?>
```

### Recomendo deixar error_reporting(E_ALL), para mostrar todos os tipos de erros.

Para desenvolver, sempre deixe essas opções configuradas no php.ini:

- display_errors = On
- display_startup_errors = On
- error_reporting = E_ALL
- log_errors = On
- track_errors = On
- register_globals = Off

### Via script você pode fazer assim:
```php
<?php 
ini_set("display_errors", 1);
ini_set("log_errors", 1);
ini_set("error_reporting", E_ALL);
```

### Validações para evitar erros

Um bom tratamento de erros precisa prever vários tipos de erros e, pra isso, existem funções específicas, como por exemplo:

- file_exists – serve para verificar se um arquivo existe
- defined – serve para verificar se uma constante foi definida.
- isset – verifica se uma variável existe.
- is_array – verifica se a variável é um array
- is_resource – verifica se a variável é um resource
- is_numeric – verifica se a variável é um número ou uma string numérica.
- is_uploaded_file – verifica se o arquivo foi uploaded via HTTP POST.
- is_writable – verifica se pode escrever para o arquivo (writable).
- version_compare – Compara a versão do php.
- extension_loaded – verifica se a extensão foi habilitada.
```php
if (getenv("REQUEST_METHOD") == "POST") {
    //...faça tal coisa
}
```
### Verificando se uma variável foi inicializada

$campo = isset($_POST["campo"]) ? $_POST["campo"] : "";

### Incluindo um arquivo sem verificação de tratamento de erros:
```php
<?php 
require "arquivo.php";
```
Mas e se o arquivo nao existir? Iria dar erro, então o mais correto é:

Incluindo um arquivo com verificação
```php
<?php 
if (file_exists("arquivo.php")) {
 require "arquivo.php";
}
?>
```
http://rberaldo.com.br/tratamento-erros-php/ 


O ideal, é que esse código abaixo sempre seja mantido no arquivo de configurações do PHP (php.ini), porém, se não tiver acesso ao php.ini do servidor, pode ser usado no seu arquivo de códigos comum. Considere executar ele antes mesmo de qualquer outro comando no início do seu site ou sistema.
```php
    error_reporting( E_ALL & (~E_NOTICE | ~E_USER_NOTICE) );
    ini_set( 'error_log', '/caminho/para/pasta/logs/php_erros.log' );
    ini_set( 'ignore_repeated_source', true );    
    ini_set( 'ignore_repeated_errors', true );
    ini_set('display_errors', TRUE);
    ini_set( 'log_errors', true );
```
As  configurações acima, farão com que o PHP registre no arquivo “/caminho/para/pasta/logs/php_erros.log” todos os erros ocorridos no seu site ou sistema, com exceção de notices, erros já repetidos ou erros do mesmo arquivo.

Essa simples implementação de código já é bastante útil para monitorar o que acontece em um website, porém, não é o suficiente.
```php
 try{
        if( 10 > 1 )
            throw new MinhaException(
                "Por favor, gere alguma exception e 
                grave essa string como uma mensagem", 1);
    }
    catch( MinhaException $e ){
        echo "Erro: Script impossibilitado de continuar. 
        Para relatar informações adicionais, entre em contato com o 
        Administrador: " . $e->getAdminMail();
    }
```
http://sooho.com.br/2017/03/25/como-tratar-erros-em-php-com-error_reporting-e-exception/ 


