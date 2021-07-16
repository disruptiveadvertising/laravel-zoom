<?php

namespace DisruptiveAds\Zoom;

use DisruptiveAds\Zoom\Support\Model;

class WebinarParticipant extends Model
{
    //protected $insertResource = 'DisruptiveAds\Zoom\Requests\StoreRegistrant';

    protected $endPoint = '/metrics/webinars/{webinar:id}/participants';

    protected $allowedMethods = ['get', 'post', 'put'];

    protected $apiMultipleDataField = 'participants';

    public function getApiMultipleDataField()
    {
        return $this->apiMultipleDataField;
    }
}
