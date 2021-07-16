<?php

namespace DisruptiveAds\Zoom\Requests;

use DisruptiveAds\API\Support\PersistResource;

class UpdateIntegration extends PersistResource
{
    protected $persistAttributes = [
        "linkedin_sales_navigator" => "nullable|boolean",
    ];
}
