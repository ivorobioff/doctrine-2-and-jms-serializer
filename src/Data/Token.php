<?php
namespace Developer2010\Data;

use Developer2010\Data\Filter\AbstractFilter;

use JMS\Serializer\Annotation as JMS;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table("tokens")
 *
 * @author Igor Vorobiov<igor.vorobioff@gmail.com>
 */
class Token
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     *
     * @JMS\Type("integer")
     */
    private $id;

    public function setId(int $id) : void
    {
        $this->id = $id;
    }

    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="string")
     *
     * @JMS\Type("string")
     */
    private $name;

    /**
     * @ORM\OneToOne(targetEntity="Developer2010\Data\Filter\AbstractFilter",
     *     cascade={"persist", "remove"}, orphanRemoval=true)
     *
     * @JMS\Type("Developer2010\Data\Filter\AbstractFilter")
     */
    private $filter;

    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setFilter(AbstractFilter $filter) : void
    {
        $this->filter = $filter;
    }

    public function getFilter() : ?AbstractFilter
    {
        return $this->filter;
    }
}