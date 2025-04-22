<?php

return [
    'format' => [
        'date' => 'd.m.Y',
        'time' => 'H:i:s',
        'timestamp' => 'd.m.Y H:i:s',

        'form' => [
            'phone' => [
                'mask' => '+7 999 999-99-99',
                'placeholder' => '+7 777 123-45-67',
                'stripCharacters' => [' ', '-'],
                'regex' => '/^\+7\d{10}$/',
            ],
        ],

        'tables' => [
            'phone' => '+# ### ###-##-##', // # - цифра
        ],
    ],
];
