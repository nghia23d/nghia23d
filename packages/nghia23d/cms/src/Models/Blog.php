<?php

namespace nghia23d\cms\Models;

class Blog extends BaseModel
{
    protected $table = 'blog';

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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTagArrayAttribute()
    {
        return explode(',', $this->tag);
    }

    public function getBlogWithSlugTitle($slug_title)
    {
        return $this->where('slug_title', $slug_title)
            ->active()
            ->firstOrFail();
    }
}
