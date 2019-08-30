<?php

return [
    'index' => [
        'description'   => 'Gli ultimi aggiornamenti di ' . config('app.site_name') . '',
        'title'         => 'Rilasci',
    ],
    'post'  => [
        'footer'    => 'Da :name :date',
    ],
    'show'  => [
        'return'    => 'Torna ai rilasci',
        'title'     => 'Rilascio :name',
    ],
];
