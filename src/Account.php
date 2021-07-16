<?php

namespace DisruptiveAds\Zoom;

use DisruptiveAds\Zoom\Support\Model;

class Account extends Model
{
    // API included but its not open to the majority of API Users
    protected $insertResource = 'DisruptiveAds\Zoom\Requests\StoreAccount';
    protected $updateResource = 'DisruptiveAds\Zoom\Requests\UpdateAccount';

    protected $endPoint = 'accounts';

    protected $allowedMethods = ['get', 'post', 'delete'];

    protected $apiDataField = '';

    protected $apiMultipleDataField = 'accounts';
}
