<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $naam;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $omschrijving;

    /**
     * @ORM\Column(type="integer")
     */
    private $prijs;

    /**
     * @ORM\ManyToOne(targetEntity=Btw::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $BtwID;

    /**
     * @ORM\ManyToOne(targetEntity=Image::class, inversedBy="product_id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $product_image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNaam(): ?string
    {
        return $this->naam;
    }

    public function setNaam(string $naam): self
    {
        $this->naam = $naam;

        return $this;
    }

    public function getOmschrijving(): ?string
    {
        return $this->omschrijving;
    }

    public function setOmschrijving(string $omschrijving): self
    {
        $this->omschrijving = $omschrijving;

        return $this;
    }

    public function getPrijs(): ?int
    {
        return $this->prijs;
    }

    public function setPrijs(int $prijs): self
    {
        $this->prijs = $prijs;

        return $this;
    }

    public function getBtwID(): ?Btw
    {
        return $this->BtwID;
    }

    public function setBtwID(?Btw $BtwID): self
    {
        $this->BtwID = $BtwID;

        return $this;
    }

    public function getProductImage(): ?Image
    {
        return $this->product_image;
    }

    public function setProductImage(?Image $product_image): self
    {
        $this->product_image = $product_image;

        return $this;
    }
}
