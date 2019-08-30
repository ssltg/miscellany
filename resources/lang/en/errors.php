<?php

return [
    '403'       => [
        'body'  => 'It looks like you don\'t have permission to access this page!',
        'title' => 'Permission Denied',
    ],
    '404'       => [
        'body'  => 'Sorry, the page you are looking for could not be found.',
        'title' => 'Page Not Found',
    ],
    '500'       => [
        'body'  => [
            '1' => 'Whoops, looks like something went wrong.',
            '2' => 'A report with the encountered error was sent to us, but sometimes it helps if we can know a little bit more about what you were doing.',
        ],
        'title' => 'Error',
    ],
    '503'       => [
        'body'  => [
            '1' => config('app.name') . ' is currently under maintenance, which usually means an update is underway!',
            '2' => 'Sorry for the inconvenience. Everything will return to normal in just a few minutes.',
        ],
        'title' => 'Maintenance',
    ],
    '503-form'  => [
        'body'  => 'We couldn\'t save your data properly, which is usually caused by one of two factors. Please open ' . config('app.name') . ' in a :link. If the app is under maintenance, please save your data somewhere else until the app is back up and try again. If you were greeted by a "Checking your browser" message, you can try clicking on Save again.',
        'link'  => 'new window',
        'title' => 'Something unexpected happened.',
    ],
    'footer'    => 'If you need further assistance, please contact us at ' . config('mail.address.contact.address') . ' or on the :discord',
];
