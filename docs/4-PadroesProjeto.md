## Alguns Padrões de Projeto

Geralmente é uma boa ideia seguir à padrões comuns, pois isso irá fazer com que seu código seja mais fácil de manter e de ser entendido por outros desenvolvedores. São soluções para problemas comuns que encontramos no desenvolvimento ou manutenção de um software orientado a objetos.

Engenheiros de softwares por décadas desenvolveram padrões de projeto para resolver problemas comuns.

A teoria dos padrões de projeto da Microsoft é: "O documento apresenta padrões e os apresenta em um repositório ou catálogo organizado para ajudá-lo a localizar a combinação certa de padrões que resolve seu problema".

Isaac Newton certa vez dissera:
Se cheguei até aqui foi porque me apoiei no ombro de gigantes. 


### Front Controller
O padrão front controller é quando você tem um único ponto de entrada para sua aplicação web, no nosso caso: public/index.php, que trata de todas as requisições. Esse código é mínimo, contendo apenas um require para o src/bootstrap.php, que é responsável por carregar todas as dependências, processar a requisição e enviar a resposta para o navegador. O padrão Front Controller pode ser benéfico pois ele encoraja o desenvolvimento de um código modular e provê um ponto central no código para inserir funcionalidades que deverão ser executadas em todas as requisições (como para higienização de entradas). Assim como também protege nosso código fonte, que fica na pasta src, no caso fica fora do alcance do servidor web.


### Model-View-Controller
O padrão de arquitetura model-view-controller (MVC) e os demais padrões relacionados como HMVC and MVVM permitem que você separe o código em diferentes objetos lógicos que servem para tarefas bastante específicas. Models servem como uma camada de acesso aos dados e esses dados são requisitados e retornados em formatos nos quais possam ser usados no decorrer de sua aplicação. Controllers (Controladores) tratam as requisições, processam os dados retornados dos Models e carregam as Views para enviar a resposta. E as Views são templates de saída (marcação, xml, etc) que são enviadas como resposta ao navegador.

O MVC é o padrão arquitetônico mais comumente utilizado nos populares Frameworks PHP.

http://br.phptherightway.com/pages/Design-Patterns.html 


### Quando usar o padrão de arquitetura MVC

O padrão de arquitetura MVC ajuda-nos a implementar a separação de interesses entre as classes de modelo, visualização e controlador nas aplicações.

A separação de interesses torna fácil testar nossa aplicação, já que a relação entre os diferentes componentes da aplicação é mais clara e coerente. O MVC nos ajuda a implementar uma abordagem de desenvolvimento orientada a testes, na qual implementamos casos de teste automatizados antes de escrevermos o código. Esses casos de teste de unidade nos ajudam a pré-definir e verificar os requisitos de um novo código antes de escrevê-lo.

Se estamos fazendo um aplicativo com bastante estímulo sério no lado do cliente para se recusar a ir junto com o JavaScript sozinho. Se estivermos desenvolvendo um aplicativo que tem um alto desempenho no lado do servidor e um pouco de comunicação no lado do cliente, não devemos usar a arquitetura de padrão MVC; em vez disso, devemos usar uma configuração simples como o modelo de formulário baseado na web. A seguir estão algumas características que nos ajudarão a usar a arquitetura MVC em nosso aplicativo ou não:

- i. Nosso aplicativo precisa de comunicação assíncrona no back-end.
- ii. Nosso aplicativo tem uma funcionalidade que resulta em não recarregar uma página inteira, por exemplo, comentando em um post usando o Facebook ou rolando infinitamente etc.
- iii. Manipulação de dados é principalmente no lado do cliente (navegador), em vez de lado do servidor.
- iv. O mesmo tipo de dados está sendo entregue de maneiras diferentes em uma única página (navegação).
- v. Quando nosso aplicativo possui muitas conexões insignificantes que são usadas para modificar dados (botão, switches).

### Vantagens da arquitetura MVC

- a. A arquitetura MVC nos ajuda a controlar a complexidade do aplicativo dividindo-o em três componentes, ou seja, model, view e controller.
- b. O MVC não usa formulários baseados em servidor, por isso é ideal para desenvolvedores que desejam ter controle total sobre o comportamento de seus aplicativos.
- c. A abordagem de desenvolvimento orientada a teste é suportada pela arquitetura MVC.
- d. O MVC usa o padrão do controlador frontal. O padrão do controlador frontal manipula as diversas solicitações recebidas usando uma única interface (controlador). O controlador frontal fornece controle centralizado. Precisamos configurar apenas um controlador no servidor da web em vez de muitos.
- e. O front controller fornece suporte a comunicações de roteamento avançadas para projetar nosso aplicativo da web.

### Recursos de um framework MVC
À medida que dividimos a lógica de nossa aplicação em três tarefas (lógica de entrada, lógica de negócios, lógica de interface), o teste desses componentes se tornaria mais fácil. A testabilidade é muito rápida e flexível, já que podemos usar qualquer estrutura de teste de unidade compatível com o framework MVC. É uma estrutura extensível e conectável. Podemos projetar os componentes de nossa aplicação de maneira que sejam facilmente substituíveis ou possam ser facilmente modificados. Podemos conectar nosso próprio mecanismo de visualização, estratégia de roteamento de URL, serialização de restrição de método de ação. Em vez de depender da classe para criar objetos, usamos uma técnica de injeção de dependência (DI) que nos permite injetar objetos nas classes. Outra técnica de inversão de controle (IOC) é usada para mostrar dependência entre objetos, especifica qual objeto precisa de outro objeto. O MVC fornece um componente de mapeamento de URL que nos ajuda a construir usando URLs compreensíveis e pesquisáveis. Em vez de usar extensões de nome de arquivo, os padrões de nomenclatura de URL de suporte MVC são muito úteis para o endereçamento de otimização de mecanismo de pesquisa (SEO) e de transferência de estado representacional (REST). Algumas estruturas do MVC, como a ASP.NET MVC, fornecem alguns recursos integrados, como autenticação de formulário, gerenciamento de sessão, lógica de negócios transacional, segurança de aplicativos web, mapeamento relacional de objeto, localização, associação e funções e autorização de URL, etc. as estruturas disponíveis hoje são backbone.js, ember.js; angular.js e knockout.js.

- I. Backbone. O framework Js-Backbone.js é útil quando nossa aplicação precisa de flexibilidade, temos requisitos incertos. Além disso, queremos acomodar a alteração durante o desenvolvimento do aplicativo.
- II. Ember.js- Quando queremos que nosso aplicativo interaja com a API JSON, devemos usar o framework ember.js em nosso aplicativo.
- III Angular.js- Se queremos mais confiabilidade e estabilidade em nosso aplicativo, queremos testes extensivos para nossa aplicação, então devemos usar o framework angular.js.
- IV. Knockout.js - se quisermos criar uma interface dinâmica complexa de aplicativo, o framework knockout.js será muito útil para nós.
Cada estrutura tem suas próprias vantagens e desvantagens. Os desenvolvedores podem usar qualquer um dos frameworks de acordo com seus requisitos, que se adequam ao seu aplicativo da web.

A view não deve ir direto ao model. O controller é mediador/middleware entre V e M.

MVC ajuda DRY.

Ajuda a organizar o código e a torná-lo manutenível.

### Model
A camada model é o backbone do aplicativo e lida com a lógica de dados. Na maioria das vezes,
considera-se que o model é responsável pelas operações CRUD em um banco de dados, que
pode ou não ser verdade. O modelo é responsável pela lógica de dados, o que significa que as operações de validação de dados também podem ser executadas aqui. Em palavras simples, os modelos fornecem uma abstração para os dados. As camadas restantes da aplicação não sabem ou não se importam como e de onde os dados vêm ou como uma operação é realizada em dados. É responsabilidade do modelo cuidar de toda a lógica de dados.

O método seguido é modelos gordos e controllers finos, o que significa manter toda a lógica da aplicação nos modelos e os controladores finos, o quanto possível.

### Controllers
Os controladores respondem às ações executadas por um usuário nas views e respondem a
view. Por exemplo, um usuário preenche um formulário e o submete. Aqui, o controlador vem
no meio e começa a agir sobre a apresentação do formulário. Agora o controlador irá primeiro verificar se o usuário tem permissão para fazer este pedido ou não. 

Em seguida, o controlador executará a ação apropriada, como se comunicar com o modelo ou qualquer outra operação. Em uma analogia simples, o controlador é o meio homem entre vews e models. Como mencionamos antes na seção de modelos, controladores devem ser pequenos. Então, principalmente, controladores são usados ​​apenas para lidar com solicitações e se comunicar com modelos e viws. Todos os tipos de operações de dados são executados em modelos.

O único trabalho do padrão de design MVC é separar as responsabilidades de diferentes partes em um aplicativo. Portanto, os modelos são usados p​para gerenciar os dados do aplicativo. Controladores são usados ​​para realizar ações nas entradas do usuário, e as views são responsáveis ​​pelo visual, pela representação de dados. Como mencionamos anteriormente, o MVC separa as responsabilidades de cada parte, por isso não importa se ele acessa o modelo de controladores ou views; a única coisa que importa é que as views e os controladores não devem ser usados para
executar operações em dados que são de responsabilidade do modelo, e controladores não devem ser usados para visualizar qualquer tipo de dados pelo usuário final, pois este é a responsabilidade da view. 
