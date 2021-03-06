<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobView extends Model
{
    public static function createViewLog($item, $request) {
        $logViews = new JobView();
        $logViews->jobvacancy_id = $item->id;
        $logViews->url = $request->url();
        $logViews->session_id = $request->session()->getId();
        $logViews->ip = $request->ip();
        $logViews->agent = $request->header('user-agent');
        $logViews->save();
    }

    /**
     * Get the user that owns the JobView
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function job()
    {
        return $this->belongsTo(Job::class, 'jobvacancy_id', 'id');
    }
}
