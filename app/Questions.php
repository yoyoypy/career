<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $table = 'questions';
    protected $fillable = [
        'title',
        'question',
        'jobvacancy_id'
    ];

    /**
     * Get all of the comments for the Questions
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answers()
    {
        return $this->hasMany(Answers::class, 'question_id', 'id');
    }

    /**
     * Get the jobvacancy te Questions
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function job()
    {
        return $this->belongsTo(Job::class, 'jobvacancy_id', 'id');
    }

    /**
     * Get all of the comments for the Questions
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function value()
    {
        return $this->hasMany(Value::class, 'question_id', 'id');
    }
}
