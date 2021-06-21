<?php

namespace nghia23d\cms\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE   = 1;

    const ITEM_PER_PAGE   = 10;

    public function scopeActive($query)
    {
        return $query->where('status', self::STATUS_ACTIVE);
    }

    public function scopeInActive($query)
    {
        return $query->where('status', self::STATUS_INACTIVE);
    }

    public function getDataActive($limit = 10)
    {
        return $this->active()
                ->skip(0)
                ->take($limit)
                ->latest()
                ->get();
    }

    public function getDataActivePagination()
    {
        return $this->active()
                ->latest()
                ->paginate(self::ITEM_PER_PAGE);
    }

    public function search($q)
    {
        $data = $this::query();

        foreach ($this->searchable as $index => $field) {
            if (!$index) {
                $data->where($field, 'LIKE', "%{$q}%");
            } else {
                $data->orWhere($field, 'LIKE', "%{$q}%");
            }
        };

        return $data->active()
        ->latest()
        ->paginate(self::ITEM_PER_PAGE);
    }
}
