<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Attribute\AsController;
use App\Services\HotelApi;

#[AsController]
class HotelController extends AbstractController
{
    public function __construct (
        private HotelApi $api
    ) {
    }

    public function __invoke()
    {
        return $this->api->getHotelData();
    }
}
