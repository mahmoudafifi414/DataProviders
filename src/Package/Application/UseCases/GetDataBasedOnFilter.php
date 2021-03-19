<?php


namespace Package\Application\UseCases;

use Illuminate\Http\Request;
use Package\Domain\IRepository;

class GetDataBasedOnFilter
{
    private IRepository $DataProviderRepository;
    /**
     * @var Request
     */
    private Request $request;

    /**
     * @param IRepository $DataProviderRepository
     * @param Request $request
     */
    public function __construct(IRepository $DataProviderRepository, Request $request)
    {
        $this->DataProviderRepository = $DataProviderRepository;
        $this->request = $request;
    }

    public function __invoke()
    {
        $filters = $this->request->all();
        return $this->DataProviderRepository->getDataBasedOnFilters($filters);
    }
}
