<?php

namespace DisruptiveAds\Zoom;

use DisruptiveAds\API\Support\Resource;

class ScheduleMeeting extends Resource
{
    public function recordingPasswordRequirement()
    {
        return $this->hasOne(MeetingPasswordRequirement::class);
    }
}
