<?php

namespace DisruptiveAds\Zoom;

use DisruptiveAds\Zoom\Support\Model;

class Participant extends Model
{
    protected $endPoint = '/past_webinars/{webinar:uuid}/participants';

    protected $allowedMethods = ['get'];

    protected $apiMultipleDataField = 'participants';
}
