<?php

namespace DisruptiveAds\Zoom;

use DisruptiveAds\Zoom\Support\Model;

class Role extends Model
{
    protected $insertResource = 'DisruptiveAds\Zoom\Requests\StoreRole';
    protected $updateResource = 'DisruptiveAds\Zoom\Requests\UpdateRole';

    protected $endPoint = 'roles';

    protected $allowedMethods = ['find', 'get', 'post', 'patch', 'delete'];

    protected $apiDataField = '';

    protected $apiMultipleDataField = 'roles';

    public function members()
    {
        return $this->hasMany(User::class, 'members');
    }

    public function giveRoleTo($user)
    {
    }

    public function removeRoleFrom($user)
    {
    }
}
