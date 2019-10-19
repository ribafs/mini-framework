## Instalação do BootStrap 4

Originalmente o aplicativo não vem com o BootStrap, mas com um CSS simples.

Então troquei o css existente pelo BootStrap4. Isso no header.php, usando CDN.
```html
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="<?php echo URL; ?>css/custom.css" rel="stylesheet">                
```

Criei um custom.css para customizações do BootStrap4.

public/css/custom.css

```css
.navbar-dark .navbar-nav .nav-link {
    color: #a1e1ed;
}
```

Então fiz as devidas alterações das classes, basicamente nos forms e tables de:

src/view/customers/edit.php e index.php

Que é a nossa view com forms e tables.
