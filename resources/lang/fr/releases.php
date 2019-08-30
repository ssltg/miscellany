<?php

return [
    'index' => [
        'description'   => 'Les dernières annonces de ' . config('app.name'),
        'title'         => 'Annonces',
    ],
    'post'  => [
        'footer'    => 'De :name :date',
    ],
    'show'  => [
        'return'    => 'Retour aux annonces',
        'title'     => 'Version :name',
    ],
];
