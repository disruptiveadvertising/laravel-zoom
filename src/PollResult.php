<?php

namespace DisruptiveAds\Zoom;

use DisruptiveAds\API\Support\Resource;

class PollResult extends Resource
{
    protected $endPoint = '/past_webinars/{webinar:uuid}/polls';

    protected $allowedMethods = ['get'];

    protected $apiMultipleDataField = '';
}
