Esta versão trocou o CSS original pelo BootStrap 4

Renomeou a pasta application para src

Nesta versão também começamos a adotar a declaração
declare(strict_types = 1);
No início de cada arquivo para obrigar a declaração de tipos em métodos e retornos.
Em caso de uso de tipo incompatível dispara:
Fatal error: Uncaught TypeError:

Nesta versão foi testado o suporte ao PostgreSQL
E efetuados ajustes para que funcionasse

Instalação

Acesse a pasta e execute
composer update

Instalar migrations

Atualize os dados do banco no arquivo do raiz
phinx.yml

Execute:
php vendor/robmorgan/phinx/bin/phinx migrate -e production
php vendor/bin/phinx seed:run -e production


