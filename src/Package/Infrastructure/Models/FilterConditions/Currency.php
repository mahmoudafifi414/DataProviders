<?php


namespace Package\Infrastructure\Models\FilterConditions;


use Illuminate\Support\Collection;
use Package\Infrastructure\Models\BaseModel;

class Currency implements FilterCondition
{

    public static function applyFilter(Collection $data, BaseModel $model, array|null $filters): Collection
    {
       return $data->where($model->fillables['currency'], '=', $filters['currency']);
    }
}
