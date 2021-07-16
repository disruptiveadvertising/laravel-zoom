<?php

namespace MacsiDigital\Zoom;

use MacsiDigital\Zoom\Support\Model;

class PastMeetingParticipant extends Model
{
    protected $endPoint = '/past_meetings/{pastmeeting_id}/participants';

    protected $allowedMethods = ['get'];

    protected $apiMultipleDataField = 'participants';

}
