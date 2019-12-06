<?php

return [
    'db' => [
        'host' => 'localhost',
        'dbname' => 'calc',
        'user' => 'root',
        'password' => '',
    ],
    'calculation' => [
        'insurance' => [
            'damage' => 'Ущерб',
            'full' => 'Ущерб + Хищение',
        ],
        'paymentProcedure' => [
            '1' => 'Единовременно',
            '2' => '2 платежа',
            '3' => '3 платежа',

        ],
        'franchise' => [
            '0',
            '1',
            '2',
            '3',
            '4',
            '7',
            '10',
            '20',
        ]
    ]
];