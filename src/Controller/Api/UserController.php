<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserController extends AbstractController
{
    public function create(): JsonResponse
    {
        return $this->json(null);
    }

    public function update(): JsonResponse
    {
        return $this->json(null);
    }
}
