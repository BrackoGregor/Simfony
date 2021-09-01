<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Udelezenec
 *
 * @ORM\Table(name="udelezenec")
 * @ORM\Entity
 */
class Udelezenec
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ime", type="string", length=100, nullable=true)
     */
    private $ime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="genderRank", type="string", length=100, nullable=true)
     */
    private $genderrank;

    /**
     * @var string|null
     *
     * @ORM\Column(name="divRank", type="string", length=100, nullable=true)
     */
    private $divrank;

    /**
     * @var string|null
     *
     * @ORM\Column(name="overallRank", type="string", length=100, nullable=true)
     */
    private $overallrank;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bib", type="string", length=100, nullable=true)
     */
    private $bib;

    /**
     * @var string|null
     *
     * @ORM\Column(name="division", type="string", length=100, nullable=true)
     */
    private $division;

    /**
     * @var string|null
     *
     * @ORM\Column(name="age", type="string", length=100, nullable=true)
     */
    private $age;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", length=100, nullable=true)
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country", type="string", length=100, nullable=true)
     */
    private $country;

    /**
     * @var string|null
     *
     * @ORM\Column(name="profession", type="string", length=100, nullable=true)
     */
    private $profession;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points", type="string", length=100, nullable=true)
     */
    private $points;

    /**
     * @var string|null
     *
     * @ORM\Column(name="swim", type="string", length=100, nullable=true)
     */
    private $swim;

    /**
     * @var string|null
     *
     * @ORM\Column(name="swimDistance", type="string", length=100, nullable=true)
     */
    private $swimdistance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="t1", type="string", length=100, nullable=true)
     */
    private $t1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bike", type="string", length=100, nullable=true)
     */
    private $bike;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bikeDistance", type="string", length=100, nullable=true)
     */
    private $bikedistance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="t2", type="string", length=100, nullable=true)
     */
    private $t2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="run", type="string", length=100, nullable=true)
     */
    private $run;

    /**
     * @var string|null
     *
     * @ORM\Column(name="runDistance", type="string", length=100, nullable=true)
     */
    private $rundistance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="overall", type="string", length=100, nullable=true)
     */
    private $overall;


}
