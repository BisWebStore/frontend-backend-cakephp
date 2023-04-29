# Frontend Backend Example - Plugin for CakePHP

## Installation

You can install this plugin into your CakePHP application using [composer](https://getcomposer.org).

The recommended way to install composer packages is:

```
composer require bisweb/frontend-backend-cakephp:dev-main
bin/cake plugin load FrontendBackend
```

## Deinstallation

```
bin/cake plugin unload FrontendBackend
composer remove bisweb/frontend-backend-cakephp
```

## Routing Frontend and Backend with Prefix "Backend"

```
/controller/action
/backend/controller/action
```

```
/frontend/home
/backend/login/login
```