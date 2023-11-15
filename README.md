# cnmh2

## Les composants 

- app
  - Exports
  - Helpers
  - Http
    - Controllers
    - Middleware
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

### Install les packages 

- composer require laracasts/flash
- composer require laravelcollective/html


- 'providers' => [
    Laracasts\Flash\FlashServiceProvider::class,
    Collective\Html\HtmlServiceProvider::class,

],

- 'aliases' => [
    'Flash' => Laracasts\Flash\Flash::class,
    'Form' => Collective\Html\FormFacade::class,
    'Html' => Collective\Html\HtmlFacade::class,
],
