<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Udelezenec2
 *
 * @ORM\Table(name="udelezenec2")
 * @ORM\Entity
 */
class Udelezenec2
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
     * @ORM\Column(name="rank1", type="string", length=100, nullable=true)
     */
    private $rank1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="competitor", type="string", length=100, nullable=true)
     */
    private $competitor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country", type="string", length=100, nullable=true)
     */
    private $country;

    /**
     * @var string|null
     *
     * @ORM\Column(name="age_category", type="string", length=100, nullable=true)
     */
    private $ageCategory;

    /**
     * @var string|null
     *
     * @ORM\Column(name="swim", type="string", length=100, nullable=true)
     */
    private $swim;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trans1", type="string", length=100, nullable=true)
     */
    private $trans1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bike", type="string", length=100, nullable=true)
     */
    private $bike;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trans2", type="string", length=100, nullable=true)
     */
    private $trans2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="run", type="string", length=100, nullable=true)
     */
    private $run;

    /**
     * @var string|null
     *
     * @ORM\Column(name="finish", type="string", length=100, nullable=true)
     */
    private $finish;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment1", type="string", length=100, nullable=true)
     */
    private $comment1;


}
