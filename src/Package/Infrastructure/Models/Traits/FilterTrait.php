<?php


namespace Package\Infrastructure\Models\Traits;


use Illuminate\Support\Collection;
use Package\Infrastructure\Models\BaseModel;
use Package\Infrastructure\Models\FilterConditions\Amount;
use Package\Infrastructure\Models\FilterConditions\Currency;
use Package\Infrastructure\Models\FilterConditions\StatusCode;

trait FilterTrait
{
    public static function applyFilters(Collection $data, BaseModel $model, array|null $filters): Collection
    {
        if (isset($filters['currency'])) {
            $data = Currency::applyFilter($data, $model, $filters);
        }
        if (isset($filters['statusCode'])) {
            $data = StatusCode::applyFilter($data, $model, $filters);
        }
        if (isset($filters['balanceMin']) && isset($filters['balanceMax'])) {
            $data = Amount::applyFilter($data, $model, $filters);
        }
        return $data;
    }
}
