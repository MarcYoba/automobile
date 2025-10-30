<?php

namespace App\Entity;

use App\Repository\AgenceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AgenceRepository::class)]
class Agence
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datecreation = null;


    #[ORM\ManyToOne(inversedBy: 'agences')]
    private ?User $user = null;

    #[ORM\Column]
    private ?int $createdBY = null;

    #[ORM\Column(length: 255)]
    private ?string $adress = null;

    #[ORM\OneToMany(mappedBy: 'agence', targetEntity: Employer::class)]
    private Collection $employer;

    #[ORM\OneToMany(mappedBy: 'agence', targetEntity: Depenses::class)]
    private Collection $depenses;

    #[ORM\OneToMany(mappedBy: 'agence', targetEntity: Achat::class)]
    private Collection $achats;

    #[ORM\OneToMany(mappedBy: 'agence', targetEntity: Produit::class)]
    private Collection $produits;

    #[ORM\OneToMany(mappedBy: 'agence', targetEntity: Fournisseur::class)]
    private Collection $fournisseurs;

    #[ORM\OneToMany(mappedBy: 'agence', targetEntity: Vente::class)]
    private Collection $ventes;

    #[ORM\OneToMany(mappedBy: 'agence', targetEntity: Facture::class)]
    private Collection $factures;

    #[ORM\OneToMany(mappedBy: 'agence', targetEntity: TempAgence::class)]
    private Collection $tempAgences;

    #[ORM\OneToMany(mappedBy: 'Agence', targetEntity: Caisse::class)]
    private Collection $caisses;

    #[ORM\OneToMany(mappedBy: 'agance', targetEntity: Historique::class)]
    private Collection $historiques;

    #[ORM\OneToMany(mappedBy: 'agence', targetEntity: Actif::class)]
    private Collection $actifs;

    #[ORM\OneToMany(mappedBy: 'agence', targetEntity: Passif::class)]
    private Collection $passifs;

    #[ORM\OneToMany(mappedBy: 'agance', targetEntity: Lots::class)]
    private Collection $lots;

    #[ORM\OneToMany(mappedBy: 'agecne', targetEntity: DepenseActif::class)]
    private Collection $depenseActifs;

    #[ORM\OneToMany(mappedBy: 'agence', targetEntity: DepensePassif::class)]
    private Collection $depensePassifs;

    #[ORM\OneToMany(mappedBy: 'agence', targetEntity: Prospection::class)]
    private Collection $prospections;

    #[ORM\OneToMany(mappedBy: 'agence', targetEntity: Tresorerie::class)]
    private Collection $tresoreries;

    #[ORM\OneToMany(mappedBy: 'agence', targetEntity: Balance::class)]
    private Collection $balances;

    #[ORM\OneToMany(mappedBy: 'agence', targetEntity: Immobilisation::class)]
    private Collection $immobilisations;

    #[ORM\OneToMany(mappedBy: 'agence', targetEntity: Camion::class)]
    private Collection $camions;

    #[ORM\OneToMany(mappedBy: 'agence', targetEntity: Locataire::class)]
    private Collection $locataires;

    public function __construct()
    {
        $this->employer = new ArrayCollection();
        $this->depenses = new ArrayCollection();
        $this->achats = new ArrayCollection();
        $this->produits = new ArrayCollection();
        $this->fournisseurs = new ArrayCollection();
        $this->ventes = new ArrayCollection();
        $this->factures = new ArrayCollection();
        $this->tempAgences = new ArrayCollection();
        $this->caisses = new ArrayCollection();
        $this->historiques = new ArrayCollection();
        $this->actifs = new ArrayCollection();
        $this->passifs = new ArrayCollection();
        $this->lots = new ArrayCollection();
        $this->depenseActifs = new ArrayCollection();
        $this->depensePassifs = new ArrayCollection();
        $this->prospections = new ArrayCollection();
        $this->tresoreries = new ArrayCollection();
        $this->balances = new ArrayCollection();
        $this->immobilisations = new ArrayCollection();
        $this->camions = new ArrayCollection();
        $this->locataires = new ArrayCollection();
    }

   

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDatecreation(): ?\DateTimeInterface
    {
        return $this->datecreation;
    }

    public function setDatecreation(\DateTimeInterface $datecreation): static
    {
        $this->datecreation = $datecreation;

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

    public function getCreatedBY(): ?int
    {
        return $this->createdBY;
    }

    public function setCreatedBY(int $createdBY): static
    {
        $this->createdBY = $createdBY;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): static
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * @return Collection<int, Employer>
     */
    public function getEmployer(): Collection
    {
        return $this->employer;
    }

    public function addEmployer(Employer $employer): static
    {
        if (!$this->employer->contains($employer)) {
            $this->employer->add($employer);
            $employer->setAgence($this);
        }

        return $this;
    }

    public function removeEmployer(Employer $employer): static
    {
        if ($this->employer->removeElement($employer)) {
            // set the owning side to null (unless already changed)
            if ($employer->getAgence() === $this) {
                $employer->setAgence(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Depenses>
     */
    public function getDepenses(): Collection
    {
        return $this->depenses;
    }

    public function addDepense(Depenses $depense): static
    {
        if (!$this->depenses->contains($depense)) {
            $this->depenses->add($depense);
            $depense->setAgence($this);
        }

        return $this;
    }

    public function removeDepense(Depenses $depense): static
    {
        if ($this->depenses->removeElement($depense)) {
            // set the owning side to null (unless already changed)
            if ($depense->getAgence() === $this) {
                $depense->setAgence(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Achat>
     */
    public function getAchats(): Collection
    {
        return $this->achats;
    }

    public function addAchat(Achat $achat): static
    {
        if (!$this->achats->contains($achat)) {
            $this->achats->add($achat);
            $achat->setAgence($this);
        }

        return $this;
    }

    public function removeAchat(Achat $achat): static
    {
        if ($this->achats->removeElement($achat)) {
            // set the owning side to null (unless already changed)
            if ($achat->getAgence() === $this) {
                $achat->setAgence(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Produit>
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Produit $produit): static
    {
        if (!$this->produits->contains($produit)) {
            $this->produits->add($produit);
            $produit->setAgence($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): static
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getAgence() === $this) {
                $produit->setAgence(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Fournisseur>
     */
    public function getFournisseurs(): Collection
    {
        return $this->fournisseurs;
    }

    public function addFournisseur(Fournisseur $fournisseur): static
    {
        if (!$this->fournisseurs->contains($fournisseur)) {
            $this->fournisseurs->add($fournisseur);
            $fournisseur->setAgence($this);
        }

        return $this;
    }

    public function removeFournisseur(Fournisseur $fournisseur): static
    {
        if ($this->fournisseurs->removeElement($fournisseur)) {
            // set the owning side to null (unless already changed)
            if ($fournisseur->getAgence() === $this) {
                $fournisseur->setAgence(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Vente>
     */
    public function getVentes(): Collection
    {
        return $this->ventes;
    }

    public function addVente(Vente $vente): static
    {
        if (!$this->ventes->contains($vente)) {
            $this->ventes->add($vente);
            $vente->setAgence($this);
        }

        return $this;
    }

    public function removeVente(Vente $vente): static
    {
        if ($this->ventes->removeElement($vente)) {
            // set the owning side to null (unless already changed)
            if ($vente->getAgence() === $this) {
                $vente->setAgence(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Facture>
     */
    public function getFactures(): Collection
    {
        return $this->factures;
    }

    public function addFacture(Facture $facture): static
    {
        if (!$this->factures->contains($facture)) {
            $this->factures->add($facture);
            $facture->setAgence($this);
        }

        return $this;
    }

    public function removeFacture(Facture $facture): static
    {
        if ($this->factures->removeElement($facture)) {
            // set the owning side to null (unless already changed)
            if ($facture->getAgence() === $this) {
                $facture->setAgence(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, TempAgence>
     */
    public function getTempAgences(): Collection
    {
        return $this->tempAgences;
    }

    public function addTempAgence(TempAgence $tempAgence): static
    {
        if (!$this->tempAgences->contains($tempAgence)) {
            $this->tempAgences->add($tempAgence);
            $tempAgence->setAgence($this);
        }

        return $this;
    }

    public function removeTempAgence(TempAgence $tempAgence): static
    {
        if ($this->tempAgences->removeElement($tempAgence)) {
            // set the owning side to null (unless already changed)
            if ($tempAgence->getAgence() === $this) {
                $tempAgence->setAgence(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Caisse>
     */
    public function getCaisses(): Collection
    {
        return $this->caisses;
    }

    public function addCaiss(Caisse $caiss): static
    {
        if (!$this->caisses->contains($caiss)) {
            $this->caisses->add($caiss);
            $caiss->setAgence($this);
        }

        return $this;
    }

    public function removeCaiss(Caisse $caiss): static
    {
        if ($this->caisses->removeElement($caiss)) {
            // set the owning side to null (unless already changed)
            if ($caiss->getAgence() === $this) {
                $caiss->setAgence(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Historique>
     */
    public function getHistoriques(): Collection
    {
        return $this->historiques;
    }

    public function addHistorique(Historique $historique): static
    {
        if (!$this->historiques->contains($historique)) {
            $this->historiques->add($historique);
            $historique->setAgance($this);
        }

        return $this;
    }

    public function removeHistorique(Historique $historique): static
    {
        if ($this->historiques->removeElement($historique)) {
            // set the owning side to null (unless already changed)
            if ($historique->getAgance() === $this) {
                $historique->setAgance(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Actif>
     */
    public function getActifs(): Collection
    {
        return $this->actifs;
    }

    public function addActif(Actif $actif): static
    {
        if (!$this->actifs->contains($actif)) {
            $this->actifs->add($actif);
            $actif->setAgence($this);
        }

        return $this;
    }

    public function removeActif(Actif $actif): static
    {
        if ($this->actifs->removeElement($actif)) {
            // set the owning side to null (unless already changed)
            if ($actif->getAgence() === $this) {
                $actif->setAgence(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Passif>
     */
    public function getPassifs(): Collection
    {
        return $this->passifs;
    }

    public function addPassif(Passif $passif): static
    {
        if (!$this->passifs->contains($passif)) {
            $this->passifs->add($passif);
            $passif->setAgence($this);
        }

        return $this;
    }

    public function removePassif(Passif $passif): static
    {
        if ($this->passifs->removeElement($passif)) {
            // set the owning side to null (unless already changed)
            if ($passif->getAgence() === $this) {
                $passif->setAgence(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Lots>
     */
    public function getLots(): Collection
    {
        return $this->lots;
    }

    public function addLot(Lots $lot): static
    {
        if (!$this->lots->contains($lot)) {
            $this->lots->add($lot);
            $lot->setAgance($this);
        }

        return $this;
    }

    public function removeLot(Lots $lot): static
    {
        if ($this->lots->removeElement($lot)) {
            // set the owning side to null (unless already changed)
            if ($lot->getAgance() === $this) {
                $lot->setAgance(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, DepenseActif>
     */
    public function getDepenseActifs(): Collection
    {
        return $this->depenseActifs;
    }

    public function addDepenseActif(DepenseActif $depenseActif): static
    {
        if (!$this->depenseActifs->contains($depenseActif)) {
            $this->depenseActifs->add($depenseActif);
            $depenseActif->setAgence($this);
        }

        return $this;
    }

    public function removeDepenseActif(DepenseActif $depenseActif): static
    {
        if ($this->depenseActifs->removeElement($depenseActif)) {
            // set the owning side to null (unless already changed)
            if ($depenseActif->getAgence() === $this) {
                $depenseActif->setAgence(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, DepensePassif>
     */
    public function getDepensePassifs(): Collection
    {
        return $this->depensePassifs;
    }

    public function addDepensePassif(DepensePassif $depensePassif): static
    {
        if (!$this->depensePassifs->contains($depensePassif)) {
            $this->depensePassifs->add($depensePassif);
            $depensePassif->setAgence($this);
        }

        return $this;
    }

    public function removeDepensePassif(DepensePassif $depensePassif): static
    {
        if ($this->depensePassifs->removeElement($depensePassif)) {
            // set the owning side to null (unless already changed)
            if ($depensePassif->getAgence() === $this) {
                $depensePassif->setAgence(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Prospection>
     */
    public function getProspections(): Collection
    {
        return $this->prospections;
    }

    public function addProspection(Prospection $prospection): static
    {
        if (!$this->prospections->contains($prospection)) {
            $this->prospections->add($prospection);
            $prospection->setAgence($this);
        }

        return $this;
    }

    public function removeProspection(Prospection $prospection): static
    {
        if ($this->prospections->removeElement($prospection)) {
            // set the owning side to null (unless already changed)
            if ($prospection->getAgence() === $this) {
                $prospection->setAgence(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Tresorerie>
     */
    public function getTresoreries(): Collection
    {
        return $this->tresoreries;
    }

    public function addTresorery(Tresorerie $tresorery): static
    {
        if (!$this->tresoreries->contains($tresorery)) {
            $this->tresoreries->add($tresorery);
            $tresorery->setAgence($this);
        }

        return $this;
    }

    public function removeTresorery(Tresorerie $tresorery): static
    {
        if ($this->tresoreries->removeElement($tresorery)) {
            // set the owning side to null (unless already changed)
            if ($tresorery->getAgence() === $this) {
                $tresorery->setAgence(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Balance>
     */
    public function getBalances(): Collection
    {
        return $this->balances;
    }

    public function addBalance(Balance $balance): static
    {
        if (!$this->balances->contains($balance)) {
            $this->balances->add($balance);
            $balance->setAgence($this);
        }

        return $this;
    }

    public function removeBalance(Balance $balance): static
    {
        if ($this->balances->removeElement($balance)) {
            // set the owning side to null (unless already changed)
            if ($balance->getAgence() === $this) {
                $balance->setAgence(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Immobilisation>
     */
    public function getImmobilisations(): Collection
    {
        return $this->immobilisations;
    }

    public function addImmobilisation(Immobilisation $immobilisation): static
    {
        if (!$this->immobilisations->contains($immobilisation)) {
            $this->immobilisations->add($immobilisation);
            $immobilisation->setAgence($this);
        }

        return $this;
    }

    public function removeImmobilisation(Immobilisation $immobilisation): static
    {
        if ($this->immobilisations->removeElement($immobilisation)) {
            // set the owning side to null (unless already changed)
            if ($immobilisation->getAgence() === $this) {
                $immobilisation->setAgence(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Camion>
     */
    public function getCamions(): Collection
    {
        return $this->camions;
    }

    public function addCamion(Camion $camion): static
    {
        if (!$this->camions->contains($camion)) {
            $this->camions->add($camion);
            $camion->setAgence($this);
        }

        return $this;
    }

    public function removeCamion(Camion $camion): static
    {
        if ($this->camions->removeElement($camion)) {
            // set the owning side to null (unless already changed)
            if ($camion->getAgence() === $this) {
                $camion->setAgence(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Locataire>
     */
    public function getLocataires(): Collection
    {
        return $this->locataires;
    }

    public function addLocataire(Locataire $locataire): static
    {
        if (!$this->locataires->contains($locataire)) {
            $this->locataires->add($locataire);
            $locataire->setAgence($this);
        }

        return $this;
    }

    public function removeLocataire(Locataire $locataire): static
    {
        if ($this->locataires->removeElement($locataire)) {
            // set the owning side to null (unless already changed)
            if ($locataire->getAgence() === $this) {
                $locataire->setAgence(null);
            }
        }

        return $this;
    }
}
