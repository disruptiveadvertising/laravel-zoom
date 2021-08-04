<?php

namespace DisruptiveAds\Zoom;

use DisruptiveAds\Zoom\Support\Model;

class PastMeeting extends Model
{
    protected $endPoint = 'past_meetings';

    protected $primaryKey = 'uuid';

    protected $allowedMethods = ['find', 'get'];

    protected $apiDataField = '';

    protected $apiMultipleDataField = 'meetings';

    public function participants()
    {
        return $this->hasMany(PastMeetingParticipant::class);
    }

    public function instances()
    {
        return $this->hasMany(Instance::class);
    }

    public function files()
    {
        return $this->hasMany(File::class, 'in_meeting_files');
    }

    public function poll()
    {
        return $this->hasOne(PollResult::class);
    }

    public function meeting()
    {
        return $this->hasOne(Meeting::class);
    }
}
