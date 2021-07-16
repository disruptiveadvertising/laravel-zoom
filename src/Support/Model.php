<?php

namespace DisruptiveAds\Zoom\Support;

use DisruptiveAds\API\Support\ApiResource;

class Model extends ApiResource
{
    protected $apiDataField = '';

    protected $dateFormat = \DateTime::ATOM;
}
