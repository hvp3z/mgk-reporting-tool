<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $codepostal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telfixe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telpro;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $login;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mdp;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Reporting", mappedBy="users")
     */
    private $reportings;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Civilite", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $civilite;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\UserType", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    public function __construct()
    {
        $this->reportings = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodepostal(): ?string
    {
        return $this->codepostal;
    }

    public function setCodepostal(string $codepostal): self
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelfixe(): ?string
    {
        return $this->telfixe;
    }

    public function setTelfixe(?string $telfixe): self
    {
        $this->telfixe = $telfixe;

        return $this;
    }

    public function getTelpro(): ?string
    {
        return $this->telpro;
    }

    public function setTelpro(?string $telpro): self
    {
        $this->telpro = $telpro;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * @return Collection|Reporting[]
     */
    public function getReportings(): Collection
    {
        return $this->reportings;
    }

    public function addReporting(Reporting $reporting): self
    {
        if (!$this->reportings->contains($reporting)) {
            $this->reportings[] = $reporting;
            $reporting->addUser($this);
        }

        return $this;
    }

    public function removeReporting(Reporting $reporting): self
    {
        if ($this->reportings->contains($reporting)) {
            $this->reportings->removeElement($reporting);
            $reporting->removeUser($this);
        }

        return $this;
    }

    public function getCivilite(): ?Civilite
    {
        return $this->civilite;
    }

    public function setCivilite(Civilite $civilite): self
    {
        $this->civilite = $civilite;

        return $this;
    
}
    public function getType(): ?UserType
    {
        return $this->type;
    }

    public function setType(UserType $type): self
    {
        $this->type = $type;

        return $this;
    }
}
