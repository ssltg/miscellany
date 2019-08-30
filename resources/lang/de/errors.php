<?php

return [
    '403'       => [
        'body'  => 'Es sieht so aus, als hättest du keine Berechtigung, diese Seite anzuzeigen!',
        'title' => 'Zugang verweigert',
    ],
    '404'       => [
        'body'  => 'Entschuldige, diese Seite haben wir leider nicht finden können.',
        'title' => 'Seite nicht gefunden',
    ],
    '500'       => [
        'body'  => [
            '1' => 'Ups, irgendetwas ist hier schief gegangen.',
            '2' => 'Ein Bericht über den aufgetretenen Fehler wurde an uns geschickt, aber manchmal hilft es wenn wir etwas mehr darüber wissen.',
        ],
        'title' => 'Fehler',
    ],
    '503'       => [
        'body'  => [
            '1' => config('app.name') . ' ist aktuell in Wartung, was normalerweise bedeutet, dass ein Update eingespielt wird!',
            '2' => 'Entschuldige die Unannehmlichkeiten. Alles wird bald wieder normal funktionieren.',
        ],
        'title' => 'Wartung',
    ],
    'footer'    => 'Wenn du weitere Hilfe brauchst, bitte kontaktiere uns über ' . config('mail.address.contact.address') . ' oder über :discord.',
];
