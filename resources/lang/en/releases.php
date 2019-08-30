<?php

return [
    'index' => [
        'description'   => 'The latest updates to ' . config('app.site_name'),
        'title'         => 'Releases',
    ],
    'post'  => [
        'footer'    => 'By :name :date',
    ],
    'show'  => [
        'return'    => 'Back to releases',
        'title'     => 'Release :name',
    ],
];
