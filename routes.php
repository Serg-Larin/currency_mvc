<?php

return [
    '()' =>[
        'controller' => controllers\MainController::class,
        'action'     => 'index',
    ],
    '(calculate)' =>[
        'controller' => controllers\MainController::class,
        'action'     => 'calculated',
    ],
    '(history)' =>[
        'controller' => controllers\MainController::class,
        'action'     => 'history',
    ],
    '(settings)' =>[
        'controller' => controllers\MainController::class,
        'action'     => 'settings',
    ],
    '(settings/update)' =>[
        'controller' => controllers\MainController::class,
        'action'     => 'update_settings',
    ],
    '(currencies/get)' =>[
        'controller' => controllers\MainController::class,
        'action'     => 'getAvailableCurrencies',
    ],
];
