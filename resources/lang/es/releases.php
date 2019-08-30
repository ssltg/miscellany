<?php

return [
    'index' => [
        'description'   => 'Ultimas novedades de ' . config('app.site_name'),
        'title'         => 'Novedades',
    ],
    'post'  => [
        'footer'    => 'Por :name el :date',
    ],
    'show'  => [
        'return'    => 'Volver a novedades',
        'title'     => 'Novedad :name',
    ],
];
