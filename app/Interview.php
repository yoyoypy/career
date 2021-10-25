<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    protected $table = 'interview';
    protected $fillable = [
        'applications_id',
        'branch_id',
        'url',
        'title',
        'date',
        'time'
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

    /**
     * Get the user associated with the Interview
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function branch()
    {
        return $this->hasOne(Branch::class, 'id', 'branch_id');
    }

}
