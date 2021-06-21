<?php

namespace nghia23d\cms\Models;

class Slider extends BaseModel
{
    protected $table = 'slider';

    protected $fillable = [
        'id',
        'title',
        'image',
        'description',
        'link',
        'status',
    ];
}
