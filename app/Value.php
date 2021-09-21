<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Question\Question;

class Value extends Model
{
    protected $table = 'values';
    protected $fillable = [
        'question_id',
        'value'
    ];

    /**
     * Get the user that owns the Value
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function question()
    {
        return $this->belongsTo(Questions::class, 'foreign_key', 'other_key');
    }
}
