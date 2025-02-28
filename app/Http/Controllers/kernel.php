<?php 

protected $middlewareGroups = [
    'web' => [
        // Middleware untuk halaman web biasa
    ],

    'api' => [
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ],
];
