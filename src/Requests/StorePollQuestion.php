<?php

namespace DisruptiveAds\Zoom\Requests;

use DisruptiveAds\API\Support\PersistResource;

class StorePollQuestion extends PersistResource
{
    protected $persistAttributes = [
        'name' => 'nullable|string',
        'type' => 'nullable|in:single,multiple',
        'answers' => 'nullable|array',
    ];
}
