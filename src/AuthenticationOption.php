<?php

namespace DisruptiveAds\Zoom;

use DisruptiveAds\Zoom\Support\Model;

class AuthenticationOption extends Model
{
    protected $insertResource = 'DisruptiveAds\Zoom\Requests\StoreAuthenticationOption';
    protected $updateResource = 'DisruptiveAds\Zoom\Requests\UpdateAuthenticationOption';
}
