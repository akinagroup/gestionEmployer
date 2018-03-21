<?php

namespace SNT\ServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employers
 *
 * @ORM\Table(name="employers")
 * @ORM\Entity(repositoryClass="SNT\ServiceBundle\Repository\EmployersRepository")
 */
class Employers
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Matricule", type="string", length=30)
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="NomComplet", type="string", length=30)
     */
    private $nomComplet;

    /**
     * @var string
     *
     * @ORM\Column(name="Addresse", type="string", length=60)
     */
    private $addresse;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set matricule
     *
     * @param string $matricule
     *
     * @return Employers
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set nomComplet
     *
     * @param string $nomComplet
     *
     * @return Employers
     */
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    /**
     * Get nomComplet
     *
     * @return string
     */
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set addresse
     *
     * @param string $addresse
     *
     * @return Employers
     */
    public function setAddresse($addresse)
    {
        $this->addresse = $addresse;

        return $this;
    }

    /**
     * Get addresse
     *
     * @return string
     */
    public function getAddresse()
    {
        return $this->addresse;
    }
}

