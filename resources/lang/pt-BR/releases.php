<?php

return [
    'index' => [
        'description'   => 'As ultimas atualizações do ' . config('app.site_name') . '',
        'title'         => 'Atualizações',
    ],
    'post'  => [
        'footer'    => 'Por :name em :date',
    ],
    'show'  => [
        'return'    => 'Voltar para atualizações',
        'title'     => 'Atualização :name',
    ],
];
