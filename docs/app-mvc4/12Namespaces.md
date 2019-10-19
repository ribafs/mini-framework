## Vejamos agora os namespaces

Veja que foi definido no composer.json o namespace Mvc apontando para a pasta src

Mvc\\" : "src/"

Na pasta application temos algumas pastas contendo classes:
```php
/Controller
/Core
/Libs
/Model
```
As classes da pasta src/Controller usam o namespace:

namespace Mvc\Controller;

E também usam:

use Mvc\Model\Customer; // Para o respectivo model

As classes da pasta src/Core usam o namespace:

namespace Mvc\Core;

Sendo que a classe Model também usa:

use PDO;

As classes da pasta src/Libs usam o namespace:

namespace Mvc\Libs;

As classes da pasta src/Model usam o namespace:

namespace Mvc\Model;

E também usam, todas elas:

use Mvc\Core\Model; // Que a classe base dos models
