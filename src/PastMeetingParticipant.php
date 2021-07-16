<?php

namespace DisruptiveAds\Zoom;

use DisruptiveAds\Zoom\Support\Model;

class PastMeetingParticipant extends Model
{
    protected $endPoint = '/past_meetings/{pastmeeting_id}/participants';

    protected $allowedMethods = ['get'];

    protected $apiMultipleDataField = 'participants';

}
