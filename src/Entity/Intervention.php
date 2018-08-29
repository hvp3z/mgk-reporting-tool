<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InterventionRepository")
 */
class Intervention
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Reporting", inversedBy="interventions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $reporting;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $garage;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $cp;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $datecommande;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresselivraison;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prestation;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nombreveh;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $modelevehicule;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $couleur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typekit;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $montant;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $datevalidationbat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $codesrg;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateenvoicodesrg;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateexpeditionlogos;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $datepose;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $poseeffectuee;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $avancement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $codeana;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentairedemande;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ouverture;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $exploitation;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateouverture;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateposevoulue;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chefdeprojet;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typesignaletique;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $survey;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $batrecu;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $batvalide;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $autorisationsyndic;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $autorisationmairie;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $devisrecu;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $chiffrageht;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $chiffragehtvalide;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $budget;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numcommande;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $poserealiseeetcommentaires;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $contacts;

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReporting(): ?Reporting
    {
        return $this->reporting;
    }

    public function setReporting(?Reporting $reporting): self
    {
        $this->reporting = $reporting;

        return $this;
    }

    public function getGarage(): ?string
    {
        return $this->garage;
    }

    public function setGarage(?string $garage): self
    {
        $this->garage = $garage;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(?string $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getDatecommande(): ?\DateTimeInterface
    {
        return $this->datecommande;
    }

    public function setDatecommande(?\DateTimeInterface $datecommande): self
    {
        $this->datecommande = $datecommande;

        return $this;
    }

    public function getAdresselivraison(): ?string
    {
        return $this->adresselivraison;
    }

    public function setAdresselivraison(?string $adresselivraison): self
    {
        $this->adresselivraison = $adresselivraison;

        return $this;
    }

    public function getPrestation(): ?string
    {
        return $this->prestation;
    }

    public function setPrestation(?string $prestation): self
    {
        $this->prestation = $prestation;

        return $this;
    }

    public function getNombreveh(): ?int
    {
        return $this->nombreveh;
    }

    public function setNombreveh(?int $nombreveh): self
    {
        $this->nombreveh = $nombreveh;

        return $this;
    }

    public function getModelevehicule(): ?string
    {
        return $this->modelevehicule;
    }

    public function setModelevehicule(?string $modelevehicule): self
    {
        $this->modelevehicule = $modelevehicule;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(?string $couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function getTypekit(): ?string
    {
        return $this->typekit;
    }

    public function setTypekit(?string $typekit): self
    {
        $this->typekit = $typekit;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(?float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getDatevalidationbat(): ?\DateTimeInterface
    {
        return $this->datevalidationbat;
    }

    public function setDatevalidationbat(?\DateTimeInterface $datevalidationbat): self
    {
        $this->datevalidationbat = $datevalidationbat;

        return $this;
    }

    public function getCodesrg(): ?string
    {
        return $this->codesrg;
    }

    public function setCodesrg(?string $codesrg): self
    {
        $this->codesrg = $codesrg;

        return $this;
    }

    public function getDateenvoicodesrg(): ?\DateTimeInterface
    {
        return $this->dateenvoicodesrg;
    }

    public function setDateenvoicodesrg(?\DateTimeInterface $dateenvoicodesrg): self
    {
        $this->dateenvoicodesrg = $dateenvoicodesrg;

        return $this;
    }

    public function getDateexpeditionlogos(): ?\DateTimeInterface
    {
        return $this->dateexpeditionlogos;
    }

    public function setDateexpeditionlogos(?\DateTimeInterface $dateexpeditionlogos): self
    {
        $this->dateexpeditionlogos = $dateexpeditionlogos;

        return $this;
    }

    public function getDatepose(): ?\DateTimeInterface
    {
        return $this->datepose;
    }

    public function setDatepose(?\DateTimeInterface $datepose): self
    {
        $this->datepose = $datepose;

        return $this;
    }

    public function getPoseeffectuee(): ?bool
    {
        return $this->poseeffectuee;
    }

    public function setPoseeffectuee(?bool $poseeffectuee): self
    {
        $this->poseeffectuee = $poseeffectuee;

        return $this;
    }

    public function getAvancement(): ?string
    {
        return $this->avancement;
    }

    public function setAvancement(?string $avancement): self
    {
        $this->avancement = $avancement;

        return $this;
    }

    public function getCodeana(): ?string
    {
        return $this->codeana;
    }

    public function setCodeana(?string $codeana): self
    {
        $this->codeana = $codeana;

        return $this;
    }

    public function getCommentairedemande(): ?string
    {
        return $this->commentairedemande;
    }

    public function setCommentairedemande(?string $commentairedemande): self
    {
        $this->commentairedemande = $commentairedemande;

        return $this;
    }

    public function getOuverture(): ?bool
    {
        return $this->ouverture;
    }

    public function setOuverture(?bool $ouverture): self
    {
        $this->ouverture = $ouverture;

        return $this;
    }

    public function getExploitation(): ?bool
    {
        return $this->exploitation;
    }

    public function setExploitation(?bool $exploitation): self
    {
        $this->exploitation = $exploitation;

        return $this;
    }

    public function getDateouverture(): ?\DateTimeInterface
    {
        return $this->dateouverture;
    }

    public function setDateouverture(?\DateTimeInterface $dateouverture): self
    {
        $this->dateouverture = $dateouverture;

        return $this;
    }

    public function getDateposevoulue(): ?\DateTimeInterface
    {
        return $this->dateposevoulue;
    }

    public function setDateposevoulue(?\DateTimeInterface $dateposevoulue): self
    {
        $this->dateposevoulue = $dateposevoulue;

        return $this;
    }

    public function getChefdeprojet(): ?string
    {
        return $this->chefdeprojet;
    }

    public function setChefdeprojet(?string $chefdeprojet): self
    {
        $this->chefdeprojet = $chefdeprojet;

        return $this;
    }

    public function getTypesignaletique(): ?string
    {
        return $this->typesignaletique;
    }

    public function setTypesignaletique(?string $typesignaletique): self
    {
        $this->typesignaletique = $typesignaletique;

        return $this;
    }

    public function getSurvey(): ?\DateTimeInterface
    {
        return $this->survey;
    }

    public function setSurvey(?\DateTimeInterface $survey): self
    {
        $this->survey = $survey;

        return $this;
    }

    public function getBatrecu(): ?\DateTimeInterface
    {
        return $this->batrecu;
    }

    public function setBatrecu(?\DateTimeInterface $batrecu): self
    {
        $this->batrecu = $batrecu;

        return $this;
    }

    public function getBatvalide(): ?bool
    {
        return $this->batvalide;
    }

    public function setBatvalide(?bool $batvalide): self
    {
        $this->batvalide = $batvalide;

        return $this;
    }

    public function getAutorisationsyndic(): ?string
    {
        return $this->autorisationsyndic;
    }

    public function setAutorisationsyndic(?string $autorisationsyndic): self
    {
        $this->autorisationsyndic = $autorisationsyndic;

        return $this;
    }

    public function getAutorisationmairie(): ?string
    {
        return $this->autorisationmairie;
    }

    public function setAutorisationmairie(?string $autorisationmairie): self
    {
        $this->autorisationmairie = $autorisationmairie;

        return $this;
    }

    public function getDevisrecu(): ?\DateTimeInterface
    {
        return $this->devisrecu;
    }

    public function setDevisrecu(?\DateTimeInterface $devisrecu): self
    {
        $this->devisrecu = $devisrecu;

        return $this;
    }

    public function getChiffrageht(): ?float
    {
        return $this->chiffrageht;
    }

    public function setChiffrageht(?float $chiffrageht): self
    {
        $this->chiffrageht = $chiffrageht;

        return $this;
    }

    public function getChiffragehtvalide(): ?float
    {
        return $this->chiffragehtvalide;
    }

    public function setChiffragehtvalide(?float $chiffragehtvalide): self
    {
        $this->chiffragehtvalide = $chiffragehtvalide;

        return $this;
    }

    public function getBudget(): ?string
    {
        return $this->budget;
    }

    public function setBudget(?string $budget): self
    {
        $this->budget = $budget;

        return $this;
    }

    public function getNumcommande(): ?string
    {
        return $this->numcommande;
    }

    public function setNumcommande(?string $numcommande): self
    {
        $this->numcommande = $numcommande;

        return $this;
    }

    public function getPoserealiseeetcommentaires(): ?string
    {
        return $this->poserealiseeetcommentaires;
    }

    public function setPoserealiseeetcommentaires(?string $poserealiseeetcommentaires): self
    {
        $this->poserealiseeetcommentaires = $poserealiseeetcommentaires;

        return $this;
    }

    public function getContacts(): ?string
    {
        return $this->contacts;
    }

    public function setContacts(?string $contacts): self
    {
        $this->contacts = $contacts;

        return $this;
    }
}
