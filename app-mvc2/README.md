Esta versão tem como diferença da original a
instalação de duas dependências:

robmorgan/phinx - migrations
fzaninotto/faker - geração de dados falsos

Estas dependências são opcionais, inteiramente desacopladas, usadas somente para geração de migrations/seeds
Caso deseje pode removê-las


Instalação do app-mvc2

Acesse a pasta e execute
composer update

Instalar migrations

Atualize os dados do banco no arquivo do raiz
phinx.yml

Execute:
php vendor/robmorgan/phinx/bin/phinx migrate -e production
php vendor/bin/phinx seed:run -e production

