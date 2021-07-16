<?php

namespace DisruptiveAds\Zoom\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DisruptiveAds\XeroLaravel\Skeleton\SkeletonClass
 */
class Client extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'zoom.client';
    }
}
