<?php
return [
    'oauth' => [
        'google_scopes' => [
            'https://www.googleapis.com/auth/gmail.send',
            'https://www.googleapis.com/auth/gmail.readonly',
        ],
        'ms_scopes' => [
            'Mail.Read',
            'Mail.Send',
        ],
    ],
    'sync' => [
        'gmail_watch_expiry_days' => 6,
        'graph_subscription_expiry_minutes' => 55 * 24,
        'poll_interval_seconds' => 120,
        'initial_days' => 30,
    ],
    'limits' => [
        'send_rate_per_min' => 60,
    ],
];
