<?php

namespace App\Entity;

use App\Repository\KilometrageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: KilometrageRepository::class)]
class Kilometrage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $kilometrage_total = null;

    #[ORM\Column]
    private ?int $kilometrage_jour = null;

    #[ORM\Column]
    private ?int $tour = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $createtAt = null;

    #[ORM\ManyToOne(inversedBy: 'kilometrages')]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'kilometrages')]
    private ?Agence $agence = null;

    #[ORM\ManyToOne(inversedBy: 'kilometrages')]
    private ?Camion $camion = null;

    #[ORM\Column]
    private ?int $kilometrage_alert = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKilometrageTotal(): ?int
    {
        return $this->kilometrage_total;
    }

    public function setKilometrageTotal(int $kilometrage_total): static
    {
        $this->kilometrage_total = $kilometrage_total;

        return $this;
    }

    public function getKilometrageJour(): ?int
    {
        return $this->kilometrage_jour;
    }

    public function setKilometrageJour(int $kilometrage_jour): static
    {
        $this->kilometrage_jour = $kilometrage_jour;

        return $this;
    }

    public function getTour(): ?int
    {
        return $this->tour;
    }

    public function setTour(int $tour): static
    {
        $this->tour = $tour;

        return $this;
    }

    public function getCreatetAt(): ?\DateTimeInterface
    {
        return $this->createtAt;
    }

    public function setCreatetAt(\DateTimeInterface $createtAt): static
    {
        $this->createtAt = $createtAt;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getAgence(): ?Agence
    {
        return $this->agence;
    }

    public function setAgence(?Agence $agence): static
    {
        $this->agence = $agence;

        return $this;
    }

    public function getCamion(): ?Camion
    {
        return $this->camion;
    }

    public function setCamion(?Camion $camion): static
    {
        $this->camion = $camion;

        return $this;
    }

    public function getKilometrageAlert(): ?int
    {
        return $this->kilometrage_alert;
    }

    public function setKilometrageAlert(int $kilometrage_alert): static
    {
        $this->kilometrage_alert = $kilometrage_alert;

        return $this;
    }
}
