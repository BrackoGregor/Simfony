<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysConfig
 *
 * @ORM\Table(name="sys_config")
 * @ORM\Entity
 */
class SysConfig
{
    /**
     * @var string
     *
     * @ORM\Column(name="variable", type="string", length=128, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $variable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="string", length=128, nullable=true)
     */
    private $value;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="set_time", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $setTime = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="set_by", type="string", length=128, nullable=true)
     */
    private $setBy;


}
