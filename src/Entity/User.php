<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(type: 'boolean')]
    private $isVerified = false;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $telephone = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $lastLogin = null;

    #[ORM\OneToOne(targetEntity:Clients::class, mappedBy: 'user', cascade: ['persist', 'remove'])]
    private ?Clients $clients = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Agence::class)]
    private Collection $agences;

    #[ORM\OneToOne(mappedBy: 'user', cascade: ['persist', 'remove'])]
    private ?Employer $Employer = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Produit::class)]
    private Collection $produits;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Fournisseur::class)]
    private Collection $fournisseurs;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Achat::class)]
    private Collection $achat;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Vente::class, orphanRemoval: true)]
    private Collection $vente;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Facture::class, orphanRemoval: true)]
    private Collection $facture;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Quantiteproduit::class, orphanRemoval: true)]
    private Collection $quantiteproduits;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $createtAt = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Versement::class, orphanRemoval: true)]
    private Collection $versements;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Depenses::class)]
    private Collection $depenses;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: TempAgence::class)]
    private Collection $tempAgences;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Caisse::class)]
    private Collection $caisses;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Actif::class)]
    private Collection $actifs;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Passif::class)]
    private Collection $passifs;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: DepenseActif::class)]
    private Collection $depenseActifs;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: DepensePassif::class)]
    private Collection $depensePassifs;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Prospection::class)]
    private Collection $prospections;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Tresorerie::class)]
    private Collection $tresoreries;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Balance::class)]
    private Collection $balances;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Immobilisation::class)]
    private Collection $immobilisations;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Camion::class)]
    private Collection $camions;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Locataire::class)]
    private Collection $locataires;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Transport::class)]
    private Collection $transports;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Chauffer::class)]
    private Collection $chauffers;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Kilometrage::class)]
    private Collection $kilometrages;


    public function __construct() {
        $this->clients = new Clients(); // Crée un Client automatiquement
        $this->clients->setUser($this); 
        $this->clients->setCreatedAt(new \DateTimeImmutable());// Lie le Client au User
        $this->agences = new ArrayCollection();
        $this->produits = new ArrayCollection();
        $this->fournisseurs = new ArrayCollection();
        $this->achat = new ArrayCollection();
        $this->vente = new ArrayCollection();
        $this->facture = new ArrayCollection();
        $this->quantiteproduits = new ArrayCollection();
        $this->versements = new ArrayCollection();
        $this->depenses = new ArrayCollection();
        $this->tempAgences = new ArrayCollection();
        $this->caisses = new ArrayCollection();
        $this->actifs = new ArrayCollection();
        $this->passifs = new ArrayCollection();
        $this->depenseActifs = new ArrayCollection();
        $this->depensePassifs = new ArrayCollection();
        $this->prospections = new ArrayCollection();
        $this->tresoreries = new ArrayCollection();
        $this->balances = new ArrayCollection();
        $this->immobilisations = new ArrayCollection();
        $this->camions = new ArrayCollection();
        $this->locataires = new ArrayCollection();
        $this->transports = new ArrayCollection();
        $this->chauffers = new ArrayCollection();
        $this->kilometrages = new ArrayCollection();
        
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): static
    {
        $this->isVerified = $isVerified;

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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getClients(): ?Clients
    {
        return $this->clients;
    }

    public function setClients(Clients $clients): static
    {
        // set the owning side of the relation if necessary
        if ($clients->getUser() !== $this) {
            $clients->setUser($this);
        }

        $this->clients = $clients;

        return $this;
    }

    /**
     * @return Collection<int, Agence>
     */
    public function getAgences(): Collection
    {
        return $this->agences;
    }

    public function addAgence(Agence $agence): static
    {
        if (!$this->agences->contains($agence)) {
            $this->agences->add($agence);
            $agence->setUser($this);
        }

        return $this;
    }

    public function removeAgence(Agence $agence): static
    {
        if ($this->agences->removeElement($agence)) {
            // set the owning side to null (unless already changed)
            if ($agence->getUser() === $this) {
                $agence->setUser(null);
            }
        }

        return $this;
    }

    public function getEmployer(): ?Employer
    {
        return $this->Employer;
    }

    public function setEmployer(Employer $Employer): static
    {
        // set the owning side of the relation if necessary
        if ($Employer->getUser() !== $this) {
            $Employer->setUser($this);
        }

        $this->Employer = $Employer;

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
            $produit->setUser($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): static
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getUser() === $this) {
                $produit->setUser(null);
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
            $fournisseur->setUser($this);
        }

        return $this;
    }

    public function removeFournisseur(Fournisseur $fournisseur): static
    {
        if ($this->fournisseurs->removeElement($fournisseur)) {
            // set the owning side to null (unless already changed)
            if ($fournisseur->getUser() === $this) {
                $fournisseur->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Achat>
     */
    public function getAchat(): Collection
    {
        return $this->achat;
    }

    public function addAchat(Achat $achat): static
    {
        if (!$this->achat->contains($achat)) {
            $this->achat->add($achat);
            $achat->setUser($this);
        }

        return $this;
    }

    public function removeAchat(Achat $achat): static
    {
        if ($this->achat->removeElement($achat)) {
            // set the owning side to null (unless already changed)
            if ($achat->getUser() === $this) {
                $achat->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Vente>
     */
    public function getVente(): Collection
    {
        return $this->vente;
    }

    public function addVente(Vente $vente): static
    {
        if (!$this->vente->contains($vente)) {
            $this->vente->add($vente);
            $vente->setUser($this);
        }

        return $this;
    }

    public function removeVente(Vente $vente): static
    {
        if ($this->vente->removeElement($vente)) {
            // set the owning side to null (unless already changed)
            if ($vente->getUser() === $this) {
                $vente->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Facture>
     */
    public function getFacture(): Collection
    {
        return $this->facture;
    }

    public function addFacture(Facture $facture): static
    {
        if (!$this->facture->contains($facture)) {
            $this->facture->add($facture);
            $facture->setUser($this);
        }

        return $this;
    }

    public function removeFacture(Facture $facture): static
    {
        if ($this->facture->removeElement($facture)) {
            // set the owning side to null (unless already changed)
            if ($facture->getUser() === $this) {
                $facture->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Quantiteproduit>
     */
    public function getQuantiteproduits(): Collection
    {
        return $this->quantiteproduits;
    }

    public function addQuantiteproduit(Quantiteproduit $quantiteproduit): static
    {
        if (!$this->quantiteproduits->contains($quantiteproduit)) {
            $this->quantiteproduits->add($quantiteproduit);
            $quantiteproduit->setUser($this);
        }

        return $this;
    }

    public function removeQuantiteproduit(Quantiteproduit $quantiteproduit): static
    {
        if ($this->quantiteproduits->removeElement($quantiteproduit)) {
            // set the owning side to null (unless already changed)
            if ($quantiteproduit->getUser() === $this) {
                $quantiteproduit->setUser(null);
            }
        }

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

    /**
     * @return Collection<int, Versement>
     */
    public function getVersements(): Collection
    {
        return $this->versements;
    }

    public function addVersement(Versement $versement): static
    {
        if (!$this->versements->contains($versement)) {
            $this->versements->add($versement);
            $versement->setUser($this);
        }

        return $this;
    }

    public function removeVersement(Versement $versement): static
    {
        if ($this->versements->removeElement($versement)) {
            // set the owning side to null (unless already changed)
            if ($versement->getUser() === $this) {
                $versement->setUser(null);
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
            $depense->setUser($this);
        }

        return $this;
    }

    public function removeDepense(Depenses $depense): static
    {
        if ($this->depenses->removeElement($depense)) {
            // set the owning side to null (unless already changed)
            if ($depense->getUser() === $this) {
                $depense->setUser(null);
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
            $tempAgence->setUser($this);
        }

        return $this;
    }

    public function removeTempAgence(TempAgence $tempAgence): static
    {
        if ($this->tempAgences->removeElement($tempAgence)) {
            // set the owning side to null (unless already changed)
            if ($tempAgence->getUser() === $this) {
                $tempAgence->setUser(null);
            }
        }

        return $this;
    }

    public function getLastLogin(): ?\DateTimeInterface
    {
        return $this->lastLogin;
    }

    public function setLastLogin(?\DateTimeInterface $lastLogin): static
    {
        $this->lastLogin = $lastLogin;

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
            $caiss->setUser($this);
        }

        return $this;
    }

    public function removeCaiss(Caisse $caiss): static
    {
        if ($this->caisses->removeElement($caiss)) {
            // set the owning side to null (unless already changed)
            if ($caiss->getUser() === $this) {
                $caiss->setUser(null);
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
            $actif->setUser($this);
        }

        return $this;
    }

    public function removeActif(Actif $actif): static
    {
        if ($this->actifs->removeElement($actif)) {
            // set the owning side to null (unless already changed)
            if ($actif->getUser() === $this) {
                $actif->setUser(null);
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
            $passif->setUser($this);
        }

        return $this;
    }

    public function removePassif(Passif $passif): static
    {
        if ($this->passifs->removeElement($passif)) {
            // set the owning side to null (unless already changed)
            if ($passif->getUser() === $this) {
                $passif->setUser(null);
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
            $depenseActif->setUser($this);
        }

        return $this;
    }

    public function removeDepenseActif(DepenseActif $depenseActif): static
    {
        if ($this->depenseActifs->removeElement($depenseActif)) {
            // set the owning side to null (unless already changed)
            if ($depenseActif->getUser() === $this) {
                $depenseActif->setUser(null);
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
            $depensePassif->setUser($this);
        }

        return $this;
    }

    public function removeDepensePassif(DepensePassif $depensePassif): static
    {
        if ($this->depensePassifs->removeElement($depensePassif)) {
            // set the owning side to null (unless already changed)
            if ($depensePassif->getUser() === $this) {
                $depensePassif->setUser(null);
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
            $prospection->setUser($this);
        }

        return $this;
    }

    public function removeProspection(Prospection $prospection): static
    {
        if ($this->prospections->removeElement($prospection)) {
            // set the owning side to null (unless already changed)
            if ($prospection->getUser() === $this) {
                $prospection->setUser(null);
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
            $tresorery->setUser($this);
        }

        return $this;
    }

    public function removeTresorery(Tresorerie $tresorery): static
    {
        if ($this->tresoreries->removeElement($tresorery)) {
            // set the owning side to null (unless already changed)
            if ($tresorery->getUser() === $this) {
                $tresorery->setUser(null);
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
            $balance->setUser($this);
        }

        return $this;
    }

    public function removeBalance(Balance $balance): static
    {
        if ($this->balances->removeElement($balance)) {
            // set the owning side to null (unless already changed)
            if ($balance->getUser() === $this) {
                $balance->setUser(null);
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
            $immobilisation->setUser($this);
        }

        return $this;
    }

    public function removeImmobilisation(Immobilisation $immobilisation): static
    {
        if ($this->immobilisations->removeElement($immobilisation)) {
            // set the owning side to null (unless already changed)
            if ($immobilisation->getUser() === $this) {
                $immobilisation->setUser(null);
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
            $camion->setUser($this);
        }

        return $this;
    }

    public function removeCamion(Camion $camion): static
    {
        if ($this->camions->removeElement($camion)) {
            // set the owning side to null (unless already changed)
            if ($camion->getUser() === $this) {
                $camion->setUser(null);
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
            $locataire->setUser($this);
        }

        return $this;
    }

    public function removeLocataire(Locataire $locataire): static
    {
        if ($this->locataires->removeElement($locataire)) {
            // set the owning side to null (unless already changed)
            if ($locataire->getUser() === $this) {
                $locataire->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Transport>
     */
    public function getTransports(): Collection
    {
        return $this->transports;
    }

    public function addTransport(Transport $transport): static
    {
        if (!$this->transports->contains($transport)) {
            $this->transports->add($transport);
            $transport->setUser($this);
        }

        return $this;
    }

    public function removeTransport(Transport $transport): static
    {
        if ($this->transports->removeElement($transport)) {
            // set the owning side to null (unless already changed)
            if ($transport->getUser() === $this) {
                $transport->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Chauffer>
     */
    public function getChauffers(): Collection
    {
        return $this->chauffers;
    }

    public function addChauffer(Chauffer $chauffer): static
    {
        if (!$this->chauffers->contains($chauffer)) {
            $this->chauffers->add($chauffer);
            $chauffer->setUser($this);
        }

        return $this;
    }

    public function removeChauffer(Chauffer $chauffer): static
    {
        if ($this->chauffers->removeElement($chauffer)) {
            // set the owning side to null (unless already changed)
            if ($chauffer->getUser() === $this) {
                $chauffer->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Kilometrage>
     */
    public function getKilometrages(): Collection
    {
        return $this->kilometrages;
    }

    public function addKilometrage(Kilometrage $kilometrage): static
    {
        if (!$this->kilometrages->contains($kilometrage)) {
            $this->kilometrages->add($kilometrage);
            $kilometrage->setUser($this);
        }

        return $this;
    }

    public function removeKilometrage(Kilometrage $kilometrage): static
    {
        if ($this->kilometrages->removeElement($kilometrage)) {
            // set the owning side to null (unless already changed)
            if ($kilometrage->getUser() === $this) {
                $kilometrage->setUser(null);
            }
        }

        return $this;
    }

}
