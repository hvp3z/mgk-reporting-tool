<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReportingTypeRepository")
 */
class ReportingType
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
    private $designation;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Reporting", mappedBy="type", cascade={"persist", "remove"})
     */
    private $reporting;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getReporting(): ?Reporting
    {
        return $this->reporting;
    }

    public function setReporting(Reporting $reporting): self
    {
        $this->reporting = $reporting;

        // set the owning side of the relation if necessary
        if ($this !== $reporting->getType()) {
            $reporting->setType($this);
        }

        return $this;
    }
}
