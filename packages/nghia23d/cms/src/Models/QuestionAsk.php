<?php

namespace nghia23d\cms\Models;

class QuestionAsk extends BaseModel
{
    protected $table = 'question_ask';

    protected $fillable = [
        'id',
        'question',
        'ask',
        'status',
    ];
}
