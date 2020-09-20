<?php

namespace App\Entity;

use App\Repository\AfbeeldingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AfbeeldingRepository::class)
 */
class Afbeelding
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
    private $afbeelding_naam;

    /**
     * @ORM\Column(type="time")
     */
    private $upload_at;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $relation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAfbeeldingNaam(): ?string
    {
        return $this->afbeelding_naam;
    }

    public function setAfbeeldingNaam(string $afbeelding_naam): self
    {
        $this->afbeelding_naam = $afbeelding_naam;

        return $this;
    }

    public function getUploadAt(): ?\DateTimeInterface
    {
        return $this->upload_at;
    }

    public function setUploadAt(\DateTimeInterface $upload_at): self
    {
        $this->upload_at = $upload_at;

        return $this;
    }

    public function getRelation(): ?string
    {
        return $this->relation;
    }

    public function setRelation(string $relation): self
    {
        $this->relation = $relation;

        return $this;
    }
}
