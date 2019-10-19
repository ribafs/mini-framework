Esta versão
- Foi renomeada para
mini-fw5
- Trocou o CSS original pelo BootStrap 4
- Criou a classe View() que substitui os requires nos métodos index(), edit() e add() do controller.
- Renomeou a pasta application para src
- Nesta versão foi testado e ajustado o suporte ao PostgreSQL
- Adicionada a declaração em cada arquivo com função/método
declare(strict_types = 1);
No início de cada arquivo para forçar a checagem de tipos em métodos/funções pelo PHP
Em caso de uso de tipo incompatível dispara:
Fatal error: Uncaught TypeError:
- Agora temoms uma constante com o nome da aplicação que é adicionada no header.php para que apareça em todas as páginas. Configure em config/config.php:
define('APP_TITTLE', 'Aplication Title');

Instalação

Acesse a pasta e execute
composer update

