<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    protected $fillable = [
        'slug',
        'title',
        'description',
        'thumbnail'
    ];

    public function getThumbnailAttribute($value)
    {
        return url('storage/' . $value);
    }

    /**
     * Get all of the comments for the Blog
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function views()
    {
        return $this->hasMany(BlogView::class, 'blog_id', 'id');
    }
}
