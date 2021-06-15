<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'applications';
    protected $fillable = [
        'fullname',
        'firstname',
        'lastname',
        'dob',
        'pob',
        'sex',
        'education',
        'weight',
        'height',
        'bloodtype',
        'eye',
        'id_card_address',
        'present_address',
        'phone_number',
        'email',
        'id_card_number',
        'tax_id_card_number',
        'social_security_number',
        'marital_status',
        'cv'
    ];

    /**
     * Get the Vacancies that owns the Application
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Vacancies(): BelongsTo
    {
        return $this->belongsTo(JobVacancies::class, 'id');
    }

    public function getCvAttribute($value)
    {
        return url('storage/' . $value);
    }
}
