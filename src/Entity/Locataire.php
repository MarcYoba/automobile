<?php

namespace App\Entity;

use App\Repository\LocataireRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LocataireRepository::class)]
class Locataire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $identification = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $contact = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $permis = null;

    #[ORM\Column]
    private ?float $paiementmobile = null;

    #[ORM\Column]
    private ?float $paiementbancaire = null;

    #[ORM\Column]
    private ?float $paiementcash = null;

    #[ORM\Column]
    private ?float $paiementcredit = null;

    #[ORM\ManyToOne(inversedBy: 'locataires')]
    private ?Clients $client = null;

    #[ORM\ManyToOne(inversedBy: 'locataires')]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'locataires')]
    private ?Agence $agence = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(length: 255)]
    private ?string $heureDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $DateFin = null;

    #[ORM\Column(length: 255)]
    private ?string $heureFin = null;

    #[ORM\Column(length: 255)]
    private ?string $lieuDepart = null;

    #[ORM\Column(length: 255)]
    private ?string $lieurRetour = null;

    #[ORM\Column(length: 255)]
    private ?string $dureeLocation = null;

    #[ORM\Column(length: 255)]
    private ?string $statusReservation = null;

    #[ORM\Column]
    private ?float $montant = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdentification(): ?string
    {
        return $this->identification;
    }

    public function setIdentification(string $identification): static
    {
        $this->identification = $identification;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(string $contact): static
    {
        $this->contact = $contact;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getPermis(): ?string
    {
        return $this->permis;
    }

    public function setPermis(string $permis): static
    {
        $this->permis = $permis;

        return $this;
    }

    public function getPaiementmobile(): ?float
    {
        return $this->paiementmobile;
    }

    public function setPaiementmobile(float $paiementmobile): static
    {
        $this->paiementmobile = $paiementmobile;

        return $this;
    }

    public function getPaiementbancaire(): ?float
    {
        return $this->paiementbancaire;
    }

    public function setPaiementbancaire(float $paiementbancaire): static
    {
        $this->paiementbancaire = $paiementbancaire;

        return $this;
    }

    public function getPaiementcash(): ?float
    {
        return $this->paiementcash;
    }

    public function setPaiementcash(float $paiementcash): static
    {
        $this->paiementcash = $paiementcash;

        return $this;
    }

    public function getPaiementcredit(): ?float
    {
        return $this->paiementcredit;
    }

    public function setPaiementcredit(float $paiementcredit): static
    {
        $this->paiementcredit = $paiementcredit;

        return $this;
    }

    public function getClient(): ?Clients
    {
        return $this->client;
    }

    public function setClient(?Clients $client): static
    {
        $this->client = $client;

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

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): static
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getHeureDebut(): ?string
    {
        return $this->heureDebut;
    }

    public function setHeureDebut(string $heureDebut): static
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->DateFin;
    }

    public function setDateFin(\DateTimeInterface $DateFin): static
    {
        $this->DateFin = $DateFin;

        return $this;
    }

    public function getHeureFin(): ?string
    {
        return $this->heureFin;
    }

    public function setHeureFin(string $heureFin): static
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    public function getLieuDepart(): ?string
    {
        return $this->lieuDepart;
    }

    public function setLieuDepart(string $lieuDepart): static
    {
        $this->lieuDepart = $lieuDepart;

        return $this;
    }

    public function getLieurRetour(): ?string
    {
        return $this->lieurRetour;
    }

    public function setLieurRetour(string $lieurRetour): static
    {
        $this->lieurRetour = $lieurRetour;

        return $this;
    }

    public function getDureeLocation(): ?string
    {
        return $this->dureeLocation;
    }

    public function setDureeLocation(string $dureeLocation): static
    {
        $this->dureeLocation = $dureeLocation;

        return $this;
    }

    public function getStatusReservation(): ?string
    {
        return $this->statusReservation;
    }

    public function setStatusReservation(string $statusReservation): static
    {
        $this->statusReservation = $statusReservation;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): static
    {
        $this->montant = $montant;

        return $this;
    }
}
