<?php

namespace Package\Application\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Package\Application\Factory\UseCaseFactory;
use \Illuminate\Http\JsonResponse;
use Package\Domain\IRepository;

class DataProviderController extends Controller
{
    public function index(Request $request, IRepository $DataProviderRepository): JsonResponse
    {
        $data = UseCaseFactory::getProperUseCase($request, $DataProviderRepository);
        return response()->json(['data' => $data]);
    }
}
