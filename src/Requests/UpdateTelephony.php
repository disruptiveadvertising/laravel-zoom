<?php

namespace DisruptiveAds\Zoom\Requests;

use DisruptiveAds\API\Support\PersistResource;

class UpdateTelephony extends PersistResource
{
    protected $persistAttributes = [
        "third_party_audio" => "nullable|boolean",
        "audio_conference_info" => "nullable|max:2048",
        "show_international_numbers_link" => "nullable|boolean",
    ];
}
