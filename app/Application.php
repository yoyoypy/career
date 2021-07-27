<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'applications';
    protected $fillable = [
        'jobvacancy_id',
        'firstname',
        'lastname',
        'dob',
        'pob',
        'sex',
        'education',
        'id_card_address',
        'present_address',
        'phone_number',
        'email',
        'id_card_number',
        'marital_status',
        'cv',
        'status',
        'visitor'
    ];

    /**
     * Get the Vacancies that owns the Application
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Job()
    {
        return $this->belongsTo(Job::class, 'jobvacancy_id', 'id');
    }

    /**
     * The answers that belong to the Application
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function answers()
    {
        return $this->belongsToMany(Answers::class, 'application_answer', 'application_id', 'answer_id');
    }

    public function getCvAttribute($value)
    {
        return url('storage/' . $value);
    }
}
