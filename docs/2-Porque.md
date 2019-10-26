Opiniões diversas que encontrei sobre a criação um framework do "zero"

Algo que encontrei "Um desafio para você: da próxima vez que for iniciar um projeto, tente não usar o framework e isto não é uma intriga contra os frameworks, nem uma promoção do pensamento  not-invented-here. Mas hoje, graças a todo o trabalho de autoloading e interoperabilidade feito pelo PHP-FIG (https://www.php-fig.org/), construir sem um framework não significa construir tudo sozinho. Existem muitos pacotes excelentes e interoperáveis de uma ampla gama de frameworks. Juntar tudo é mais fácil do que você pensa!"

Absolutamente, faça o seu próprio se quiser. Não ouça pessimistas. A razão pela qual existem tantos frameworks atualmente para escolher, em primeiro lugar é porque as pessoas ignoraram o mantra cansado de 'não reinventar a roda' e tentaram fazer algo que pensavam ser melhor.

Então, reinvente a roda se você sentir vontade. Você aprenderá muito. E quem sabe, daqui a um ano, seu framework será o que todos estarão usando, em vez de fazer o seu próprio.

Eu não acho que faça sentido criar seu próprio framework completamente do zero com a riqueza de bibliotecas que existem por aí. Eu realmente criei (ou colei) meu próprio framework junto com o uso do Silex como base, adicionei algumas funcionalidades para poder usar yaml para configuração, ser capaz de usar classes como controladores facilmente, capacidade de criar APIs REST padrão com 6 linhas de código do controlador e, em seguida, adicionar um sistema DAL/Active Record completamente personalizado (porque eu não gosto de nenhum dos existentes lá fora). Eu também uso o Monolog para log.

Eu acho que escrever certos componentes do seu framework pode ser garantido, mas não a coisa toda, fazer uso dessas boas bibliotecas de propósito geral de código aberto (muitos dos componentes do Symfony2 podem ser usados ​​sozinhos e o Silex é apenas uma coleção dos principais) .

Tente seguir (e até mesmo definir) seus próprios padrões enquanto constrói a coisa, coloque a fonte em um local público (Github?) E tente fazer com que os outros ofereçam sua ajuda / opinião sobre se a direção da estrutura é boa.

Por que criar seu próprio framework?
Neste ponto, você pode estar se perguntando por que deveria passar pelo problema de criar um framework a partir do zero, quando pode facilmente começar a construir com qualquer uma das dezenas de estruturas pré-existentes: Symfony Framework, Laravel, CodeIgniter, CakePHP, etc…
Na minha opinião, a razão mais forte para criar seu próprio framework a partir do zero é aprender. Ao criar sua própria estrutura, você será forçado a tomar decisões arquitetônicas e estruturais. Quanto mais você se exercita tomando essas decisões, mais se familiarizará com os diferentes padrões de design existentes. Sem mencionar que se você está apenas começando em PHP, este exercício permitirá que você entenda quando usar interfaces, classes abstratas, etc.
O segundo caso mais forte para construir seu próprio framework PHP seria a flexibilidade. Agora, a maioria dos frameworks PHP já é bem flexível, mas como Steve Jobs disse uma vez: “O mundo e tudo ao seu redor foi criado por pessoas que não são mais inteligentes do que você”. Então, se você não está feliz com a maneira como algo funciona, então você pode mudar isso!
Elizabeth Smith diz basicamente a mesma coisa sobre frameworks em um tweet, quando ela disse “Eu acho que todo desenvolvedor PHP deveria escrever um framework - não necessariamente para usar, mas para APRENDER, é incrível como muitos não sabem o básico.” Isso leva para casa Um ponto muito importante: escrever seu próprio framework é uma experiência de aprendizado fabulosa.

Frameworks, usar ou não?
Por Talles Gazel em 27 de abril de 2017

Esse é um assunto muito importante e que ainda levanta muitas dúvidas nas comunidades de desenvolvedores.

Quando o assunto é frameworks sempre surge aquela dúvida, usar ou não?

Particularmente tenho um posicionamento muito bem definido a respeito disso. Acredito que sim, usar framework’s para o desenvolvimento é muito importante. Já que, um framework te oferece uma estrutura muito bem definida e testada para você trabalhar. E com o auxílio de um framework é possível entregar soluções complexas em período de tempo muito menor.

Independentemente do tamanho do sistema recomendo sempre que possível utilizem um framework para desenvolvimento de suas aplicações. Ainda não está convencido sobre uso framework’s? Nas próximas linhas vou listar algumas vantagens para te convencer.

 
VANTAGENS

QUALIDADE Por utilizar um framework já testado e aprovado, é natural que a qualidade dos seus sistemas também sejam altos. É claro que é de extrema importância saber escolher um framework que já segue estes princípios.

SEGURANÇA Um framework por si só não garante que suas aplicações serão seguras, porém um bom framework oferece recursos que podem garantir a integridade de suas aplicações.

LIBERDADE Um bom framework te dá liberdade para desenvolver suas próprias bibliotecas e pacotes. Um bom framework não é engessado, ele te permite desenvolver as suas próprias bibliotecas.

DOCUMENTAÇÃO Uma das maiores vantagens de se utilizar um framework é a documentação. Normalmente softwares privados são mal documentados, já um bom framework é muito bem documentada.

FÓRUNS E GRUPOS DE DISCUSSÃO Particularmente tenho muito preconceito contra fóruns, porém quando o assunto é framework, minha opinião é outra, já que, em alguns momentos durante o desenvolvimento é natural passar por alguma dificuldade, neste momento basta recorrer ao fórum do framework, que provavelmente alguém também passou pelo mesmo problema e encontrou a solução.

EFICIÊNCIA Quando utiliza um bom framework, é natural que suas aplicações fiquem mais eficientes, mais estáveis e mais organizados. O que torna isso possível é o simples fato de se trabalhar com ótimos padrões de projetos.
------------

Por que você deseja criar o seu próprio framework?
Em primeiro lugar, porque você gostaria de criar o seu próprio framework? Se você olhar em volta, todos vão dizer que é algo ruim reinventar a roda, e, que é melhor você escolher um framework existente e esquecer completamente de criar o seu próprio. Na maioria das vezes, eles estão certos, mas eu posso pensar em algumas boas razões para você começar a criar o seu próprio framework:
    • Para saber mais sobre a arquitetura de baixo nível dos frameworks web modernos em geral e sobre o funcionamento interno do framework full-stack Symfony2, em particular; 
    • Para criar um framework adequado às suas necessidades muito específicas (não se esqueça de, primeiro, certificar-se que as suas necessidades são realmente muito específicas); 
    • Para experimentar a criação de um framework para se divertir (em uma abordagem “aprender e descartar”); 
    • Para refatorar uma aplicação antiga/existente que precisa de uma boa dose das melhores práticas de desenvolvimento web recentes; 
    • Para provar ao mundo que você realmente pode criar um framework próprio (... mas com pouco esforço). 
