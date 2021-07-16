<?php

namespace DisruptiveAds\Zoom;

use DisruptiveAds\Zoom\Support\Model;

class Invitation extends Model
{
    protected $endPoint = 'meetings/{meeting:id}/invitation';

    protected $allowedMethods = ['get'];

    protected $apiDataField = '';

    protected $apiMultipleDataField = 'invitation';
}
