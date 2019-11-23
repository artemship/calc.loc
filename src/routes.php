<?php

return [
    '~^$~' => [\Calc\Controllers\MainController::class, 'main'],
    '~^ajax/btn/submit$~' => [\Calc\Controllers\AjaxController::class, 'submit'],
//    '~^articles/(\d+)/comments/(\d+)/delete$~' => [\MyProject\Controllers\CommentsController::class, 'delete'],
//    '~^articles/(\d+)/comments/(\d+)/edit$~' => [\MyProject\Controllers\CommentsController::class, 'edit'],
//    '~^articles/(\d+)/comments$~' => [\MyProject\Controllers\CommentsController::class, 'add'],
//    '~^articles/create$~' => [\MyProject\Controllers\ArticlesController::class, 'create'],
//    '~^articles/add$~' => [\MyProject\Controllers\ArticlesController::class, 'add'],
//    '~^articles/(\d+)$~' => [\MyProject\Controllers\ArticlesController::class, 'view'],
//    '~^articles/(\d+)/edit$~' => [\MyProject\Controllers\ArticlesController::class, 'edit'],
//    '~^articles/(\d+)/delete$~' => [\MyProject\Controllers\ArticlesController::class, 'delete'],
//    '~^users/login$~' => [\MyProject\Controllers\UsersController::class, 'login'],
//    '~^users/register$~' => [\MyProject\Controllers\UsersController::class, 'signUp'],
//    '~^users/(\d+)/activate/(.+)$~' => [\MyProject\Controllers\UsersController::class, 'activate'],
//    '~^logout$~' => [\MyProject\Controllers\UsersController::class, 'logout'],
//    '~^user/(.*)$~' => [\MyProject\Controllers\MainController::class, 'userProfile'],
//    '~^hello/(.*)$~' => [\MyProject\Controllers\MainController::class, 'sayHello'],
//    '~^bye/(.*)$~' => [\MyProject\Controllers\MainController::class, 'sayBye'],
];