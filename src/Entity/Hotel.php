<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\HotelRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Controller\HotelController;
use ApiPlatform\Metadata\Get;
use Symfony\Component\HttpFoundation\Request;

#[ORM\Entity(repositoryClass: HotelRepository::class)]
#[ApiResource]

class Hotel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $posName = null;

    #[ORM\Column(length: 255)]
    private ?string $hcomLoacle = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPosName(): ?string
    {
        return $this->posName;
    }

    public function setPosName(string $posName): self
    {
        $this->posName = $posName;

        return $this;
    }

    public function getHcomLoacle(): ?string
    {
        return $this->hcomLoacle;
    }

    public function setHcomLoacle(string $hcomLoacle): self
    {
        $this->hcomLoacle = $hcomLoacle;

        return $this;
    }
}
