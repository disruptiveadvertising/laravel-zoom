<?php

namespace DisruptiveAds\Zoom\Requests;

use MacsiDigital\API\Support\PersistResource;

class UpdateRecordingPasswordRequirement extends PersistResource
{
    protected $persistAttributes = [
        "length" => "nullable|string|max:10",
        "have_letter" => "nullable|boolean",
        "have_number" => "nullable|boolean",
        "have_special_character" => "nullable|boolean",
        "only_allow_numeric" => "nullable|boolean",
    ];
}
