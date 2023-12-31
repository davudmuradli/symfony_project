<?php

namespace App\Entity;

use App\Repository\PricePlanBenefitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PricePlanBenefitRepository::class)]
class PricePlanBenefit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    #[ORM\ManyToOne(inversedBy: 'benefits')]
    #[ORM\JoinColumn(nullable: false)]
    private ?PricePlan $pricePlan = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getPricePlan(): ?PricePlan
    {
        return $this->pricePlan;
    }

    public function setPricePlan(?PricePlan $pricePlan): static
    {
        $this->pricePlan = $pricePlan;

        return $this;
    }
}
