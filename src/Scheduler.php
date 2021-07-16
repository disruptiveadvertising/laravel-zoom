<?php

namespace DisruptiveAds\Zoom;

use DisruptiveAds\Zoom\Support\Model;

class Scheduler extends Model
{
    protected $insertResource = 'DisruptiveAds\Zoom\Requests\StoreScheduler';
    protected $updateResource = 'DisruptiveAds\Zoom\Requests\UpdateScheduler';

    protected $endPoint = 'users/{user_id}/schedulers';

    protected $allowedMethods = ['get', 'delete'];

    protected $apiMultipleDataField = 'schedulers';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getApiMultipleDataField()
    {
        return $this->apiMultipleDataField;
    }
}
