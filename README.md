# cnmh2

## Les composants de l'application

- app
  - Exports
  - Helpers
  - Http
    - Controllers
    - Middleware
      - ConsultationMidddleware.PHP
    - Request
  - Imports
  - Models
  - Policies
  - Providers
    - AppServiceProvider.php
    - AuthServiceProvider.php
    - AuthServiceProvider.php
  - Repositories

- config
  - app.php
  - excel.php+

- database
  - factories
  - migrations
  - seeders

- lang
    
- resources
  - views
  
- Routes
  - web.php

- composer.json
  -  "require": {
        "maatwebsite/excel": "^3.1"
    },
  -  "autoload": {
        "files": [
            "app/Helpers/Helper.php"
        ]
    }

### Installation de l'application

```bash
  npm install
  composer install
  php artisan migrate:fresh
  php artisan db:seed
  npm run dev
```


