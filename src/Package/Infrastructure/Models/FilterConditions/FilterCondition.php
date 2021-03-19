<?php


namespace Package\Infrastructure\Models\FilterConditions;


use Illuminate\Support\Collection;
use Package\Infrastructure\Models\BaseModel;

interface FilterCondition
{
    public static function applyFilter(Collection $data, BaseModel $model, array|null $filters): Collection;
}
