<?php

namespace DisruptiveAds\Zoom;

use DisruptiveAds\Zoom\Support\Model;

class RecordingFile extends Model
{
    public function recording()
    {
        return $this->belongsTo(Recording::class);
    }
}
