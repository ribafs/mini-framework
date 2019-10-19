## Criação de aplicativo em PHP com MVC

Com a intenção de ser o ponto de partida para se compreender a criação de um aplicativo em PVP usando MVC.

Tutorial sobre a criação de um aplicativo em PHP usando MVC e bons recursos, que na prática é a criação de um framework MVC do "zero".

Inicialmente fiz uma longa pesquisa via google e também perguntei em alguns grandes grupos de PHP internacionais por indicação de tutorial para a criação do meu próprio tutorial. As respostas são divididas, parte defende com paixão que se crie seu próprio framework e parte condena, dizendo que devemos usar os existentes que são muito bons. Alguns até citam estatísticas de que os frameworks atuais atendem a 95% das necessidades (não sei como conseguiram este número). Muitos dos tutoriais e vídeo aulas que encontrei estão desatualizados, uns ainda usando as funções mysql_connect, outros usando o mysqli, outros que não usam o PSR-4 e na maioria que não executa corretamente. Acusa erro. Assim também com os exemplos de pequenos frameworks que encontrei. Resumindo, somente o mini3 realmente executou bem, tem uma estrutura simples que me permitiu entender, usa o PSR-4, o PDO, tem também rotas e em apenas uma classe e .htaccess e não tem nenhuma dependência de pacote de terceiros. Aí a vantagem do software livre e open source, mesmo que não tenha um tutorial detalhado explicando como foi criado o aplicativo, como ele é aberto, se estivermos preparados podemos elaborar este tutorial e é o que irei fazer. Lembrando disso, voltei novamente ao repositório do mini3 e agradeci o autor, clicando na estrela e também fiz um fork novamente, pois havia excluído, para garantir que terei seu código por perto. Também mantive o rodapé do original, onde o autor faz a propaganda de uma hospedagem, pois acho que ele merece que eu faça isso. O grupo que defende a criação do seu próprio framework é muito enfático e me parece lógico, pois se ninguém mais quisesse criar o seu não haveria mais progresso.

Outra sugestão muito apontada é a criação de um aplicativo/framework usando componentes de outros grandes frameworks. Veja que muitos grandes frameworks como Laravel, CakePHP, etc usam componentes do Symfony. Inclusive encontrei um tutorial muito bom, onde o autor ensina a criar seu próprio framework apenas com componentes do Symfony2. Inclusive foi traduzido para o português e está abaixo nas referências. Não senti muita atração por esta alternativa, preferi partir do mini3 e, como o compreendi, vou adicionar minhas classes e outros recursos.

Tutorial de criação de um pequeno aplicativo em PHP com MVC e outros bons recursos. É um aplicativo muito simples e bem documentado, contendo 3 dependências mas todas opcionais. Portando pode ser modificado para atender outras necessidades.

## Recursos:
- Bons padões de codificação
- Convenção para nomes de arquivos, classes, métodos e propriedades, tabelas, campos, etc
- PHPOO com MVC e rotas
- PSR-4 com autoload, namespace e composer
- BootStrap 4, Paginação e Busca nas views (a serem implementados)
- Migrations com phinx e faker
- Outros recursos podem ser adicionados com certa facilidade, inclusive por programadores iniciantes, pois o código é simples e bem documentado


### DocumentRoot

Como estou usando linux, o documentRoot citado no tutorial é o

/var/www/html

Mas funciona sem problema em qualquer sistema operacional que suporte PHP. 

Exemplo: no Windows usando o Xampp é c:\xampp\htdocs

Criarei para este aplicativo a pasta /var/www/html/app-mvc

Então se você usa outro diretório web faça as devidas alterações


