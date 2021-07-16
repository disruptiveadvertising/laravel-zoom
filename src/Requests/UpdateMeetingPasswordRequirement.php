<?php

namespace DisruptiveAds\Zoom\Requests;

use DisruptiveAds\API\Support\PersistResource;

class UpdateMeetingPasswordRequirement extends PersistResource
{
    protected $persistAttributes = [
        "length" => "nullable|string|max:10",
        "have_letter" => "nullable|boolean",
        "have_number" => "nullable|boolean",
        "have_special_character" => "nullable|boolean",
        "only_allow_numeric" => "nullable|boolean",
    ];
}
