<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    protected $fillable = [
        'company',
        'website',
        'logo'
    ];

    public function getLogoAttribute($value)
    {
        return url('storage/' . $value);
    }
}
