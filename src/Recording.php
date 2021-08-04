<?php

namespace DisruptiveAds\Zoom;

use DisruptiveAds\Zoom\Support\Model;

class Recording extends Model
{
    protected $customEndPoints = [
        'get' => 'users/{user:id}/recordings',
        'getAll' => 'recordings'
    ];

    protected $allowedMethods = ['get', 'getAll'];

    protected $apiMultipleDataField = 'recordings';

    public function getApiMultipleDataField()
    {
        return $this->apiMultipleDataField;
    }

    public function recordingFiles()
    {
        return $this->hasMany(RecordingFile::class);
    }

    public function recordingPasswordRequirement()
    {
        return $this->hasOne(RecordingPasswordRequirement::class);
    }
}
