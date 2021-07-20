<?php

namespace DisruptiveAds\Zoom\Requests;

use MacsiDigital\API\Support\PersistResource;

class UpdateTrackingField extends PersistResource
{
    protected $persistAttributes = [
        "field" => "nullable|string",
        "value" => "nullable|string",
    ];
}
