<?php

namespace nghia23d\cms\Models;

class Blog extends BaseModel
{
    protected $table = 'blog';

    const HIGHLIGHT = 1;

    protected $fillable = [
        'id',
        'title',
        'slug_title',
        'thumbnail',
        'meta_description',
        'content',
        'tag',
        'status',
        'is_highlight',
        'user_id'
    ];

    protected $searchable = [
        'title',
        // 'content',
        'tag',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeHighLight($query)
    {
        return $query->where('is_highlight', self::HIGHLIGHT);
    }

    public function getTagArrayAttribute()
    {
        return explode(',', $this->tag);
    }

    public function getShortContentAttribute()
    {
        $content = preg_replace("/<img[^>]+\>/i", "(image)", $this->content);

        return preg_replace('/\s+?(\S+)?$/', '', substr($content, 0, 180)) . '...';
    }

    public function getBlogWithSlugTitle($slug_title)
    {
        return $this->active()
            ->where('slug_title', $slug_title)
            ->firstOrFail();
    }

    public function getBlogHighLight($numbers)
    {
        return $this->active()
            ->highlight()
            ->offset(0)
            ->limit($numbers)
            ->latest()
            ->get();
    }
}
