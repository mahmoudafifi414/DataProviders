<?php


namespace Package\Infrastructure\Models;


use Illuminate\Support\Collection;
use Package\Infrastructure\DataSource\FileProviderModelFacade;
use Package\Infrastructure\Models\Traits\FilterTrait;

abstract class BaseModel extends FileProviderModelFacade
{
    use FilterTrait;

    public function getData(array|null $filters): Collection
    {
        $data = collect(static::getFileData());
        if (!$filters) {
            return $data;
        }
        return FilterTrait::applyFilters($data, $this, $filters);
    }
}
