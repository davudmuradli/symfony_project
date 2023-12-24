<?php

namespace App\Entity;

use App\Repository\PricePlanRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PricePlanRepository::class)]
class PricePlan
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $price = null;

    #[ORM\OneToMany(mappedBy: 'pricePlan', targetEntity: PricePlanBenefit::class)]
    private Collection $benefits;

    #[ORM\ManyToMany(targetEntity: PricePlanFeature::class)]
    private Collection $features;

    public function __construct()
    {
        $this->benefits = new ArrayCollection();
        $this->features = new ArrayCollection();
    }

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

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): static
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return Collection<int, PricePlanBenefit>
     */
    public function getBenefits(): Collection
    {
        return $this->benefits;
    }

    public function addBenefit(PricePlanBenefit $benefit): static
    {
        if (!$this->benefits->contains($benefit)) {
            $this->benefits->add($benefit);
            $benefit->setPricePlan($this);
        }

        return $this;
    }

    public function removeBenefit(PricePlanBenefit $benefit): static
    {
        if ($this->benefits->removeElement($benefit)) {
            // set the owning side to null (unless already changed)
            if ($benefit->getPricePlan() === $this) {
                $benefit->setPricePlan(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, PricePlanFeature>
     */
    public function getFeatures(): Collection
    {
        return $this->features;
    }

    public function addFeature(PricePlanFeature $feature): static
    {
        if (!$this->features->contains($feature)) {
            $this->features->add($feature);
        }

        return $this;
    }

    public function removeFeature(PricePlanFeature $feature): static
    {
        $this->features->removeElement($feature);

        return $this;
    }
}
