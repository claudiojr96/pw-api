<?php

return [

    /**
     * The IP of your machine the API will be connecting to.
     *
     * @var string
     */
    'host' => env('PW_API_HOST', '127.0.0.1'),

    /**
     * These ports MUST be open if you the package isn't on the host machine
     *
     * @var array
     */
    'ports' => [
        'gamedbd' => 29400,
        'gdeliveryd' => 29100,
        'gacd' => 29300,
        'client' => 29000
    ],

    /**
     * Your game version
     *
     * Available versions: 07, 63, 69, 70, 80, 85, 88, 101
     *
     * @var int
     */
    'game_version' => env('PW_API_VERSION', '101'),

    'maxbuffer' => 65536,

    's_block' => FALSE,

    's_readtype' => 3,
];