<?php


namespace Package\Infrastructure\Models\FilterConditions;


use Illuminate\Support\Collection;
use Package\Infrastructure\Models\BaseModel;

class Amount implements FilterCondition
{
    public static function applyFilter(Collection $data, BaseModel $model, array|null $filters): Collection
    {
        return $data->whereBetween($model->fillables['amount'], [$filters['balanceMin'], $filters['balanceMax']]);
    }
}
