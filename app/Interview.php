<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    protected $table = 'interview';
    protected $fillable = [
        'applications_id',
        'title',
        'date'
    ];

    /**
     * Get the user associated with the Interview
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function applicant()
    {
        return $this->hasOne(Application::class, 'id', 'applications_id');
    }

}
