<?php

namespace DisruptiveAds\Zoom\Requests;

use DisruptiveAds\API\Support\PersistResource;

class StoreCustomQuestion extends PersistResource
{
    protected $persistAttributes = [
        'title' => 'required|string',
        'value' => 'required|string',
    ];
}
