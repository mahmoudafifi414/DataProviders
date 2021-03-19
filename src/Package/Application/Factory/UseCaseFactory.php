<?php


namespace Package\Application\Factory;

use Illuminate\Http\Request;
use Package\Application\UseCases\GetDataBasedOnFilter;
use Package\Domain\IRepository;

class UseCaseFactory
{
    public static function getProperUseCase(Request $request, IRepository $repository): array
    {
        $useCase = new GetDataBasedOnFilter($repository, $request);
        return $useCase();
    }
}
