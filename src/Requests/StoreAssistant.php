<?php

namespace DisruptiveAds\Zoom\Requests;

use MacsiDigital\API\Support\PersistResource;

class StoreAssistant extends PersistResource
{
    protected $persistAttributes = [
        'id' => '',
        'email' => 'nullable|email',
    ];
}
