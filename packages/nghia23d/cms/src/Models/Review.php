<?php

namespace nghia23d\cms\Models;

class Review extends BaseModel
{
    protected $table = 'review';

    protected $fillable = [
        'id',
        'user_name',
        'avatar',
        'position',
        'description',
        'stars',
        'status',
    ];
}
