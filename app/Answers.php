<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    protected $table = 'answers';
    protected $fillable = [
        'answer',
        'application_id',
        'question_id'
    ];

    /**
     * Get the user that owns the Answers
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function application()
    {
        return $this->belongsTo(Application::class, 'application_id', 'id');
    }

    /**
     * Get the user that owns the Answers
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function question()
    {
        return $this->belongsTo(Questions::class, 'question_id', 'id');
    }
}
