<?php

namespace DisruptiveAds\Zoom;

use DisruptiveAds\Zoom\Support\Model;

class Instance extends Model
{
    protected $endPoint = '/past_webinars/{webinar:uuid}/instances';

    protected $allowedMethods = ['get'];

    protected $apiMultipleDataField = 'instances';
}
