<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class BoardController extends AbstractController
{
    public function create(): JsonResponse
    {
        return $this->json(null);
    }

    public function update(): JsonResponse
    {
        return $this->json(null);
    }

    public function delete(): JsonResponse
    {
        return $this->json(null);
    }
}
