<?php

declare(strict_types=1);

arch()->preset()->php();

// arch()->preset()->strict();

arch()->preset()->security()->ignoring([
    'assert',
]);

arch()->preset()->laravel()
    ->ignoring([
        // 'App\Providers\AppServiceProvider',
    ]);

arch('strict types')
    ->expect('App')
    ->toUseStrictTypes();

arch('avoid open for extension')
    ->expect('App')
    ->classes()
    ->toBeFinal()
    ->ignoring([
        'App\Http\Controllers',
    ]);

arch('ensure no extends')
    ->expect('App')
    ->classes()
    ->not->toBeAbstract()
    ->ignoring([
        'App\Http\Controllers',
    ]);

// arch('avoid unknown types')
//     ->expect('App')
//     ->classes();
