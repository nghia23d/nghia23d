<?php

namespace nghia23d\cms\Models;

class Blog extends BaseModel
{
    protected $table = 'blog';

    protected $fillable = [
        'id',
        'title',
        'thumbnail',
        'meta_description',
        'content',
        'tag',
        'status',
        'user_id'
    ];
}
