<?php

namespace DisruptiveAds\Zoom\Requests;

use DisruptiveAds\API\Support\PersistResource;

class UpdateRegistrationQuestion extends PersistResource
{
    protected $relatedResource = [
        "questions" => UpdateQuestion::class,
        "custom_questions" => UpdateCustomQuestion::class,
    ];
}
