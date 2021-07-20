<?php

namespace DisruptiveAds\Zoom\Requests;

use MacsiDigital\API\Support\PersistResource;

class UpdateAssistant extends PersistResource
{
    protected $persistAttributes = [
        'id' => '',
        'email' => 'nullable|email',
    ];
}
