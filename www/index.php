<?php
    require __DIR__ . '/../vendor/autoload.php';

use Calc\Exceptions\NotFoundException;
use Calc\Models\Cars\Mark;
use Calc\Services\Db;
use Calc\View\View;

try {
//    spl_autoload_register(function (string $className) {
//        require_once __DIR__ . '/../src/' . $className . '.php';
//    });

    $route = $_GET['route'] ?? '';
    $routes = require __DIR__ . '/../src/routes.php';

    $isRouteFound = false;
    foreach ($routes as $pattern => $controllerAndAction) {
        preg_match($pattern, $route, $matches);
        if (!empty($matches)) {
            $isRouteFound = true;
            break;
        }
    }

    if (!$isRouteFound) {
        throw new NotFoundException();
    }

    unset($matches[0]);

    $controllerName = $controllerAndAction[0];
    $actionName = $controllerAndAction[1];

    $controller = new $controllerName();
    $controller->$actionName(...$matches);

//} catch (DbException $e) {
//    $view = new View(__DIR__ . '/../templates/errors');
//    $view->renderHtml('500.php', ['error' => $e->getMessage()], 500);
//} catch (UnauthorizedException $e) {
//    $view = new View(__DIR__ . '/../templates/errors');
//    $view->renderHtml('401.php', ['error' => $e->getMessage()], 401);
} catch (NotFoundException $e) {
    $view = new View(__DIR__ . '/../templates/errors');
    $view->renderHtml('404.php', [
        'error' => $e->getMessage(),
//        'user' => UsersAuthService::getUserByToken()
    ], 404);
//} catch (ForbiddenException $e) {
//    $view = new View(__DIR__ . '/../templates/errors');
//    $view->renderHtml('403.php', [
//        'error' => $e->getMessage(),
//        'user' => UsersAuthService::getUserByToken()
//    ], 403);
}




    return;


