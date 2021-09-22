<?php

declare(strict_types=1);

namespace App\Infrastructure\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class CalculateScoreController
{
    #[Route('/scores', name:'scores')]
    public function __invoke(): JsonResponse
    {
        return new JsonResponse([]);
    }
}
