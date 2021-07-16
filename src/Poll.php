<?php

namespace DisruptiveAds\Zoom;

use DisruptiveAds\Zoom\Support\Model;

class Poll extends Model
{
    protected $insertResource = 'DisruptiveAds\Zoom\Requests\StorePoll';
    protected $storeResource = 'DisruptiveAds\Zoom\Requests\UpdatePoll';

    protected $endPoint = '/meetings/{meeting:id}/polls';

    protected $allowedMethods = ['find', 'get', 'post', 'put', 'delete'];

    protected $apiMultipleDataField = 'polls';

    public function getApiMultipleDataField()
    {
        return $this->apiMultipleDataField;
    }

    public function questions()
    {
        return $this->hasMany(PollQuestion::class);
    }
}
