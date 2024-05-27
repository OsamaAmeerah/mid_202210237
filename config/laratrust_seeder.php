<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => true,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'Manager' => [
            'users' => 'c,u,d',
            'payments' => 'c,u,d',
            'profile' => 'c,u,d',
            'prudocts' => 'c,u,d',
            'categories' => 'c,u,d',
            'orders' => 'c,u,d',
            'tickets' => 'c,u,d',
        ],
        'Customer' => [
            'users' => 'c,u,d',
            'payments' => 'c,u',
            'profile' => 'c,u',
            'categories' => 'r',
            'prudocts' => 'r',
            'orders' => 'c,u',
        ],
        'Support' => [
            'users' => 'r',
            'payments' => 'r',
            'prudocts' => 'r',
            'profile' => 'r',
            'categories' => 'r',
            'orders' => 'r',
            'tickets' => 'r',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],
];
