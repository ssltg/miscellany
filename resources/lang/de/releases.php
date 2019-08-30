<?php

return [
    'index' => [
        'description'   => 'Die letzten Neuigkeiten zu ' . config('app.site_name'),
        'title'         => 'Versionen',
    ],
    'post'  => [
        'footer'    => 'Von :name :date',
    ],
    'show'  => [
        'return'    => 'Zurück zu den Versionen',
        'title'     => 'Version :name',
    ],
];
