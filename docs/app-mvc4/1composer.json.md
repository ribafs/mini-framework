## Criação do app-mvc/composer.json

Criar o arquivo
composer.json

Na pasta raiz do aplicativo, contendo:

```json
{
    "name": "ribafs/app-mvc",
    "description": "APP-MVC - an extremely simple naked MVC PHP application",
    "type": "project",
    "license": "MIT",
    "authors": [
        {
            "name": "Panique",
            "email": "panique@firemail.de"
        },
        {
            "name": "John Dias",
            "email": "joaodias@noctus.org"
        },
        {
            "name": "Ribamar FS",
            "email": "ribafs@gmail.com"
        }
    ],
    "minimum-stability": "dev",
    "require": {
        "robmorgan/phinx": "dev-master",
        "fzaninotto/faker": "^1.9@dev",
        "filp/whoops": "^2.2@dev"
    },
    "autoload":
    {
        "psr-4":
        {
            "Mvc\\" : "src/"
        }
    }
}
```

Obs.: Veja que mantive os nomes dos autores originais, por gratidão  e por conta da licença.
