# Alterações desde o original mini3

Repositório no GitHub: mini-framework

Este aplicativo partiu do MINI-MVC (https://github.com/ribafs/mini-mvc). O MINI-MVC veio do MINI3 (https://github.com/panique/mini3).

- Mudei a pasta do aplicativo para mini-fw, agora este exemplo tá na versão 6: mini-fw6
- Namespace
	O namespace original era Mini apontando para a pasta application
	Resolvi mudar para Mvc, depois voltei para Mini, agora apontando para a apsta src
	Para mudar somente a pasta basta alterar o composer.json e depois executar na pasta do aplicativo:
	composer dump-autoload
- Inspirado no frfamework CakePHP eu renomeei os métodos nos Controllers, Models  views (exemplo):
    - addCliente - add
    - editCliente - edit
    - deleteCliente - delete
    - updateCliente - update
- Removi os métodos exampleOne e exampleTwo do HomeController e da respectiva view
- Renomeei a a classe Core/Application.php para Core/Routere.php, pois acho que este é seu papel
- O original traz apenas o suporte para uma tabela: songs. Resolvi criar um banco com as tabelas clientes, funcionarios e produtos. Aproveitei o código para songs e converti para clientes. Quando terminei copiei clientes para produtos e depois para funcionarios. Também traduzi os comentários pois queria divulgar para programadores da lingua portuguesa.
- Implementei o BootStrap 4 no lugar do CSS original e criei um pequeno arquivo custom.css, com algumas customizações do BS e mais poucas classes.
Basicamente adicionei o CDN do BootStrap no header.php e usei algumas classes básicas nos forms e tables e mais algumas. Bem simples.
A versão atual está com todos os comentários em inglês (idênticos aos originais, que aproveito para dizer, estão muito bons) e as tabelas customers e products.
- Então instalei três pacotes, que se tornaram dependências:
robmorgan/phinx - migrations
- Motivado pelo tutorial https://github.com/ribafs/no-framework-tutorial, eu quebrei o public/index.php em dois: deixando no public/index.php apenas o require para o segundo, que foi o src/bootstrap.php. Isso para deixar disponível para o servidor web praticamente nada, que é apenas o index.php com este require e os arquivos públicos: css, images e js. Todo o código fica fora do alcance do servidor web. Este arquivo public/index.php, que é a única porta de entrada para o aplicativo, chama-se front controller.
fzaninotto/faker - geração de dados falsos
filp/whoops - tratamento de erros
Mas são todos opcionais e podem ser removidos a qualquer momento
- Adicionei a todos os arquivos PHP com funções/métodos a declaração
declare(strict_types = 1);
No início de cada arquivo para forçar a checagem de tipos em métodos/funções pelo PHP
Um pequeno e bom tutorial sobre o strict_types: https://blog.schoolofnet.com/strict-types-e-novos-tipos-de-declaracao-no-php-7/
Também corrigi o suporte ao PostgreSQL
- Testado em:
	- Linux e Win
	- MySQL e PostgreSQL
- Criei as classes CustomersView e ProductsView na pasta src/View para substituir os requires nos métodos index(), edit() e add() do controller.
- Defini uma constante com o nome da aplicação que é adicionada no header.php para que apareça em todas as páginas. 
	Configurar em config/config.php:
define('APP_TITTLE', 'Aplication Title');
- Definida a constante CONTROLLER_DEFAULT no config.php a ser udado no Router.php no lugar do HomeController e eliminados o controller e a view home, que de fato não tinham função
- Ajustes do ErrorController, Router e view error para que as mensagens de erro mostrem o controller e o action digitado pelo usuário.
- Renomeei o arquivo Libs/helper.php para Libs/Helper.php para ficar no padrão: todos os arquivos que contém classes devem iniciar com maiúsculas.
- Correção do debugPDO no arquivo Libs\Helper.php para disparar mensagens de debug do PDO caso sejam descomentadas

