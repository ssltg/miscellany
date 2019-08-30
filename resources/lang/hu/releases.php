<?php

return [
    'index' => [
        'description'   => 'A ' . config('app.site_name') . ' legújabb frissítései',
        'title'         => 'Verziók',
    ],
    'post'  => [
        'footer'    => ':name :date',
    ],
    'show'  => [
        'return'    => 'Vissza a verziókhoz',
        'title'     => ':name verzió',
    ],
];
