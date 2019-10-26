# Criação de um aplicativo em PHP usando MVC e com bons recursos

## Alguma teoria da pasta docs

- [1 - Introdução](/docs/1-introducao.md)
- [2 - Porque e para que criar um framework](/docs/2-Porque.md)
- [3 - Porque eu quero criar](/docs/3-Justificativa.md)
- [4 - Padrões de Projeto](/docs/4-PadroesProjeto.md)
- [5 - Boas práticas e convenções](/docs/5-BoasPraticas.md)
- [6 - Roteamento](/docs/6-Rotas.md)
- [7 - Tratamento de Erros no PHP](/docs/7-TratamentoErros.md)
- 8 - Namespace
- 9 - Referências - https://ribafs.github.io/references/#PHPOO

## Mão na Massa

Criação do Aplicativo

- [0 - Estrutura de arquivos](/docs/app-mvc4/0Estrutura.md)
- [1 - Composer.json](/docs/app-mvc4/1composer.json.md)
- [2 - Front controller](/docs/app-mvc4/2index.php.md)
- [3 - Bootstrap](/docs/app-mvc4/3bootstrap.php.md)
- [4 - Configurações](/docs/app-mvc4/4config.php.md)
- 5 - Rotas
	- [5.1 - .htaccess](/docs/app-mvc4/5.1htaccess.md)
	- [5.2 - public/.htaccess](/docs/app-mvc4/5.2htaccess.md)
	- [5.3 - Router.php](/docs/app-mvc4/5.3Router.php.md)
- [6 - Helper](/docs/app-mvc4/6Helper.php.md)
- 7 - Models
	- [7.1 - Model.php](/docs/app-mvc4/7.1Model.php.md)
	- [7.2 - CustomerModel.php](/docs/app-mvc4/7.2Customer.php.md)
- 8 - Controllers
	- 8.1 - ErrorController.php](/docs/app-mvc4/7.2Customer.php.md)
	- 8.2 - HomeController.php](/docs/app-mvc4/7.2Customer.php.md)
	- 8.3 - CustomerController.php](/docs/app-mvc4/7.2Customer.php.md)
- 9 - Views
	- 9.1 - Error](/docs/app-mvc4/7.2Customer.php.md)
	- 9.2 - Home](/docs/app-mvc4/7.2Customer.php.md)
	- 9.3 - _templates
		- 9.3.1 - header.php](/docs/app-mvc4/7.2Customer.php.md)
		- 9.3.2 - footer.php](/docs/app-mvc4/7.2Customer.php.md)
	- 9.4 - Customers
		- 9.4.1 - edit.php](/docs/app-mvc4/7.2Customer.php.md)
		- [9.4.2 - index.php](/docs/app-mvc4/9.4.2customers-index.md)
- 10 - CSS
	- [10.1 - public/css/custom.css](/docs/app-mvc4/10.1css.md)
- 11 - Pacotes adicionados
	- [11.1 - Finalizando](/docs/app-mvc4/11.1Finalizando.md)
	- [11.2 - phinx/migrations](/docs/app-mvc4/11.2Migrations.md)
	- [11.3 - faker](/docs/app-mvc4/11.3Faker.md)
	- [11.4 - whoops/tratamento de erros](/docs/app-mvc4/11.4Woops.md)
- [12 - Namespaces](/docs/app-mvc4/12Namespaces.md)
- [13 - BootStrap 4](/docs/app-mvc4/13BootStrap4.md)

## Repositório com 4 exemplos deste aplicativo, com variações.

Caso tenha ficado alguma dúvida no código do aplicativo que você criou, então baixe os exemplos abaixo para verificar.
Este tutorial se aplica ao exemplo app-mvc4. Os demais foram fases em que fui adicionando recursos.

https://github.com/ribafs/framework-zero-samples


## Rodando aplicação de exemplo
Para rodar aplicação de exemplo mini-fw6 

Requisitos:
* MySQL 5.5+
* PHP 7.0+
* Composer 1.6.5+

Excute na ordem
* no terminal acessar a pasta mini-fw6 e executar  composer install
* No MySql executar mini-fw6/db-my.sql (Pode ser PhpMyAdmin MySql Workbench)
* Acessar http://localhost/mini-framework/mini-fw6/

Se fez tudo certo irá aparecer
![mni-fw6_tela.png](/docs/mini-fw6_tela.png)


## LICENSA

MIT
