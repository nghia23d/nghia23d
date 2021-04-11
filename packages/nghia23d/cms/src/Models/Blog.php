<?php

namespace nghia23d\cms\Models;

class Blog extends BaseModel
{
    protected $table = 'blog';

    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    protected $fillable = [
        'id',
        'title',
        'slug_title',
        'thumbnail',
        'meta_description',
        'content',
        'tag',
        'status',
        'user_id'
    ];

    public function scopeActive($query)
    {
        return $query->where('status', self::STATUS_ACTIVE);
    }

    public function scopeInActive($query)
    {
        return $query->where('status', self::STATUS_INACTIVE);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
